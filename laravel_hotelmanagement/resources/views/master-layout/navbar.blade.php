 <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="{{ url('/home') }}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h2 class="m-0 text-primary text-uppercase">DHAKA HEIGHTS</h2>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">mtuhinahmed95@gmail.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+8801755876938</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="{{ url('/home') }}" class="navbar-brand d-block d-lg-none">
                            <h2 class="m-0 text-primary text-uppercase">Dhaka Heights</h2>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{ url('/home') }}" class="nav-item nav-link active">Home</a>
                                <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                                <a href="{{ url('/service') }}" class="nav-item nav-link">Services</a>
                                <a href="{{ url('/room') }}" class="nav-item nav-link">Rooms</a>
                                <a href="{{ url('/amenities') }}" class="nav-item nav-link">Amenities</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="{{ url('/book') }}" class="dropdown-item">Booking</a>
                                        <a href="{{ url('/team') }}" class="dropdown-item">Our Team</a>
                                        <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div>
                                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                                <a href="{{ url('/view-feedback') }}" class="nav-item nav-link">Feedback</a>
                            </div>
                            <a href="{{ url('/login') }}" class="nav-item nav-link active">Login</a>
                                <a href="{{ url('/about') }}" class="nav-item nav-link">Registration</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->
