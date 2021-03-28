<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SemestreController extends Controller
{
    function index(){

        $data= DB::table('semestre')->get();
        return view('SemestreVu',['data'=>$data]);


    }
}

