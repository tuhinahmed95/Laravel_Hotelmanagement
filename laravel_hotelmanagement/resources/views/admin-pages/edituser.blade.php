




@extends('admin')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link rel="stylesheet" href="admin-css/adduser.css">
</head>
<body>
    <div class="form-con">
        <h1>User Registration</h1>
        <form action="#" method="POST">
            
            <div class="form-grouper">
                <label for="name">Name:</label>
                <input type="text" id="one" name="one" placeholder="Enter your name" required>
            </div>

            <div class="form-grouper">
                <label for="email">Email:</label>
                <input type="email" id="two" name="two" placeholder="Enter your email" required>
            </div>

            <div class="form-grouper">
                <label for="password">Password:</label>
                <input type="password" id="three" name="three" placeholder="Enter your password" required>
            </div>

            <div class="form-grouper">
                <label for="role">Role:</label>
                <select id="four" name="four" required>
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="Receptionist">Receptionist</option>
                    <option value="Housekeeper">Housekeeper</option>
                    <option value="Guest">Guest</option>
                </select>
            </div>

            <div class="form-grouper">
                <label for="permission">Permissions:</label>
                <textarea id="five" name="five" placeholder="Describe user permissions" rows="3"></textarea>
            </div>

            <div class="form-grouper">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
@endsection