<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Hotel;
use App\Models\TourCategory;
use App\Models\Hotal_Category;
use App\Models\TourDay;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth',['except'=>['index','aboutUS', 'checkout', 'contactW']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $tours='';
        $hotels='';

         if($request->has('days_nights')){
            $tours=Tour::with(['category'=>function($q) use($request){
                $q->where('id',$request->days_nights);
            },'tour_day'])->get();
            $hotels=Hotel::with('category')->get();
            $tourCategories=TourCategory::all();
        $hotel_categories=Hotal_Category::all();
        }
        else if($request->has('people')){
            $tours=Tour::with(['category'=>function($q) use($request){
                $q->where('people',$request->people);
            },'tour_day'])->get();
            $hotels=Hotel::with('category')->get();
            $tourCategories=TourCategory::all();
            $hotel_categories=Hotal_Category::all();
        }
        else if($request->has('hotel_category')){
            $hotels=Hotel::with(['category'=>function($q) use($request){
                $q->where('id',$request->hotel_category);
            }])->get();
            $tours=Tour::with(['category','tour_day'])->get();
            $tourCategories=TourCategory::all();
            $hotel_categories=Hotal_Category::all();

        }else {



        $tours=Tour::with(['category','tour_day'])->get();
        $hotels=Hotel::with('category')->get();
        $tourCategories=TourCategory::all();
        $hotel_categories=Hotal_Category::all();
    }
        return view('welcome',compact('tours','hotels','hotel_categories','tourCategories'));
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function checkout($tourid)
    {
        $tour=Tour::with(['category','tour_day'])->where('id',$tourid)->get();
        $hotel_categories=Hotal_Category::all();
        return view('checkout',compact('tour','hotel_categories'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function getTours(Request $request){
        $tours='';
        $hotels='';
        $tourDays='';
         if($request->has('days_nights')){
            $tours=Tour::with(['category'=>function($q) use($request){
                $q->where('id',$request->days_nights);
            },'tour_day'])->get();
            $hotels=Hotel::with('category')->get();
            $tourDays=TourDay::all();
        }
        else if($request->has('people')){
            $tours=Tour::with(['category'=>function($q) use($request){
                $q->where('people',$request->people);
            },'tour_day'])->get();
            $hotels=Hotel::with('category')->get();
            $tourDays=TourDay::all();
        }
        else if($request->has('hotel_category')){
            $hotels=Hotel::with(['category'=>function($q) use($request){
                $q->where('id',$request->hotel_category);
            }])->get();
            $tours=Tour::with(['category','tour_day'])->get();
            $tourDays=TourDay::all();

        }else {
            $tours=Tour::with(['category','tour_day'])->get();
            $hotels=Hotel::with('category')->get();
            $tourDays=TourDay::all();
        }






        $response=['tours'=>$tours,'hotels'=>$hotels,'tourDays'=>$tourDays];
        return response()->json($response);

    }
}
