<?php

namespace App\Http\Controllers\database;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\home_courses;                

class home_courses_save extends Controller
{
    function addDataCourse(Request $req)
    {
         $person=new home_courses;
         $person->name=$req->name;
         $person->email=$req->email;
         $person->phone_no=$req->phone_no;
         $person->qualification=$req->qualification;
         $person->course=$req->course;
         $person->save();

    }

}
