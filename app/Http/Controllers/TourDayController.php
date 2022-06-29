<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourDay;
use App\Models\Tour;

class TourDayController extends Controller
{
    public function index(){
        $tour_days=TourDay::all();
        $tours=Tour::all();
        return view('admin.tour_day',compact('tours','tour_days'));
    }
    public function store(Request $request){
        $rules =  [
            "day_no" => "required",
            "description" => "required",
            'image'=> "required",
            'tour_id'=> "required"
        ];

        $request->validate($rules);
        $data =$request->all();
        // dd($data);
        if($request->hasFile('image')){

            $image = $request->file('image');
            $image_name = time().'_'.$image->getClientOriginalName();
            $path = public_path('assets/admin/tour_day/');
            $image->move($path,$image_name);

            $data['image'] = '/assets/admin/tour_day/'.$image_name;

        }
        TourDay::create($data);
        return redirect()->route('admin.tours.day');
    }
}
