<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\TaskCollection;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TaskController extends Controller
{
    //
    public function index(Request $request){
        if ($request->ajax()) {
            // try {
            // return "asdsda";
                $query = Task::with('assignorUser','assigneeUser')->orderBy('created_at', 'desc');

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

                $data = TaskCollection::collection($records);
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
        $assigner = User::get();
        $assignee = User::get();
        return view('pages.task.index',compact('assigner', 'assignee'));
    }
    public function save(Request $request)
    {
        if ($request->isMethod('post')) {
            // return $request->all();
            $request->validate([
                'task_name' =>'required|string',
                'assignor_user_id' =>'required',
                'assignee_user_id' =>'required',
                'due_date' => 'required',
                'link_1' =>'required',
                'link_2' =>'required',
                // 'descriptions' =>'required',
                // 'priority' => 'required',
                // 'status' => 'required'
            ]);
            // return $profileId;
            $taskId = $request->task_id;
            $taskData = [
                'task_name' =>$request->task_name,
                'assignor_user_id' =>$request->assignor_user_id,
                'assignee_user_id' =>$request->assignee_user_id,
                'task_date' =>date('Y-m-d'),
                'due_date' =>date('Y-m-d',strtotime($request->due_date)),
                'link_1' =>$request->link_1,
                'link_2' =>$request->link_2,
                // 'descriptions' =>$request->descriptions,
                'priority' => $request->priority,
                // 'status' => $request->status,
            ];
            $employee = Task::updateOrCreate(['id'=>$taskId],$taskData);
            // if ($request->hasFile('profilePicture') && $request->file('profilePicture')->isValid()) {
            //     $profile->clearMediaCollection('profilePicture');
            //     $profile->addMediaFromRequest('profilePicture')->toMediaCollection('profilePicture');
            // }
            $redirectUrl = route('task.list');
            return response()->json(['status' => true, 'message' => "Task Saved Succefully",'data'=>['redirect_url'=>$redirectUrl]]);
        }
    }
}
