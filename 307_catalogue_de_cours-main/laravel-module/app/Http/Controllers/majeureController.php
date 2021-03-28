<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class majeureController extends Controller
{
    function index(){

        $data= DB::table('majeure')->get();
        return view('MajeureVu',['data'=>$data]);


    }




}
