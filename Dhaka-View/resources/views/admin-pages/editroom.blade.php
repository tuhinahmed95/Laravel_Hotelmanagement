


@extends('admin')
@section('content')


<link rel="stylesheet" href="admin-css/edit-room.css">
<div class="containerhok">
    <h1 class="head">This is a edit page</h1>
    <h4>Now you are editing room no. - {{ $room->one }}</h4>

   <form method="POST" action="{{route('uproom', $room->id)}}" >
    @csrf
     
        <div class="form-group">
            <label for="room_number">Room Number</label>
            <input type="text" name="one" id="one" class="form-control" value="{{$room->one}}"  >
        </div>

        <div class="form-group">
            <label for="room_type">Room Type</label>
            <select name="two" id="two" class="form-control"  value="{{$room->two}}" >
                <option > Presidential Suite</option>
                <option >Executive Room</option>
                <option >King Room</option>
                <option >Twin Room</option>
                <option >Double Room</option>
                <option >Single Room</option>
               
            </select>
        </div>

        <div class="form-group">
            <label for="bed_type">Bed Type</label>
            <select name="three" id="three" class="form-control"  value="{{$room->three}}" >
                <option >Twin Bed</option>
                <option >Double Bed</option>
                <option >Queen Bed</option>
                <option >King Bed</option>
                <option >Sofa Bed </option>
               
            </select>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <select name="four" id="four" class="form-control"  value="{{$room->four}}" >
                <option > 300</option>
                <option >200</option>
                <option >180</option>
                <option >150</option>
                <option >200</option>
                <option >100</option>
               
            </select>
        </div>

        <div class="form-group">
            <label for="availability_status">Availability Status</label>
            <select name="five" id="five" class="form-control"  value="{{$room->five}}" >
                <option >Available</option>
                <option >Dirty</option>
                <option>Occupied</option>
                <option>Booked</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="six" id="six" class="form-control"  value="{{$room->six}}" ></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Room</button>
    </form>
</div> 

@endsection