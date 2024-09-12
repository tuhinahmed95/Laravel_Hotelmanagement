
@extends('admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Table</title>
    <link rel="stylesheet" href="admin-css/view-staff.css">
</head>
<body>
    <div class="container">
        <h1>Staff Information</h1> 
        <table class="staff-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($staffs as $staff)
                <tr>
                    <td>{{$staff->id}}</td>
                    <td>{{$staff->name}}</td>
                    <td>{{$staff->email}}</td>
                    <td>{{$staff->position}}</td>
                    <td>{{$staff->department}}</td>
                    <td>{{$staff->salary}}</td>
                    <td>
                      <a href="{{route('edit',$staff->id)}}"><button>edit</button></a>
                        
                        <form class="update" action="{{route('delete')}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="text" name="staff_id" id="" value="{{$staff->id}}" hidden>
                            <BUtton>delete</BUtton>
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