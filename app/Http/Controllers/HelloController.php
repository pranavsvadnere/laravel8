<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    public function example()
    {
      echo "<h1> HelloController Called Successfully...!!</h1>";
      // return view('second-page');
    }

}
