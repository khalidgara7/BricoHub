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
                    <div class="row top-det">
                        <div class="col-md-4">
                            <div class="profil-det-img d-flex">
                                <div class="dp">
                                    <img src="{{ asset('storage/images/employee/' . auth()->user()->employee->image) }}"
                                        alt="">
                                </div>
                                <div class="pd">
                                    <h2>{{ auth()->user()->name }}</h2>
                                    <p>{{ auth()->user()->employee->skill }}</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 eml-mob">
                            <ul>
                                <li><i class="fas fa-envelope"></i> {{ auth()->user()->email }}</li>
                                <li><i class="fas fa-phone-square"></i> {{ auth()->user()->employee->phone_number }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 d-flex map-mark">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>{{ auth()->user()->employee->ville }}</p>
                        </div>
                    </div>
                    <div class="nav-detail">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Profile</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row no-margin home-det">
                                    <div class="col-md-4 big-img">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/images/employee/' . auth()->user()->employee->image) }}"
                                            alt="" style="width: 100%; height: auto;">
                                    </div>
                                    <div class="col-md-8 home-dat">
                                        <div class="detal-jumbo">
                                            <h3>Hellow I'm {{ auth()->user()->employee->skill }}</h3>
                                            <p>{{ auth()->user()->employee->bio }}
                                            </p>
                                        </div>
                                        <div class="links">
                                            <div class="row ">
                                                <div class="col-xl-6 col-md-12">
                                                    <ul class="btn-link">
                                                        <li>
                                                            <a href=""><i class="fas fa-paper-plane"></i> Hire
                                                                Me</a>
                                                        </li>
                                                        <li>
                                                            <a href=""><i class="fas fa-cloud-download-alt"></i>
                                                                Download Resume</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-6 col-md-12">
                                                    <ul class="social-link">
                                                        <li><i class="fab fa-facebook-f"></i></li>
                                                        <li><i class="fab fa-twitter"></i></li>
                                                        <li><i class="fab fa-pinterest-p"></i></li>
                                                        <li><i class="fab fa-linkedin-in"></i></li>
                                                        <li><i class="fab fa-linkedin-in"></i></li>
                                                        <li><i class="fab fa-youtube"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jumbo-address">
                                            <div class="row no-margin">
                                                <div class="col-lg-6 no-padding">

                                                    <table class="addrss-list">
                                                        <tbody>
                                                            <tr>
                                                                <th>Position</th>
                                                                <td>Freelance</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nationality</th>
                                                                <td>American</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Date of birth</th>
                                                                <td>09-06-1989</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="col-lg-6 no-padding">
                                                    <table class="addrss-list">
                                                        <tbody>
                                                            <tr>
                                                                <th>Experiance</th>
                                                                <td>5+ Years</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Website</th>
                                                                <td>www.yourdomain.com</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Languages</th>
                                                                <td>English,French,Germany</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section style="background-color: #eee;">

                            <h2 class="text-center py-2">Services</h2>
                            <div class="container ">
                                <div class="row justify-content-center mb-3">
                                    <div class="col-md-12 col-xl-10">
                                        <div class="card shadow-0 border rounded-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                                                                class="w-100" />
                                                            <a href="#!">
                                                                <div class="hover-overlay">
                                                                    <div class="mask"
                                                                        style="background-color: rgba(253, 253, 253, 0.15);">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                                        <h5>Quant trident shirts</h5>
                                                        <div class="d-flex flex-row">
                                                            <div class="text-danger mb-1 me-2">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <span>310</span>
                                                        </div>
                                                        <div class="mt-1 mb-0 text-muted small">
                                                            <span>100% cotton</span>
                                                            <span class="text-primary"> • </span>
                                                            <span>Light weight</span>
                                                            <span class="text-primary"> • </span>
                                                            <span>Best finish<br /></span>
                                                        </div>
                                                        <div class="mb-2 text-muted small">
                                                            <span>Unique design</span>
                                                            <span class="text-primary"> • </span>
                                                            <span>For men</span>
                                                            <span class="text-primary"> • </span>
                                                            <span>Casual<br /></span>
                                                        </div>
                                                        <p class="text-truncate mb-4 mb-md-0">
                                                            There are many variations of passages of Lorem Ipsum
                                                            available, but the
                                                            majority have suffered alteration in some form, by injected
                                                            humour, or
                                                            randomised words which don't look even slightly believable.
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                                        <div class="d-flex flex-row align-items-center mb-1">
                                                            <h4 class="mb-1 me-1">$13.99</h4>
                                                            <span class="text-danger"><s>$20.99</s></span>
                                                        </div>
                                                        <h6 class="text-success">Free shipping</h6>
                                                        <div class="d-flex flex-column mt-4">
                                                            <button class="btn btn-primary btn-sm"
                                                                type="button">Details</button>
                                                            <button class="btn btn-outline-primary btn-sm mt-2"
                                                                type="button">
                                                                Add to wishlist
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-3">
                                    <div class="col-md-12 col-xl-10">
                                        <div class="card shadow-0 border rounded-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(4).webp"
                                                                class="w-100" />
                                                            <a href="#!">
                                                                <div class="hover-overlay">
                                                                    <div class="mask"
                                                                        style="background-color: rgba(253, 253, 253, 0.15);">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                                        <h5>Quant olap shirts</h5>
                                                        <div class="d-flex flex-row">
                                                            <div class="text-danger mb-1 me-2">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <span>289</span>
                                                        </div>
                                                        <div class="mt-1 mb-0 text-muted small">
                                                            <span>100% cotton</span>
                                                            <span class="text-primary"> • </span>
                                                            <span>Light weight</span>
                                                            <span class="text-primary"> • </span>
                                                            <span>Best finish<br /></span>
                                                        </div>
                                                        <div class="mb-2 text-muted small">
                                                            <span>Unique design</span>
                                                            <span class="text-primary"> • </span>
                                                            <span>For men</span>
                                                            <span class="text-primary"> • </span>
                                                            <span>Casual<br /></span>
                                                        </div>
                                                        <p class="text-truncate mb-4 mb-md-0">
                                                            There are many variations of passages of Lorem Ipsum
                                                            available, but the
                                                            majority have suffered alteration in some form, by injected
                                                            humour, or
                                                            randomised words which don't look even slightly believable.
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                                        <div class="d-flex flex-row align-items-center mb-1">
                                                            <h4 class="mb-1 me-1">$14.99</h4>
                                                            <span class="text-danger"><s>$21.99</s></span>
                                                        </div>
                                                        <h6 class="text-success">Free shipping</h6>
                                                        <div class="d-flex flex-column mt-4">
                                                            <button class="btn btn-primary btn-sm"
                                                                type="button">Details</button>
                                                            <button class="btn btn-outline-primary btn-sm mt-2"
                                                                type="button">
                                                                Add to wishlist
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12 col-xl-10">
                                        <div class="card shadow-0 border rounded-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(5).webp"
                                                                class="w-100" />
                                                            <a href="#!">
                                                                <div class="hover-overlay">
                                                                    <div class="mask"
                                                                        style="background-color: rgba(253, 253, 253, 0.15);">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                                        <h5>Quant ruybi shirts</h5>
                                                        <div class="d-flex flex-row">
                                                            <div class="text-danger mb-1 me-2">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <span>145</span>
                                                        </div>
                                                        <div class="mt-1 mb-0 text-muted small">
                                                            <span>100% cotton</span>
                                                            <span class="text-primary"> • </span>
                                                            <span>Light weight</span>
                                                            <span class="text-primary"> • </span>
                                                            <span>Best finish<br /></span>
                                                        </div>
                                                        <div class="mb-2 text-muted small">
                                                            <span>Unique design</span>
                                                            <span class="text-primary"> • </span>
                                                            <span>For women</span>
                                                            <span class="text-primary"> • </span>
                                                            <span>Casual<br /></span>
                                                        </div>
                                                        <p class="text-truncate mb-4 mb-md-0">
                                                            There are many variations of passages of Lorem Ipsum
                                                            available, but the
                                                            majority have suffered alteration in some form, by injected
                                                            humour, or
                                                            randomised words which don't look even slightly believable.
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                                        <div class="d-flex flex-row align-items-center mb-1">
                                                            <h4 class="mb-1 me-1">$17.99</h4>
                                                            <span class="text-danger"><s>$25.99</s></span>
                                                        </div>
                                                        <h6 class="text-success">Free shipping</h6>
                                                        <div class="d-flex flex-column mt-4">
                                                            <button class="btn btn-primary btn-sm"
                                                                type="button">Details</button>
                                                            <button class="btn btn-outline-primary btn-sm mt-2"
                                                                type="button">
                                                                Add to wishlist
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
