<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomePage(){
      $data=array();
      $data['title']='Home|A1 Network';
      return view('user.pages.home',$data);
    }
     public function getPackagePage(){
      $data=array();
      $data['title']='Package|A1 Network';
      return view('user.pages.package',$data);
    }
}
