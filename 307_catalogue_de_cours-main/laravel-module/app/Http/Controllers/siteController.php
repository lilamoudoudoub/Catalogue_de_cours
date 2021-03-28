<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\semestreModel;
class siteController extends Controller
{
    function index(){

        $data= DB::table('site')->get();
        return view('SiteVu',['data'=>$data]);

        // return semestreModel::all();

    }
}
