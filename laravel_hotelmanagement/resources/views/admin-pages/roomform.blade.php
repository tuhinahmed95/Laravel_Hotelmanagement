


@extends('admin')
@section('content')


<link rel="stylesheet" href="admin-css/rlform.css">
<div class="container">
    <h1>Create a New Room</h1>

   <form method="POST" action="{{route('addroom')}}">
    
     @csrf
        <div class="form-group">
            <label for="room_number">Room Number</label>
            <input type="text" name="one" id="one" class="form-control"  required>
        </div>

        <div class="form-group">
            <label for="room_type">Room Type</label>
            <select name="two" id="two" class="form-control" required>
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
            <select name="three" id="three" class="form-control" required>
                <option >Twin Bed</option>
                <option >Double Bed</option>
                <option >Queen Bed</option>
                <option >King Bed</option>
                <option >Sofa Bed </option>
               
            </select>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <select name="four" id="four" class="form-control" required>
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
            <select name="five" id="five" class="form-control" required>
                <option >Available</option>
                <option >Dirty</option>
                <option>Occupied</option>
                <option>Booked</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="six" id="six" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Room</button>
    </form>
</div> 

@endsection