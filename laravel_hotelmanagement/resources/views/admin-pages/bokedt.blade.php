@extends('admin')
@section('content')


    <link rel="stylesheet" href="/admin-css/bookedit.css">

    <div class="container">
        <h1>Edit Booking</h1>
        <h4>Edit - {{ $book->name }}</h4>
        <form action="{{ route('aditbook', $book->id) }}" method="POST">
          @csrf
           

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $book->name }}" >
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $book->email }}" >
            </div>

            <div class="form-group">
                <label for="checkin">Check-in Date:</label>
                <input type="date" id="checkin" name="checkin" value="{{ $book->checkin }}" >
            </div>

            <div class="form-group">
                <label for="checkout">Check-out Date:</label>
                <input type="date" id="checkout" name="checkout" value="{{ $book->checkout }}" >
            </div>

            <div class="form-group">
                <label for="adult">Adults:</label>
                <input type="number" id="adult" name="adult" value="{{ $book->adult }}" min="0" >
            </div>

            <div class="form-group">
                <label for="children">Children:</label>
                <input type="number" id="children" name="children" value="{{ $book->children }}" min="0">
            </div>

            <div class="form-group">
                <label for="room">Room Number:</label>
                <input type="text" id="room" name="room" value="{{ $book->room }}" >
            </div>

            <button type="submit">Update Booking</button>
        </form>
    </div>



@endsection