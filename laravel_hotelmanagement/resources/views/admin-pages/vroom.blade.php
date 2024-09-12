@extends('admin')
@section('content')
<link rel="stylesheet" href="admin-css/vroom.css">
<div class="container">
    <h1>Room List</h1>
    <table class="room-list">
        <thead>
            <tr>
                <th>id</th>
                <th>Room No</th>
                <th>Room Type</th>
                <th>Bed Type</th>
                <th>Price</th>
                <th>Availability</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($rooms as $room)
            <tr>
                <td>{{$room->id}}</td>
                <td>{{$room->one}}</td>
                <td>{{$room->two}}</td>
                <td>{{$room->three}}</td>
                <td>{{$room->four}}</td>
                <td>{{$room->five}}</td>
                <td>{{$room->six}}</td>
                <td>
                    <!-- Route link with correct syntax -->
                    <a href="{{route('editroom',$room->id)}}"><button>Edit</button></a>
                    <form action="{{ route('remove', $room->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
