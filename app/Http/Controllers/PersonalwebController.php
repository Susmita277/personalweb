<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalwebController extends Controller
{
    public function index(){
        return view('personalweb');
    }
}
