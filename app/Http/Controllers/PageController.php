<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function package(){
        return view('package');
    }
    public function book(){
        return view('book');
    }
    public function checkBooking(){
        return view('checkBooking');
    }
    public function thankYou(){
        return view('bookingComplete');
    }
    public function comingsoon(){
        return view('comingSoon');
    }
}
