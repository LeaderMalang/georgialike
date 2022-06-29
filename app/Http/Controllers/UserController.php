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
        return view('user.home');
    }
}
