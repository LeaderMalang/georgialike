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
class UserController extends Controller
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
        $paid_bookings=Booking::where('is_paid',1)->count();

        $unpaid_bookings=Booking::where('is_paid',0)->count();

        return view('user.home',compact('paid_bookings','unpaid_bookings'));
    }

    public function paid_bookings(){
        $user_id=auth()->user()->id;
        $paid_bookings=Booking::with(['category','tour'])->where('user_id',$user_id)->get();
        return view('user.paid_booking',compact('paid_bookings'));


    }
    public function unpaid_bookings(){
        $unpaid_bookings=Booking::where('is_paid',0)->get();
        return view('user.unpaid_booking',compact('unpaid_bookings'));


    }
}
