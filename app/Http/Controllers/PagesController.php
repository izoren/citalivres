<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        return view('index');
    }
    public function getAuteurs(){
        return view('auteurs');
    }public function getContact(){
        return view('contact');
    }
}
