
@extends('admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <link rel="stylesheet" href="admin-css/view-staff.css">
</head>
<body>
    <div class="container">
        <h1>User Information</h1>
        <table class="staff-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>permissions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{$admin->id}}</td>
                    <td>{{$admin->one}}</td>
                    <td>{{$admin->two}}</td>
                    <td>{{$admin->three}}</td>
                    <td>{{$admin->four}}</td>
                    <td>{{$admin->five}}</td>
                    <td>
                      <a href="{{ route('edituser') }}"><button>edit</button></a>
                      <form action="{{ route('destroy', $admin->id) }}" method="POST">
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
</body>
</html>
@endsection