<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->userType == '0')
            {
                return view('user.home');
            }
            else 
            {
                return view('admin.home');
            }
        }
        else 
        {
            return redirect()->back();
        }
    } 
}
