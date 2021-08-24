<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\Types\True_;

class SlideImageController extends Controller
{
    public function sliderImage(){
        $sliders =   Slider::all();
        return view('admin.slider.view-slider',compact('sliders'));
    }
    public function create(){
        return view('admin.slider.create');
    }
    public function store(Request $request){
        $slider                 =   new Slider();
        $slider->headding       =   $request->input('headding');
        $slider->description    =   $request->input('description');
        $slider->link           =   $request->input('link');
        $slider->link_name      =   $request->input('link_name');
        if($request->hasfile('image')){
            $file               =   $request->file('image');
            $extention          =   $file->getClientOriginalExtension();
            $fileName           =   time().'.'.$extention;
            $file->move('upload/slider/',$fileName);
            $slider->image      =   $fileName;
        }
        $slider->status         =   $request->input('status') == true ? '1' : '0';
        $slider->save();
        return redirect()->back()->with('message','Slider Added Successfully');
    }
    public function edit($id){
        $slider                 =   Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
    }
    public function update(Request $request, $id){
        $slider                 =    Slider::find($id);
        $slider->headding       =   $request->input('headding');
        $slider->description    =   $request->input('description');
        $slider->link           =   $request->input('link');
        $slider->link_name      =   $request->input('link_name');
        if($request->hasfile('image')){
            $destination        =   'upload/slider/'.$slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file               =   $request->file('image');
            $extention          =   $file->getClientOriginalExtension();
            $fileName           =   time().'.'.$extention;
            $file->move('upload/slider/',$fileName);
            $slider->image      =   $fileName;
        }
        $slider->status         =   $request->input('status') == true ? '1' : '0';
        $slider->save();
        return redirect('/home.slider')->with('message','Slider Update Successfully');
    }
}
