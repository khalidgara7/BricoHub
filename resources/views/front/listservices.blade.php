@extends('layouts.master')

@section('title')
    Services
@endsection

@section('content')

    <!-- Get In Touch Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay=".3s">
        <div class="container py-5">
            <div class="bg-light px-4 py-5 rounded">
                <div class="text-center">
                    <h1 class="display-5 mb-5">Find Your Brico Control Services</h1>
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


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container ">
            <div class="row g-5">
                @foreach ($services as $service)
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <img src="{{ asset('storage/images/services/'. $service->image) }}" class="img-fluid w-100 rounded-top" alt="">
                    <div class="rounded-bottom bg-light">
                        <div class="d-flex justify-content-between p-4 pb-2">
                            <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>{{$service->employee->user->name}}</span>
                            <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>{{$service->employee->user->created_at->format('Y-m-d')}}</span>
                        </div>
                        <div class="px-4 pb-0">
                            <h4>{{$service->name}}</h4>
                            <p>{{$service->description}}.</p>
                        </div>
                        <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                            <a href="{{route('service.show',$service)}}" type="button" class="btn btn-primary border-0">View More</a>
                            <a href="#" class="my-auto btn-primary border-0"><i class="fa fa-comments me-2"></i>23
                                Comments</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="pagination justify-content-center mt-5">
            {{ $services->links() }} 
        </div> --}}
    </div>
    <!-- Services End -->
@endsection



