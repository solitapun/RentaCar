<?php

namespace App\Http\Controllers;

use App\Models\ListUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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
        $listUser->booking_id = rand(100000,999999);    /*bin2hex(random_bytes(16));*/
        $listUser->save();

        // Send the booking confirmation email
        Mail::to($listUser->email)->send(new WelcomeMail($listUser->booking_id));

        return redirect('/book/complete')->with('success', 'Your Booking is Completed!');
    }

    public function show(Request $request)
    {
        $id = $request->input('bookingID');
        $user = DB::table('list_users')->where('booking_id', $id)->first();

        if ($user) {
            return view('bookingInfo', ['user' => $user]);
        } else {
            return view('bookingNotFound');
        }
    }
}

