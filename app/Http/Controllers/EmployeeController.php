<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeCollection;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    //
    public function index(Request $request){
        if ($request->ajax()) {
            // try {
            // return "asdsda";
                $query = Employee::with('user','designation','department')->orderBy('created_at', 'desc');

                // Handle search query
                // if ($request->has('search') && !empty($request->input('search')['value'])) {
                //     $searchValue = $request->input('search')['value'];
                //     $query->where(function ($q) use ($searchValue) {
                //         $q->where('description', 'like', '%' . $searchValue . '%')
                //             ->orWhere('code', 'like', '%' . $searchValue . '%');
                //     });
                // }

                $totalData = $query->count();
                $limit = $request->input('length') ?? 10;
                $start = $request->input('start') ?? 1;
                $data = [];
                $records = $query->limit($limit)->offset($start)->get();

                $data = EmployeeCollection::collection($records);
                $jsonData = array(
                    "draw" => (int) $request->input('draw'),
                    "recordsTotal" => (int) $totalData,
                    "recordsFiltered" => (int) $totalData,
                    "data" => $data,
                );

                return response()->json($jsonData);
            // } catch (\Exception $e) {
            //     logger($e->getMessage() . ' on ' . $e->getFile() . ' line number ' . $e->getLine());
            //     return $jsonData = array(
            //         "draw" => (int) $request->input('draw'),
            //         "recordsTotal" => (int) 0,
            //         "recordsFiltered" => (int) 0,
            //         "data" => []
            //     );
            // }
        }
        $departments = Department::get();
        $designations = Designation::get();
        return view('pages.employee.index',compact('departments', 'designations'));
    }
    public function save(Request $request)
    {
        if ($request->isMethod('post')) {
            // return $request->all();
            $request->validate([
                'firstname' =>'required|string|min:3',
                'email' =>'required|email|min:3',
                'lastname' =>'required|string|min:3',
                'about' =>'required|string|min:5',
                'date_joined' =>'required',
                'username' => 'required',
                'company' =>'required',
                'employee_id' =>'required',
                'department_id' => 'required',
                'designation_id' => 'required',
                'password' => 'required|confirmed|min:8', // At least 8 characters
                'password_confirmation' => 'required', // Required for confirmation
                'phone' => 'required|string|regex:/^[0-9\-\+\(\)\s]*$/'
            ],[
                'password.required' => 'The password field is required.',
                'password.confirmed' => 'The password confirmation does not match.',
                'password.min' => 'The password must be at least 8 characters.',
                'password_confirmation.required' => 'The password confirmation field is required.',
            ]);
            $userId = $request->user_id ?? NULL;
            // return $profileId;
            $roledata = Role::where('slug', 'employee')->first();
            $user = User::updateOrCreate(['id'=>$userId],
                [
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' =>$request->email,
                    'phone' =>$request->phone,
                    'username' =>$request->username,
                    'password' => Hash::make($request->password),
                    'email_verified_at' => now(),
                    'type' => $roledata->slug,
                    'is_active' => 1,
                    'created_at' => now(),
            ]);
    
            if($user->save()){
                $user->roles()->attach($roledata);
                $permissions= Permission::get();
                $user->permissions()->attach($permissions);
            }
            $employeeData = [
                'user_id' => $user->id,
                'employee_id' => $request->employee_id,
                'department_id' => $request->department_id,
                'designation_id' => $request->designation_id,
                'date_joined' => date('Y-m-d',strtotime($request->date_joined)),
                'company' => $request->company,
                'about' => $request->about
            ];
            $employee = Employee::updateOrCreate(['user_id'=>$userId],$employeeData);
            // if ($request->hasFile('profilePicture') && $request->file('profilePicture')->isValid()) {
            //     $profile->clearMediaCollection('profilePicture');
            //     $profile->addMediaFromRequest('profilePicture')->toMediaCollection('profilePicture');
            // }
           
           
            $redirectUrl = route('employee.list');
            return response()->json(['status' => true, 'message' => "Employee Saved Succefully",'data'=>['redirect_url'=>$redirectUrl]]);
        }
    }
}
