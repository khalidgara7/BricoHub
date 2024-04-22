@extends('layouts.master')

@section('title')
    Employee
@endsection

@section('content')
    <!-- Get In Touch Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay=".3s">
        <div class="container py-5">
            <div class="bg-light px-4 py-5 rounded">
                <div class="text-center">
                    <h1 class="display-5 mb-5">Find Your Brico Talent</h1>
                </div>
                <form class="text-center mb-4" action="#">
                    <div class="row g-4">
                        <div class="col-xl-10 col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-xl-3">
                                    <select class="form-select p-3 border-0">
                                        <option value="Type Of Service" class="">Type Of Service</option>
                                        <option value="Brico Control-2">Brico Control-2</option>
                                        <option value="Brico Control-3">Brico Control-3</option>
                                        <option value="Brico Control-4">Brico Control-4</option>
                                        <option value="Brico Control-5">Brico Control-5</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <input type="text" class="form-control p-3 border-0" placeholder="Name">
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <input type="text" class="form-control p-3 border-0" placeholder="Phone">
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <input type="email" class="form-control p-3 border-0" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-12">
                            <input type="button" class="btn btn-primary w-100 p-3 border-0" value="GET STARTED">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Get In Touch End -->




    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Employees
                </h5>
                <h1 class="display-5 w-50 mx-auto">Our Members</h1>
            </div>
            <div class="row g-5">
                @foreach ($users as $user)
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="rounded team-item">
                            <img src="{{ asset('storage/images/employee/' . $user->employee->image) }}"
                                 class="img-fluid w-100 rounded-top border border-bottom-0" alt="Employee Image"
                                 style="height: 200px; object-fit: cover;">
                            <div class="team-content bg-primary text-dark text-center py-3">
                                <span class="fs-4 fw-bold">{{ $user->name }}</span>
                                <p class="text-muted mb-0">{{ $user->employee->skill }}</p>
                            </div>
                            <div class="team-icon d-flex flex-column ">
                                <a href="#" class="btn btn-primary border-0 mb-2"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
