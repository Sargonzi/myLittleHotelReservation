<!DOCTYPE html>

<html>

<head>

    <title>Hi {{ $user->name }}</title>

</head>

<body>



<h1>Dear {{ $user->name }}</h1>

<p>
    Your request to book {{ $room->name }} have been approve. Your booking Id is {{ $booking->booking_code }} and the price is {{ $room->price }} MMKs.
</p>
<p> Sincertly, From littleHotel Admin team</p>


</body>

</html>