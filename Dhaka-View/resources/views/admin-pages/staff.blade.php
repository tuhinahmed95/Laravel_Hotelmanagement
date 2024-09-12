
@extends('admin')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Data Form</title>
    <link rel="stylesheet" href="admin-css/staff.css">
</head>
<body>
    <div class="form-container">
        <h1>Staff Information Form</h1>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" id="position" name="position" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" id="department" name="department" required>
            </div>
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="number" id="salary" name="salary" required>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
@endsection