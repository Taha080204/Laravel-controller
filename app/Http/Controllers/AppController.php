<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
  public function index(){
    //return "Hello in LARAVEl controller 2305C1";
    return view('welcome');
  }
}