<?php

namespace App\Http\Controllers;

use App\Models\ListUser;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function Register(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' =>  'required',
            'address' => 'required',
            'destination' => 'required',
            'passenger' => 'required|integer',
            'from' => 'required|date',
            'to' => 'required|date',
        ]);


        $listUser = new ListUser;
        $listUser->name = $validatedData['name'];
        $listUser->email = $validatedData['email'];
        $listUser->phone =  $validatedData['phone'];
        $listUser->address = $validatedData['address'];
        $listUser->destination = $validatedData['destination'];
        $listUser->passenger = $validatedData['passenger'];
        $listUser->from = $validatedData['from'];
        $listUser->to = $validatedData['to'];
        $listUser->user_id = rand(100000,999999);
        $listUser->save();

        return redirect('/')->with('success', 'Your Booking is Completed!');
    }
}
    /*bin2hex(random_bytes(16));*/
