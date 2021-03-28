<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class promosController extends Controller
{
    function index(){

        $data= DB::table('promos')->get();
        return view('PromosVu',['data'=>$data]);

        // return semestreModel::all();

    }
}
