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
        return view('admin.dashboard');
    }

    public function tours(Request $request)
    {
        return view('admin.tours');
    }
}
