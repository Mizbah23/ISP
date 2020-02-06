<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class SectionController extends Controller
{
    public function showAbout(){
    	$data=array();
    	$data['title']='About|A1 Network';
    	return view('admin.about',$data);
    }
    public function postAbout(Request $request){
          $this->validate($request,[
            'details' => 'required',
           
        ]);

         $about=new About;
         $about->details=$request->details;
         $about->save;
         session()->flash('success', 'Successfully Saved!');
         return redirect('admin.about');
    }
}
