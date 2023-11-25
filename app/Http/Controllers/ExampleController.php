<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ExampleController extends Controller
{
  public function test1(){
    return view("login");
  }
  public function login(){
    return view("login");
  }
  public function recieve(Request $request){
    return "the user email is ".$request["email"] ;
  }

};
 ?>
