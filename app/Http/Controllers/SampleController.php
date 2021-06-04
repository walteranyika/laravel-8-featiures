<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function hello(Request $request)
    {
         return ["name"=>"John Mark", "age"=>20, "email"=>"jm@gmail.com"];
    }

}
