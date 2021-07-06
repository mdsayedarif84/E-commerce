<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
   public function index() {
       return view('home');
   }
    public function add() {
        return 'hello about';
    }
}
