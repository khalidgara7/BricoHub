@extends('layouts.master')

@section('title')
    Categories 
@endsection

@section('content')

    <!-- Categories Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our  Categories</h5>
                
            </div>
            <div class="row g-5">
                @foreach($categories as $category)
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-item">
                        
                        <img src="{{ asset('storage/images/category/' . $category->image) }}" class="img-fluid w-100 h-40" alt="img">

                        <a href="" class="fs-4 fw-bold text-center"><span> {{$category->name}}</span></a>
                        
                    </div>
                </div>
                @endforeach
            </div>
                
        </div>
        <div class="pagination justify-content-center mt-5">
            {{ $categories->links() }} 
        </div>
        
    </div>

    <!-- categories End -->


@endsection


