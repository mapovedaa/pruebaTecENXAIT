<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    public static function getTownsPerDepartment($department_id = NULL)
    {
        $departments_and_towns = [];

        if ( isset($department_id) ) {
            # code...
        } else {
            $departments = Department::all();
            
            foreach ($departments as $key_department => $department) {
                $towns = Town::where('department_id',$department->id)->get();
                foreach ($towns as $key_town => $town) {
                    $departments_and_towns[$department->name][$town->id] = $town->name;
                }
            }
        }

        return $departments_and_towns;

    }
}
