<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('departments')->delete();

        $json  = file_get_contents(database_path() . '/data/departments.json');
        $data  = json_decode($json);
    

        foreach ($data->departments as $key => $value) {
            Department::updateOrCreate([
                'name'=> $value->name,
                'location'=> $value->location,
            ]);
        }
    }
}
