<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourCategory;

class TourCategoryController extends Controller
{
    public function index(){
        $categories=TourCategory::all();
        return view('admin.tour_category',compact('categories'));
    }
    public function store(Request $request){
        $rules =  [
            "days" => "required",
            "nights" => "required",
            'people'=> "required"
        ];

        $request->validate($rules);
        $data=$request->all();
        // dd($data);
        TourCategory::create($data);
        return redirect()->route('admin.tours.category');

    }
    public function destroy($id){
        TourCategory::destroy($id);
        return redirect()->route('admin.tours.category');
    }
}
