<?php

namespace App\Http\Controllers;

use app\Models\ListUser;
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


        $ListUser = new ListUser();
        /*'address' => $request->input('address'),
            'destination' => $request->input('destination'),
            'passenger' => $request->input('passenger'),
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'user_id' => rand(100000,999999),*/
        $ListUser->name = $validatedData['name'];
        $ListUser->email = $validatedData['email'];
        $ListUser->phone =  $validatedData['phone'];
        $ListUser->address = $validatedData['address'];
        $ListUser->destination = $validatedData['destination'];
        $ListUser->passenger = $validatedData['passenger'];
        $ListUser->from = $validatedData['from'];
        $ListUser->to = $validatedData['to'];
        $ListUser->user_id = bin2hex(random_bytes(16));
        $ListUser->save();

        return redirect('/')->with('success', 'Your Booking is Completed!');
    }
}
