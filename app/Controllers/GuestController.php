<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class GuestController extends BaseController
{
    public function index()
    {
        //
    }
    
    public function home()
    {
        return view('Hotel\home');
    }
    public function about()
    {
        return view('Hotel\about');
    }
    public function room()
    {
        return view('Hotel\room');
    }
    public function gallery()
    {
        return view('Hotel\gallery');
    }
    
    public function blog()
    {
        return view('Hotel\blog');
    }
    public function contact()
    {
        return view('Hotel\contact');
    }
}
