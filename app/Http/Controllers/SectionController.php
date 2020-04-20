<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Section;

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
         session()->flash('success', 'Successfully Updated!');
         return redirect()->route('admin.about',[1]);
    }

    public function addService(){
        $data=array();
        $data['title']='Add|Service';
        return view('admin.addservice',$data);
    }

    public function postService(Request $request){
        // dd($request->all());
            $this->validate($request,[
            'shead'=>'required',
            'details' => 'required'
           
        ]);

         $section=new Section;
         $section->shead=$request->shead;
         $section->details=$request->details;
         $section->save();
         // dd($about);
         session()->flash('success', 'Successfully Updated!');
         return redirect()->route('admin.addservice');
    }


    public function viewService(){
        $data=array();
        $data['title']='Show|Service';
        $data['sections']=Section::all();
        return view('admin.viewservice',$data);
    }

}
