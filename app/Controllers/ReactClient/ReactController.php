<?php

namespace App\Http\Controllers\ReactClient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReactController extends Controller
{
    //

    public function index(){
      
            return view('welcome');
  
    }
}
