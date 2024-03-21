<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    // # homepage sito 
    public function home(){
        return view("home");
    }
    public function index(){
        // $trains=Train::whereDate('orario_di_partenza','=', Carbon::today()->toDateString())->get();
        $trains=Train::paginate(12);
        return view("train.index", compact("trains"));
    }
    public function show(Train $train){
        return view("train.show", compact("train"));
    }
}
