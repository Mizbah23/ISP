<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=array();       
        $data['title']='Admin|Dashboard'; 
        $data['about']=About::all();
        return view('admin.dashboard',$data);
    }
}
