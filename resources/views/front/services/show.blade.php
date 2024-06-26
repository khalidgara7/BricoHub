@extends('layouts.master')

@section('title')
    BricoHub
@endsection

@section('content')
    <!-- Page Header Start -->
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">About The service</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <div class="rotate-left bg-dark"></div>
                        <div class="rotate-right bg-dark"></div>
                        <img src="{{ asset('storage/images/services/'. $service->image) }}" class="img-fluid h-100" alt="img">
                        <div class="bg-white experiences">
                            <h1 class="display-3">{{ $service->years_of_experience}}</h1>
                            <h6 class="fw-bold">Years Of Experiences</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <a href="{{ route('profile.index',$service->employee->user->id) }}" class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            {{$service->employee->user->name}}</a>
                        <h1 class="display-5 mb-2">{{$service->title}}</h1>
                        <p class="fs-5" style="text-align: justify;">{{$service->description}}</p>
                        <div class="row">
                            <div class="col-3">
                                <div class="text-center">
                                    <div class="p-4 bg-dark rounded d-flex"
                                        style="align-items: center; justify-content: center;">
                                        <i class="fas fa-city fa-4x text-primary"></i>
                                    </div>
                                    <div class="my-2">
                                        <h4>Service Price</h4>
                                        <h5>{{$service->price}} MAD</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <div class="p-4 bg-dark rounded d-flex"
                                        style="align-items: center; justify-content: center;">
                                        <i class="fas fa-school fa-4x text-primary"></i>
                                    </div>
                                    <div class="my-2">
                                        <h5>{{$service->Category->name}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <div class="p-4 bg-dark rounded d-flex"
                                        style="align-items: center; justify-content: center;">
                                        <i class="fas fa-warehouse fa-4x text-primary"></i>
                                    </div>
                                    <div class="my-2">
                                        <h5>Happy Customers</h5>
                                        <h5>{{$totalOffers}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <div class="p-4 bg-dark rounded d-flex"
                                        style="align-items: center; justify-content: center;">
                                        <i class="fas fa-hospital fa-4x text-primary"></i>
                                    </div>
                                    <div class="my-2">
                                        <h5>Status</h5>
                                        <h5>{{$service->status}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (session("error"))
                            <div class="alert alert-danger mt-5">
                                {{ session("error") }}
                            </div>
                        @endif
                        <form action="{{ route("reserve.service", $service->id) }}" method="post"
                              class="mt-5 w-100 border border-2
                              @if($errors->any() || session("error")) border-danger @else border-primary @endif
                               p-4 rounded-3 bg-light">
                            @csrf
                            @method('POST')

                            <div class="row">
                                <label for="start_date" class="col-6">
                                    <h5>Start Date</h5>
                                    <input type="date" value="{{old('start_date')}}"  name="start_date" id="start_date" class="form-control @error('start_date') is-invalid @enderror">
                                    @error('start_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </label>
                                <label for="end_date" class="col-6">
                                    <h5>End Date</h5>
                                    <input type="date" value="{{old('end_date')}}" name="end_date" id="end_date" class="form-control @error('end_date') is-invalid @enderror">
                                    @error('end_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </label>
                            </div>

                            <div class="row justify-content-center"> <!-- Center the button -->
                                <div class="col-6"> <!-- Use Bootstrap grid to control the width -->
                                    <button type="submit" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5 w-100"> <!-- Add w-100 to make the button full-width -->
                                        Reserve Services
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection


</html>
