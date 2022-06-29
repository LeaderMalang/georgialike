<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\TourCategory;


class TourDetailController extends Controller
{
    public function index(){
        $tours=Tour::all();
        $categories=TourCategory::all();

        return view('admin.tour_detail',compact('tours','categories'));
    }
    public function store(Request $request){
        $rules =  [
            "title" => "required",
            "charges" => "required",
            'image'=> "required",
            'category_id'=> "required"
        ];

        $request->validate($rules);
        $data =$request->all();
        // dd($data);
        if($request->hasFile('image')){

            $image = $request->file('image');
            $image_name = time().'_'.$image->getClientOriginalName();
            $path = public_path('assets/admin/tour/');
            $image->move($path,$image_name);

            $data['image'] = '/assets/admin/tour/'.$image_name;

        }
        Tour::create($data);
        return redirect()->route('admin.tours.detail');
    }
    public function destroy($id){
        Tour::destroy($id);
        return redirect()->route('admin.tours.detail');
    }
}
