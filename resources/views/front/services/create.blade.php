<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawsom-all.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assetspro/images/fav.jpg') }}">
    <link rel="stylesheet" href="{{ asset('assetspro/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetspro/css/fontawsom-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetspro/css/style.css') }}" />


</head>

<body>

    @include('Layouts.navbar_start')
    <div class="container-fluid">
        <div class="cover">
            <div class="cover-layer">
                <div class="container web-portion">
                    <div class="nav-detail">

                        <section style="background-color:  #eee;" class="pt-4">

                            <h2 class="text-center ">Services</h2>


                            <div class="container ">
                                <div class="row justify-content-center mb-3 " style="background-color:  #eee;">
                                    <div class="col-md-12 col-xl-10">


                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif


                                        <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label  class="form-label" for="form6Example1">title</label>
                                                        <input name="title" type="text" id="form6Example1" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="form-label" for="form6Example2">Category</label>
                                                        <select name="category_id" id="" class="form-control" style="background-color: #ffffff">
                                                            @foreach ($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input -->
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label" for="form6Example3">Description</label>
                                                <textarea  name="description" id="form6Example3" class="form-control" id="" cols="10" rows="8"></textarea>
                                            </div>

                                            <!-- Text input -->
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label" for="form6Example4">Image</label>

                                                <input name="image" type="file" id="form6Example4" style="background-color: #ffffff" class="form-control" />
                                            </div>

                                            <!-- Email input -->
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label" for="form6Example5">Years of experience</label>
                                                <input name="years_of_experience" type="number" id="form6Example5" class="form-control" min="0" max="20" />
                                            </div>                                            

                                            <!-- Number input -->
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label" for="form6Example6">Price (MAD)</label>
                                                <div class="input-group">
                                                    <input name="price" type="number" id="form6Example6" class="form-control" />
                                                    <span class="input-group-text">MAD</span>

                                                </div>
                                            </div>
                                            
 
                                            <!-- Submit button -->
                                            <button type="submit" data-mdb-ripple-init type="button"
                                                class="btn btn-primary btn-block mb-4">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
