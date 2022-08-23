<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $rules =  [
            "email" => "required|email",
            "subject" => "required",
            'message'=> "required",
        ];

        $request->validate($rules);

        $data =$request->all();
        ContactUs::create($data);
        return redirect()->back();
    }
}
