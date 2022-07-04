<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\Models\User;
use Auth;
use DB;
use Log;
use Validator;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Tour;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
       $paid= Booking::where('is_paid',1)->count();
       $all= Booking::count();

       $unpaid= Booking::where('is_paid',0)->count();
       $users=User::count();
       $tours=Tour::count();

        return view('admin.dashboard',compact('paid','unpaid','users','tours','all'));
    }

    public function tours(Request $request)
    {
        return view('admin.tours');
    }
    public function bookings(){
        $paid_bookings =Booking::with(['category','tour'])->get();
        return view('admin.booking',compact('paid_bookings'));
    }
}
