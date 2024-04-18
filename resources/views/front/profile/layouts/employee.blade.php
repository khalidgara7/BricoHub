@extends('front.profile.profileMaster')

@section('profileContent')
    <div class="container web-portion">
        <div class="row top-det">
            <div class="col-md-4">
                <div class="profil-det-img d-flex">
                    <div class="dp">
                        <img src="{{ asset('storage/images/employee/' . $user->employee->image) }}" alt="">
                    </div>
                    <div class="pd">
                        <h2>{{ $user->name }}</h2>
                        <p>{{ $user->employee->skill }}</p>
                    </div>

                </div>
            </div>
            <div class="col-md-4 eml-mob">
                <ul>
                    <li><i class="fas fa-envelope"></i> {{ $user->email }}</li>
                    <li><i class="fas fa-phone-square"></i> {{ $user->employee->phone_number }}
                    </li>
                </ul>
            </div>
            <div class="col-md-4 d-flex map-mark">
                <i class="fas fa-map-marker-alt"></i>
                <p>{{ $user->employee->ville }}</p>
            </div>
        </div>

        <div class="nav-detail">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link py-4" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false"></a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row no-margin home-det">

                        <div class="col-md-12 home-dat">
                            <div class="detal-jumbo">
                                <h3>Hello I'm {{ $user->employee->skill }}</h3>
                                <p>{{ $user->employee->bio }}
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
            <section style="background-color:  #eee;" class="pt-4">

                <h2 class="text-center ">Services</h2>

                @if(Auth::user()->isEmployee())
                <div class="d-flex justify-content-center mb-2">
                    <a href="{{ route('service.create') }}" class="btn btn-outline-primary btn-sm mt-2 text-blue">
                        Add New Service
                    </a>
                </div>
                @endif

                <div class="container ">
                    @foreach ($services as $service)
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-12 col-xl-10">
                                <div class="card shadow-0 border rounded-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                    <img src="{{ asset('storage/images/services/' . $service->image) }}"
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
                                                <h5>{{ $service->title }}</h5>
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
                                                    <p class="mb-2 text-muted "> <?php
                                                    $description = $service->description;
                                                    $words = str_word_count($description, 1);
                                                    $shortDescription = implode(' ', array_slice($words, 0, 10));
                                                    echo $shortDescription . (count($words) > 10 ? '...' : '');
                                                    ?></p>
                                                </div>

                                                <p class="text-truncate mb-4 mb-md-0">
                                                    There are many variations of passages of Lorem Ipsum
                                                    available, but the
                                                    majority have suffered alteration in some form, by
                                                    injected
                                                    humour, or
                                                    randomised words which don't look even slightly
                                                    believable.
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                                <div class="d-flex flex-row align-items-center mb-1">
                                                    <h4 class="mb-1 me-1">{{ $service->price }} MAD</h4>
                                                    <span class="text-danger"><s>{{ $service->price + 30 }} mad</s></span>
                                                </div>

                                                <h6 class="text-success">{{ $service->status }}</h6>
                                                @if(Auth::user()->isEmployee() && auth()->user()->id == $service->employee->user->id)
                                                <div class="d-flex flex-column mt-4">
                                                    <a href="{{ route('service.edit', $service) }}"
                                                        class="btn btn-primary btn-sm"> Edit </a>

                                                    <form class="d-flex flex-column mt-4"
                                                        action="{{ route('service.destroy', $service) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-outline-danger btn-sm mt-2" type="submit">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection
