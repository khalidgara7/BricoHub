@extends('layouts.master')

@section('title')
    BricoHub
@endsection

@section('content')
    @if (session('error'))
        <div class="alert alert-danger  alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Carousel Start -->

    <div class="container-fluid carousel px-0 mb-5 pb-5">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h4 class="text-white mb-4 animated slideInDown">No 1 Brico Control Services</h4>
                            <h1 class="text-white display-1 mb-4 animated slideInDown">Enjoy Your Home Totally Brico Free
                            </h1>
                            <a href="" class="me-2"><button type="button"
                                    class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Read
                                    More</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Second slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h4 class="text-white mb-4 animated slideInDown">No 1 Brico Control Services</h4>
                            <h1 class="text-white display-1 mb-4 animated slideInDown">Enjoy Your Home Totally Brico Free
                            </h1>
                            <a href="" class="me-2"><button type="button"
                                    class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Read
                                    More</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev btn btn-primary border border-2 border-start-0 border-primary"
                type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next btn btn-primary border border-2 border-end-0 border-primary" type="button"
                data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Categories -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <div class="rotate-left bg-dark"></div>
                        <div class="rotate-right bg-dark"></div>
                        <img src="img/about-img.jpg" class="img-fluid h-100" alt="img">
                        <div class="bg-white experiences">
                            <h1 class="display-3">20</h1>
                            <h6 class="fw-bold">Categories</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            About Categories Bricohub</h5>
                        <h1 class="display-5 mb-2">World Best Brico Control Services Since 2008</h1>
                        <p class="fs-5" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipiscing
                            elit sed do eiu smod tempor incididunt ut labore dolore magna aliqua.Quis ipsum suspen disse
                            ultrices gravida Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                        <div class="row">
                            @foreach($categories as $category)

                            <div class="col-3">
                                <div class="text-center">
                                    <div class="">
                                        <span class="tb-product">
                                            <img src="{{ asset('storage/images/category/' . $category->image) }}"
                                                alt="" class="img-fluid rounded-circle"
                                                style="width: 100px; height: 100px;">
                                        </span>
                                    </div>
                                    <div class="my-2">
                                        <h5>{{$category->name}}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a href="{{route('list-categories')}}" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5">Find
                            Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->



    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our
                    Services
                </h5>
                <h1 class="display-5">Our recently Service</h1>
            </div>
            <div class="row g-5">
                @foreach ($services as $service)
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-left bg-dark">
                                <h4> khalid</h4>
                            </div>
                            <div class="project-right bg-dark">
                                <div class="project-content">
                                    <p> </p>
                                    <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn
                                        More</button>
                                </div>
                            </div>
                            <img src="img/project-1.jpg" class="img-fluid h-100" alt="img">
                            <a href="" class="fs-4 fw-bold text-center"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Blog
                </h5>
                <h1 class="display-5">Latest Blog & News</h1>
            </div>

            <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay=".5s">

                @foreach ($services as $service)
                <div class="blog-item">
                    <img src="{{ asset('storage/images/services/'. $service->image) }}" class="img-fluid w-100 rounded-top" alt="">
                    <div class="rounded-bottom bg-light">
                        <div class="d-flex justify-content-between p-4 pb-2">
                            <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                            <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                        </div>
                        <div class="px-4 pb-0">
                            <h4>{{$service->name}}</h4>
                            <p>{{$service->description}}</p>
                        </div>
                        <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                            <a href="#" type="button" class="btn btn-primary border-0">Learn More</a>
                            <a href="#" class="my-auto btn-primary border-0"><i class="fa fa-comments me-2"></i>23
                                Comments</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Services End -->





    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Team
                </h5>
                <h1 class="display-5 w-50 mx-auto">Our Members</h1>
            </div>
            <div class="row g-5">
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="rounded team-item">
                        <img src="img/team-1..jpg" class="img-fluid w-100 rounded-top border border-bottom-0"
                            alt="">
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-4 fw-bold">Full Name</span>
                            <p class="text-muted mb-0">Designation</p>
                        </div>
                        <div class="team-icon d-flex flex-column ">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="rounded team-item">
                        <img src="img/team-2.jpg" class="img-fluid w-100 rounded-top border border-bottom-0"
                            alt="">
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-4 fw-bold">Full Name</span>
                            <p class="text-muted mb-0">Designation</p>
                        </div>
                        <div class="team-icon d-flex flex-column ">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                    <div class="rounded team-item">
                        <img src="img/team-3.jpg" class="img-fluid w-100 rounded-top border border-bottom-0"
                            alt="">
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-4 fw-bold">Full Name</span>
                            <p class="text-muted mb-0">Designation</p>
                        </div>
                        <div class="team-icon d-flex flex-column ">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".9s">
                    <div class="rounded team-item">
                        <img src="img/team-4.jpg" class="img-fluid w-100 rounded-top border border-bottom-0"
                            alt="">
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-4 fw-bold">Full Name</span>
                            <p class="text-muted mb-0">Designation</p>
                        </div>
                        <div class="team-icon d-flex flex-column ">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testiminial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Testimonial
                </h5>
                <h1 class="display-5 w-50 mx-auto">What Clients Say About Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">Client Name</h4>
                            <p class="mb-1">Profession</p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">Client Name</h4>
                            <p class="mb-1">Profession</p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">Client Name</h4>
                            <p class="mb-1">Profession</p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">Client Name</h4>
                            <p class="mb-1">Profession</p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testiminial End -->

    <!-- Call To Action Start -->
    <div class="container-fluid py-5 call-to-action wow fadeInUp" data-wow-delay=".3s" style="margin: 6rem 0;">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <img src="img/action.jpg" class="img-fluid w-100 rounded-circle p-5" alt="">
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="text-start mt-4">
                        <h1 class="pb-4 text-white">Sign Up To Our Newsletter To Get The Latest Offers</h1>
                    </div>
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <div class="d-flex call-btn">
                                <input type="search"
                                    class="form-control py-3 px-4 w-100 border-0 rounded-0 rounded-end rounded-pill"
                                    name="search-input" value="" placeholder="Enter Your Email Address"
                                    required="Please enter a valid email" />
                                <button type="email" value="Search Now!"
                                    class="btn btn-primary border-0 rounded-pill rounded rounded-start px-5">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->
@endsection


</html>
