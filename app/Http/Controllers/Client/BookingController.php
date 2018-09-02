<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Booking;
use App\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use DateTime;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::check() == false) {
            return redirect()->route('login');
        }
        return View('client.book');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        if (Auth::check() == false) {
            return redirect()->route('login');
        }
        $room = Room::find($id);
        $user = Auth::user();
        return View('client.book', compact('room', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $room = Room::find($request->input('roomId'));
        $fdate = $request->input('checkIn');
        $tdate = $request->input('checkOut');
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $totalPrice = ($room->price * $interval->d);
        $booking = [
            'booking_code' => $request->input('bookingCode') . rand(100000, 999999),
            'user_userid' => $request->input('userId'),
            'room_roomid' => $request->input('roomId'),
            'check_in' => $request->input('checkIn'),
            'check_out' => $request->input('checkOut'),
            'num_person' => $request->input('numPerson'),
            'total_price' => $totalPrice,
            'status' => "1"
        ];
        Booking::create($booking);
        $bookedRoom = Room::find($request->input('roomId'));
        $bookedRoom->status = '0';
        $bookedRoom->save();
        return View('client.success', compact('booking','room'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function download($id)
    {
        $booking = Booking::find($id);
        $user = User::find($booking->user_userid);
        $room = Room::find($booking->room_roomid);

        $pdf = PDF::loadView('bookPdf', compact('booking', 'user', 'room'));

        return $pdf->download('receive.pdf');
    }

    public function email($id)
    {
        $booking = Booking::find($id);
        $user = User::find($booking->user_userid);
        $room = Room::find($booking->room_roomid);
        Mail::to('zisarknar.me@gmail.com')->send(new SendMailable($booking, $user, $room));
        return "email sent";
    }
}
