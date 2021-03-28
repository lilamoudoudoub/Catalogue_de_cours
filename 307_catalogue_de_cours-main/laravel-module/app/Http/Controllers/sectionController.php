<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sectionController extends Controller
{
    function index(){

        $data= DB::table('section')->get();
        return view('SectionVu',['data'=>$data]);


    }
}
