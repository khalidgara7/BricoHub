@extends('front.profile.profileMaster')

@section('profileContent')
    <div class="container web-portion">
        <div class="row top-det">
            <div class="col-md-4">
                <div class="profil-det-img d-flex">
                    <div class="dp">
                        <img src="" alt="">
                    </div>
                    <div class="pd">
                        <h2>Name :</h2>
                        <p>{{ auth()->user()->name }}</p>
                    </div>

                </div>
            </div>
            <div class="col-md-4 eml-mob">
                <ul>
                    <li><i class="fas fa-envelope"></i>{{ auth()->user()->email }}</li>
                    
                </ul>
            </div>
            <div class="col-md-4 d-flex map-mark">
                <i class="fas fa-calendar-alt"></i>
                <p>Created-At : {{ auth()->user()->created_at->format('Y-m-d')}} </p>
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
                                <h3>Hello I'm a {{ auth()->user()->name }} </h3>
                                <p> 
                                    "I am looking for an employee to do some work for me."
                                     </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section style="background-color:  #eee;" class="pt-4">

                <h2 class="text-center "> Offers </h2>
                <div class="container ">
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-12 col-xl-10">
                                <div class="card shadow-0 border rounded-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                    <img src=""
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
                                                <h5>adzazdazdzad</h5>
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
                                                    <p class="mb-2 text-muted "> azdadzazddzdazzdadzazdadzazdadzadz</p>
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
                                                    <h4 class="mb-1 me-1">aeazad</h4>
                                                    <span class="text-danger"><s>dazazdazdzda</s></span>
                                                </div>

                                                <h6 class="text-success">dazazdadzazd</h6>

                                                <div class="d-flex flex-column mt-4">
                                                    <a href=""
                                                        class="btn btn-primary btn-sm"> Edit </a>

                                                    <form class="d-flex flex-column mt-4"
                                                        action="" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-outline-danger btn-sm mt-2" type="submit">
                                                            Delete
                                                        </button>
                                                    </form>
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
@endsection
