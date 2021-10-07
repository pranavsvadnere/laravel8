<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pranav extends Controller
{
  public function welcome($name,$surname)
  {

    echo "<h1>Pranav Controller Called..</h1>";
    $data = array('name'=>$name,'surname' =>$surname);
    return view('second-page',$data);
  }
}
