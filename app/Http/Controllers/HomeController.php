<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', []);
    }
    
    public function quote()
    {
        return view('quote', []);
    }
    
    public function thankyou()
    {
        if(\Session::has('firstname')) {
            \Session::forget('firstname');
            return view('thankyou', []);
        } else {
            return redirect('quote');
        }
    }

    public function quoteSubmit(Request $request)
    {
        $firstname = $request->firstname;
        $lastname  = $request->lastname;
        $email     = $request->email;
        $zipcode   = $request->zipcode;
        $phone     = $request->phone;
        \Session::put('firstname', $firstname);
        return response()->json(array('sms'=>1));
    }
}
