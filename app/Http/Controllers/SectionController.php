<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class SectionController extends Controller
{
    public function showAbout(Request $request,$id){
    	$data=array();
    	$data['title']='About|A1 Network';
        $data['about']=About::find($id);
    	return view('admin.about',$data);
    }
    public function postAbout(Request $request,$id){
        // dd($request->all());
          $this->validate($request,[
            'details' => 'required',
           
        ]);

         $about=About::find($id);
         $about->details=$request->details;
         $about->save();
         // dd($about);
         session()->flash('success', 'Successfully Saved!');
         return redirect()->route('admin.about',[1]);
    }
}
