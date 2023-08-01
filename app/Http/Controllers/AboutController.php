<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use coba\resources\views\about;

class AboutController extends Controller
{
    public function index(){
        return view('about', ["title" => "About"]);
    }
}
