<?php

namespace App\Http\Controllers\Admin;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Booking;
use App\User;
use PDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
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
        $bookings = Booking::get();
        return View('admin.booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return View('admin.booking.add',
            [
                'users' => User::select('id', 'name')->get(),
                'rooms' => Room::select('id', 'name')->get()]);
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
        $room = Room::find($request->input('room_id'));
        $fdate = $request->input('checkIn');
        $tdate = $request->input('checkOut');
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $totalPrice = ($room->price * (int)$interval->d);
        $booking = [
            'booking_code' => $request->input('bookingCode'),
            'user_userid' => $request->input('user_id'),
            'room_roomid' => $request->input('room_id'),
            'check_in' => $request->input('checkIn'),
            'check_out' => $request->input('checkOut'),
            'num_person' => $request->input('numPerson'),
            'total_price' => $totalPrice,
            'status' => $request->input('status') ? '1' : '0'
        ];
        Booking::create($booking);
        $bookedRoom = Room::find($request->input('room_id'));
        $bookedRoom->status = '0';
        $bookedRoom->save();
        return redirect()->route('bookings.index');
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
        $booking = Booking::find($id);
        $userName = User::find($booking->user_userid);
        $roomName = Room::find($booking->room_roomid);
        return View('admin.booking.detail', compact('booking', 'userName', 'roomName'));
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

        $booking = Booking::find($id);
        $userOne = User::find($booking->user_userid);
        $roomOne = Room::find($booking->room_roomid);
        $users = User::all();
        $rooms = Room::all();
        return View('admin.booking.edit', compact('booking', 'userOne', 'roomOne', 'users', 'rooms'));
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
        Booking::update($request->get($id));
        return redirect()->route('bookings.index');
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
        Booking::where('id', $id)->delete();
        return back();
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
        Mail::to($user->email)->send(new SendMailable($booking, $user, $room));
        return redirect()->route('bookings.index')->with('alert', 'Email Sent!');
    }
}
