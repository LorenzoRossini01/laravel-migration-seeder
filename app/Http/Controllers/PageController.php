<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // # homepage sito 
    public function home(){
        return view("home");
    }
    public function index(){
        $trains=Train::all();
        return view("train.index", compact("trains"));
    }
    public function show(Train $train){
        return view("train.show", compact("train"));
    }
}
