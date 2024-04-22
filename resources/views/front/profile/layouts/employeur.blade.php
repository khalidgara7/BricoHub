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
            <!-- Reservations -->
            <section style="background-color: #eee;" class="pt-4">
                <h2 class="text-center">Reservations ({{ count($reservations) }})</h2>
                <div class="container">
                    @if(count($reservations) > 0)
                        @foreach ($reservations as $reservation)
                            <div class="row justify-content-center mb-3">
                                <div class="col-md-12 col-xl-10">
                                    <div class="card shadow-0 border rounded-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Reservation Details</h5>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p><strong>Status:</strong> {{ $reservation->status }}</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p><strong>Price:</strong> {{ $reservation->price }} MAD</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p><strong>Date:</strong> {{ $reservation->date_reservation }}</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p><strong>Employee Name:</strong> {{ $reservation->service->employee->user->name }}</p>
                                                    @if($reservation->status == 'accepted')
                                                        <p><strong>Employeur Phone Number:</strong> {{ $reservation->service->employee->phone_number }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-12 col-xl-10">
                                <div class="card shadow-0 border rounded-3 mb-3">
                                    <div class="card-body">
                                        <p class="text-center">No reservations found.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </section>
            <!-- end reservation -->
        </div>
    </div>
@endsection
