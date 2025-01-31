<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('designations')->delete();

        $json  = file_get_contents(database_path() . '/data/designations.json');
        $data  = json_decode($json);
    

        foreach ($data->designations as $key => $value) {
            Designation::updateOrCreate([
                'name'=> $value->name,
            ]);
        }
    }
}
