<@extends('Admin.layouts.master')

@section('title')
    Bricohup | Admin Dashboard
@endsection

@section('content')

    <!-- content @s -->
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">

                        <div class="nk-block-between d-flex justify-content-center">

                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title"> Statiques Dashboard</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Welcome to Bricohub Dashboard Statiques.</p>
                                </div>
                            </div>
                            <!-- .nk-block-head-content -->

                            {{-- <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                            <li class="nk-block-tools-opt">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-user-add-fill"></em><span>Add User</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-coin-alt-fill"></em><span>Add Order</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-note-add-fill-c"></em><span>Add Page</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- .toggle-expand-content -->
                                </div><!-- .toggle-wrap -->
                            </div> --}}
                            <!-- .nk-block-head-content -->

                        </div>
                        <!-- .nk-block-between -->

                    </div><!-- .nk-block-head -->

                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">Total CAtegories</h6>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                                    <span class="amount"> {{$total_categories}} <span class="currency currency-usd">Category</span>
                                                    </span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">This Month</div>
                                                    <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                                <div class="invest-data-history">
                                                    <div class="title">This Week</div>
                                                    <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                            </div>
                                            <div class="invest-data-ck">
                                                <canvas class="iv-data-chart" id="totalDeposit"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">Total Users</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Total Withdraw"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                                    <span class="amount"> {{$UserStatique}} <span class="currency currency-usd">User</span>
                                                    </span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">This Month</div>
                                                    <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                                <div class="invest-data-history">
                                                    <div class="title">This Week</div>
                                                    <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                            </div>
                                            <div class="invest-data-ck">
                                                <canvas class="iv-data-chart" id="totalWithdraw"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-4">
                                <div class="card card-bordered  card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">Balance in Account</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Total Balance in Account"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                                    <span class="amount"> 79,358.50 <span class="currency currency-usd">USD</span>
                                                    </span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">This Month</div>
                                                    <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                                <div class="invest-data-history">
                                                    <div class="title">This Week</div>
                                                    <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                            </div>
                                            <div class="invest-data-ck">
                                                <canvas class="iv-data-chart" id="totalBalance"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div>

                            <!-- .Users -->
                            <div class="col-md-6 col-xxl-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner border-bottom">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title"> Recent Users </h6>
                                            </div>
                                            <div class="card-tools">
                                                <ul class="card-tools-nav">
                                                    <li class="active"><a href="{{route('user.index')}}"><span>All</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nk-activity">
                                        @foreach ($users as $user)
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-success"><img src="{{ asset('storage/images/employee/'. $user->image) }}" alt=""></div>
                                            <div class="nk-activity-data">
                                                <div class="label">{{$user->name}}</div>
                                                <span class="time">{{$user->email}}</span>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="pagination justify-content-center mt-5">
                                        {{ $users->links() }}
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .user -->

                            <div class="col-md-6 col-xxl-4">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner border-bottom">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Notifications</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="#" class="link">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="timeline">
                                            <h6 class="timeline-head">November, 2019</h6>
                                            <ul class="timeline-list">
                                                <li class="timeline-item">
                                                    <div class="timeline-status bg-primary is-outline"></div>
                                                    <div class="timeline-date">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                                    <div class="timeline-data">
                                                        <h6 class="timeline-title">Submited KYC Application</h6>
                                                        <div class="timeline-des">
                                                            <p>Re-submitted KYC form.</p>
                                                            <span class="time">09:30am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-status bg-primary"></div>
                                                    <div class="timeline-date">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                                    <div class="timeline-data">
                                                        <h6 class="timeline-title">Submited KYC Application</h6>
                                                        <div class="timeline-des">
                                                            <p>Re-submitted KYC form.</p>
                                                            <span class="time">09:30am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-status bg-pink"></div>
                                                    <div class="timeline-date">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                                    <div class="timeline-data">
                                                        <h6 class="timeline-title">Submited KYC Application</h6>
                                                        <div class="timeline-des">
                                                            <p>Re-submitted KYC form.</p>
                                                            <span class="time">09:30am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xl-12 col-xxl-8">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner border-bottom">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Recent Categories</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="{{route('category.index')}}" class="link">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-list">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>name</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>description</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span>image</span></div>
                                            <div class="nk-tb-col"><span>create-at</span></div>
                                        </div>
                                        @foreach ($categories as $category)

                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <div class="align-center">
                                                    <div class="user-avatar user-avatar-sm bg-light">
                                                        <span>P2</span>
                                                    </div>
                                                    <span class="tb-sub ms-2">{{$category->name}} <span class="d-none d-md-inline"></span></span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="user-card">
                                                    <div class="user-name">
                                                        <span class="tb-lead">{{$category->description}} </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-product">
                                                    <img
                                                        src="{{ asset('storage/images/category/' . $category->image) }}"
                                                        alt="" class="thumb">
                                                </span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub tb-amount">
                                                    @if($category->created_at)
                                                        {{$category->created_at->format('Y-m-d')}}
                                                    @else
                                                        N/A
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
@endsection
