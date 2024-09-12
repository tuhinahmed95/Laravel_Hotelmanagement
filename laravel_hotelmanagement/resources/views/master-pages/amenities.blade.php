

@extends('master')
@section('content')


 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 p-0" style="background-image: url(master-assets/img/carousel-1.jpg);">
             <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                   <h1 class="display-3 text-white mb-3 animated slideInDown">Amenities</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Amenities</li>
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
    <title>Card Grid Example</title>
    <link rel="stylesheet" href="master-css/amenities.css">
</head>
<body>
<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Amenities</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Amenities</span></h1>
                </div>
       
    <div class="containeri">
    
        <div class="card">
            <img src="master-assets/img/air-conditionin.jpg" alt="Card Image 1">
            <div class="card-content">
                <h3>Air Conditioner</h3>
                <p>This is a description for card 1.</p>
            </div>
        </div>
        <div class="card">
            <img src="master-assets/img/bathtub.jpg" alt="Card Image 2">
            <div class="card-content">
                <h3>Bathtub</h3>
                <p>This is a description for card 2.</p>
            </div>
        </div>
        <div class="card">
            <img src="master-assets/img/shower.jpg" alt="Card Image 3">
            <div class="card-content">
                <h3>Shower</h3>
                <p>This is a description for card 3.</p>
            </div>
        </div>
        <div class="card">
            <img src="master-assets/img/television-3.jpg" alt="Card Image 4">
            <div class="card-content">
                <h3>Television</h3>
                <p>This is a description for card 4.</p>
            </div>
        </div>
        <div class="card">
            <img src="master-assets/img/wifi-icon.webp" alt="Card Image 5">
            <div class="card-content">
                <h3>Wifi</h3>
                <p>This is a description for card 5.</p>
            </div>
        </div>
        <div class="card">
            <img src="master-assets/img/telephone.jpg" alt="Card Image 6">
            <div class="card-content">
                <h3>Telephone</h3>
                <p>This is a description for card 6.</p>
            </div>
        </div>
        <div class="card">
            <img src="master-assets/img/minibar.jpg" alt="Card Image 7">
            <div class="card-content">
                <h3>Mini Bar</h3>
                <p>This is a description for card 7.</p>
            </div>
        </div>
        <div class="card">
            <img src="master-assets/img/kitchen.jpg" alt="Card Image 8">
            <div class="card-content">
                <h3>Kitchen</h3>
                <p>This is a description for card 8.</p>
            </div>
        </div>
        <div class="card">
            <img src="master-assets/img/oven.avif" alt="Card Image 7">
            <div class="card-content">
                <h3>Oven</h3>
                <p>This is a description for card 7.</p>
            </div>
        </div>
        <div class="card">
            <img src="master-assets/img/iron.webp" alt="Card Image 8">
            <div class="card-content">
                <h3>Electric Iron</h3>
                <p>This is a description for card 8.</p>
            </div>
        </div>
    </div>
</body>
</html>
@endsection