<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotal_Category;
class HotelCategoryController extends Controller
{
    public function index(){
        $categories=Hotal_Category::all();
        return view('admin.hotel_category',compact('categories'));
    }
    public function store(Request $request){
        $rules =  [
            "name" => "required",
            "description" => "required",
            'image'=> "required"
        ];

        $request->validate($rules);
        $data=$request->all();
        // dd($data);
        if($request->hasFile('image')){

            $image = $request->file('image');
            $image_name = time().'_'.$image->getClientOriginalName();
            $path = public_path('assets/admin/hotel_category/');
            $image->move($path,$image_name);

            $data['image'] = '/assets/admin/hotel_category/'.$image_name;

        }
        // dd($data);
        Hotal_Category::create($data);
        return redirect()->route('admin.hotel.category');

    }
    public function destroy($id){
        Hotal_Category::destroy($id);
        return redirect()->route('admin.hotel.category');
    }
}
