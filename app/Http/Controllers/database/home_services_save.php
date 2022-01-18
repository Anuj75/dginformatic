<?php

namespace App\Http\Controllers\database;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\home_services;                

class home_services_save extends Controller
{

    function addDataService(Request $req)
    {
        $person=new home_services;
        $person->name=$req->name;
        $person->email=$req->email;
        $person->phone_no=$req->phone_no;
        $person->service=$req->service;
        $person->save();
    }

}
