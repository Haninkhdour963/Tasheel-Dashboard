


@extends('layouts.masterPage')
@section('content')

<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->




        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{asset('assetsPages/img/14.gif') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Perfect Customer That You Deserved</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2"> Together, we can enhance the efficiency of service delivery in the
                                        labor market.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft ">Search A Services</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight ">Find A Technician</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{asset('assetsPages/img/15.gif') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best technician That Fit You</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2"> Together, we can enhance the efficiency of service delivery in the
                                        labor market.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Services</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight ">Find A Customer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0" placeholder="Keyword" />
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Category</option>
                                    <option value="1">Electricity</option>
                                    <option value="2">Plumbing (Plumber)</option>
                                    <option value="3">Air Conditioning</option>
                                    <option value="4">Carpentry</option>
                                    <option value="5">Construction Works</option>
                                    <option value="6">Gypsum Board</option>
                                    <option value="7">Tiling</option>
                                    <option value="8">Plastering (Plasterer)</option>
                                    <option value="9">Painting</option>
                                    <option value="10">Special Decorations</option>
                                    <option value="11">Building Restructuring</option>
                                    <option value="12">Organizing and Cleaning Works</option>
                                    <option value="13">General Maintenance</option>
                                    <option value="14">Building Maintenance</option>
                                    <option value="15">Building Decorations</option>
                                    <option value="16">Interior Design</option>
                                    <option value="17">Architectural Design</option>
                                    <option value="18">Structural Design </option>
                                    
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Location</option>
                                    <option value="1">Amman </option>
                                    <option value="2">Zarqa</option>
                                    <option value="3">Irbid</option>
                                    <option value="4">Aqaba</option>
                                    <option value="5">Mafraq</option>
                                    <option value="6">Karak</option>
                                    <option value="7">Salt</option>
                                    <option value="8">Ma'an</option>
                                    <option value="9">Tafilah</option>
                                    <option value="10">Ajloun</option>
                                    <option value="11">Madaba</option>
                                    <option value="12">Jerash</option>
                                    <option value="13">Al-Balqa</option>
                                    <option value="14">Petra </option>
                                    <option value="15">Al-Karak</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <h6 class="mt-n1 mb-0">Featured</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <h6 class="mt-n1 mb-0">Full Time</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <h6 class="mt-n1 mb-0">Part Time</h6>
                            </a>
                        </li>
                    </ul>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Electricity</h6>
                            <p class="mb-0">General Electrician</p>
                            <p class="mb-0">Electrical Maintenance</p>
                            <p class="mb-0">Electrical Installations </p>
                            <p class="mb-0">Electrical Panel Repair </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h6 class="mb-3"> Plumbing (Plumber)</h6>
                            <p class="mb-0">Pipe Maintenance</p>
                            <p class="mb-0">Water Systems Installation</p>
                            <p class="mb-0">Leak Repair</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h6 class="mb-3">Air Conditioning </h6>
                            <p class="mb-0"> Air Conditioning Installation</p>
                            <p class="mb-0"> Air Conditioning Maintenance  </p>
                            <p class="mb-0"> Air Conditioning Unit Cleaning    </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                            <h6 class="mb-3">Carpentry</h6>
                            <p class="mb-0"> Door and Window Carpentry</p>
                            <p class="mb-0"> Furniture Manufacturing and Installation   </p>
                            <p class="mb-0"> Custom Woodwork
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                            <h6 class="mb-3">Construction Works </h6>
                            <p class="mb-0"> Wall Construction</p>
                            <p class="mb-0"> House Building</p>
                            <p class="mb-0">Roof Construction</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                            <h6 class="mb-3">Gypsum Board</h6>
                            <p class="mb-0">Gypsum Board Installation</p>
                            <p class="mb-0">Suspended Ceiling Designs</p>
                            <p class="mb-0">Gypsum Board Wall Construction</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                            <h6 class="mb-3"> Tiling </h6>
                            <p class="mb-0"> Floor Tiling Installation</p>
                            <p class="mb-0"> Wall Ceramic Installation  </p>
                            <p class="mb-0"> Tile Repair  </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3"> Plastering (Plasterer)</h6>
                            <p class="mb-0"> Interior Plastering</p>
                            <p class="mb-0"> Exterior  Plastering</p>
                            <p class="mb-0"> Wall Repair  </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">  Painting</h6>
                            <p class="mb-0"> Interior Painting</p>
                            <p class="mb-0"> Exterior Painting</p>
                            <p class="mb-0"> Decorative Painting </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">Special Decorations</h6>
                            <p class="mb-0">Gypsum Decorations</p>
                            <p class="mb-0"> Lighting Decorations</p>
                            <p class="mb-0">Custom Interior Designs  </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">  Building Restructuring</h6>
                            <p class="mb-0"> Interior Restructuring</p>
                            <p class="mb-0"> Exterior Restructuring</p>
                            <p class="mb-0">Restoration of Old Buildings  </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">Organizing and Cleaning Works</h6>
                            <p class="mb-0"> Post-construction Cleaning</p>
                            <p class="mb-0">Comprehensive Building Cleaning</p>
                            <p class="mb-0">Room Arrangement and Organization  </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">General Maintenance</h6>
                            <p class="mb-0"> Electrical Maintenance</p>
                            <p class="mb-0"> Pipe Maintenance</p>
                            <p class="mb-0"> Heating and Air Conditioning Maintenance </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3"> Building Maintenance</h6>
                            <p class="mb-0"> Building Structure Repair</p>
                            <p class="mb-0">Roof and Wall Maintenance</p>
                            <p class="mb-0">Door and Window Repair </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3"> Building Decorations</h6>
                            <p class="mb-0"> Ceiling and Wall Decorations</p>
                            <p class="mb-0"> Decorative Lighting</p>
                            <p class="mb-0"> Artistic Building Designs  </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3"> Interior Design</h6>
                            <p class="mb-0"> Interior Furniture Design</p>
                            <p class="mb-0"> Interior Decoration Design</p>
                            <p class="mb-0">Room Space Planning </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3"> Architectural Design</h6>
                            <p class="mb-0"> Residential Building Design</p>
                            <p class="mb-0"> Commercial Building Design</p>
                            <p class="mb-0">Building Layout Plans </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="category.html">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">  Structural Design</h6>
                            <p class="mb-0">Structural Calculations</p>
                            <p class="mb-0"> Foundation and Column Design</p>
                            <p class="mb-0">Construction Plans </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-12 text-start">
                                <img class="img-fluid w-100" src="{{asset('assetsPages/img/10.gif') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="{{asset('assetsPages/img/11.gif') }}"style="width: 100%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="{{asset('assetsPages/img/11.gif') }}" style="width: 100%;">
                            </div>
                         
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="{{asset('assetsPages/img/7.gif') }}"style="width: 100%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="{{asset('assetsPages/img/8.gif') }}"style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best  Technicians And Find customers</h1>
                        <p class="mb-4"> Tas'heel is an innovative web application designed to streamline the recruitment process and
                            foster effective communication between customers and skilled workers across various fields</p>
                        <p><i class="fa fa-check text-primary me-3"></i> Secure Financial Reservation</p>
                        <p><i class="fa fa-check text-primary me-3"></i> Robust Evaluation System</p>
                        <p><i class="fa fa-check text-primary me-3"></i> 24/7 Technical Support</p>
                        <p><i class="fa fa-check text-primary me-3"></i> Comprehensive Guarantees</p>
                        <p><i class="fa fa-check text-primary me-3"></i> User-Friendly Interface</p>
                        <a class="btn btn-primary py-3 px-5 mt-3 " href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

   



    </div>
    @endsection
