<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Hotal_Category;

class HotelController extends Controller
{
    public function index(){
        $hotels=Hotel::all();
        $categories=Hotal_Category::all();

        return view('admin.hotel',compact('hotels','categories'));
    }
    public function store(Request $request){
        $rules =  [
            "name" => "required",
            "description" => "required",
            'images'=> "required",
            'hotal_category_id'=> "required"
        ];

        $request->validate($rules);
        $data =$request->all();
        // dd($data);
        if($request->hasFile('images')){
            foreach ($request->file('images') as $imagefile) {
                // $images = $request->file('images');
                $image_name = time().'_'.$imagefile->getClientOriginalName();
                $path = public_path('assets/admin/tour/');
                $imagefile->move($path,$image_name);
                $full_img='/assets/admin/tour/'.$image_name;
                // $data['images'] .= ','.$full_img;
                $images[] = $full_img;
             }
             $data['images']=implode(',', $images);

        }
        Hotel::create($data);
        return redirect()->route('admin.hotel');
    }
    public function destroy($id){
        Hotel::destroy($id);
        return redirect()->route('admin.tours.detail');
    }
}
