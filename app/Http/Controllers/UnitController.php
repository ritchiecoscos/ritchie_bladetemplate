<?php

namespace App\Http\Controllers;
use App\Unit;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    //
    public function index(){

        $units = Unit::all();
        return view('pages.units',['units'=>$units]);
    }
}
