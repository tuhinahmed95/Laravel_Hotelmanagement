

@extends('master')

@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 p-0" style="background-image: url(master-assets/img/carousel-1.jpg);">
             <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                   <h1 class="display-3 text-white mb-3 animated slideInDown">View FeedBack</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">View FeedBack</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Display</title>
    
    <link rel="stylesheet" href="master-css/view-feedback.css">
</head>
<body>
    <div class="feedback-table-container">
    <a class="GAF" href="{{ url('/feedback') }}">Give A Feedback</a>
        <h2>Feedback Summary</h2>
       
        <table class="feedback-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Overall Satisfaction</th>
                    <th>First Impressions</th>
                    <th>Ease of Reservation</th>
                    <th>Check-In/Check-Out</th>
                    <th>Staff Friendliness</th>
                    <th>Comfort & Ambiance</th>
                    <th>Safety & Security</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>Satisfied</td>
                    <td>Good</td>
                    <td>Easy</td>
                    <td>Efficient</td>
                    <td>Excellent</td>
                    <td>Good</td>
                    <td>Very Safe</td>
                    <td>Great stay, will come back again.</td>
                </tr>
                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>
</body>
</html><br><br>
@endsection
