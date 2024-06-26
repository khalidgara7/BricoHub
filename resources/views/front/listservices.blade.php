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
                <form id="searchForm" class="text-center mb-4">
                    <div class="row g-4">
                        <div class="col-xl-10 col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-xl-3">
                                    <select id="category_id" name="category_id" class="form-select p-3 border-0">
                                        <option value="0" class="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <input id="titleInput" type="text" class="form-control p-3 border-0" placeholder="Search by Title">
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <input id="phoneInput" type="text" class="form-control p-3 border-0" placeholder="Phone">
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <input id="emailInput" type="email" class="form-control p-3 border-0" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-12">
                            <button id="searchButton" type="submit" class="btn btn-primary w-100 p-3 border-0">SEARCH</button>
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
            @if($services->count() > 0)
                <div class="row g-5" id="servicesContainer">
                    @foreach ($services as $service)
                        <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                            <img src="{{ asset('storage/images/services/'. $service->image) }}"
                                 class="img-fluid w-100 rounded-top border border-bottom-0" alt="Employee Image"
                                 style="height: 200px; object-fit: cover;">
                            <div class="rounded-bottom bg-light">
                                <div class="d-flex justify-content-between p-4 pb-2">
                                    <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>{{$service->employee->user->name}}</span>
                                    <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>{{$service->employee->user->created_at->format('Y-m-d')}}</span>
                                </div>
                                <div class="px-4 pb-0">
                                    <span><strong>Title:</strong> {{$service->title}}</span>
                                    <h6><strong>Category:</strong> {{$service->category->name}}</h6>
                                    <p class="mb-2 text-muted "> <?php
                                         $description = $service->description;
                                         $words = str_word_count($description, 1);
                                         $shortDescription = implode(' ', array_slice($words, 0, 10));
                                         echo $shortDescription . (count($words) > 10 ? '...' : '');
                                         ?></p>
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
            @else
                <div class="text-center">
                    <p>There are no services available.</p>
                </div>
            @endif
        </div>
         <div class="pagination justify-content-center mt-5">
            {{ $services->links() }}
        </div>
    </div>
    <!-- Services End -->
@endsection



