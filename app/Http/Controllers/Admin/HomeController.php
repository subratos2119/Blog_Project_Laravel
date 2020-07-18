<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{



    public function index()
    {


    	return view('admin.home');
    } 


    public function adminLogout()
    {

    	Auth::guard('admin')->logout();
    
    	return redirect()->route('admin.login');
    }
}
