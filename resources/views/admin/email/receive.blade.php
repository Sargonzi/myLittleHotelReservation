<!DOCTYPE html>

<html>

<head>

    <title>Hi {{ $user->name }}</title>

</head>

<body>


<h1>Dear {{ $user->name }}</h1>

<p>
    Your request to book <b>{{ $room->name }}</b> have been approve. Your booking Id is <b>{{ $booking->booking_code }}</b> and the
    price is <b>{{ $room->price }} MMKs</b> per day. You have booked for <b>{{ $booking->num_person }}</b> persons
    from <b>{{ $booking->check_in }}</b> to <b>{{ $booking->check_out }}</b>.
    The Total price will be <b>{{ $booking->total_price }} MMKS.</b>
</p>
<p> Sincerely, From KyawZinHotel </p>

<table style="width: 100%; border: #000000 1px;">
    <thead>
    <tr>
        <th>NO</th>
        <th>Room</th>
        <th>No of person</th>
        <th>rate</th>
        <th>Total price</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $booking->booking_code }}</td>
        <td>{{ $room->name }}</td>
        <td>{{ $booking->num_person }}</td>
        <td>{{ $room->price }}</td>
        <td>{{ $booking->total_price }}</td>
    </tr>
    </tbody>
</table>

</body>

</html>