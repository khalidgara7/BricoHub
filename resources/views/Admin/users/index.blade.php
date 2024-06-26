<@extends('Admin.layouts.master')

    @section('title')
    Users
@endsection

@section('content')

    <div class="nk-app-root">
        <!-- wrap @s -->

        <div class="nk-wrap ">

            <!-- content @s -->
            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="col-md-4">
                                        <div class="card card-bordered card-full">
                                            <div class="card-inner">
                                                <div class="card-title-group align-start mb-0">
                                                    <div class="card-title">
                                                        <h6 class="subtitle">Total Users</h6>
                                                    </div>
                                                    <div class="card-tools">
                                                        <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Total Deposited"></em>
                                                    </div>
                                                </div>
                                                <div class="card-amount">
                                                    <span class="amount">
                                                        {{$total_users}}
                                                        <span class="currency currency-usd">
                                                            Users
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                               data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                    <li><a href="#" class="btn btn-white btn-outline-light"><em
                                                                class="icon ni ni-download-cloud"></em><span>Export</span></a>
                                                    </li>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-primary"
                                                               data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-plus"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><span>Add User</span></a></li>
                                                                    <li><a href="#"><span>Add Team</span></a></li>
                                                                    <li><a href="#"><span>Import User</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .toggle-wrap -->
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        <div class="card-inner position-relative card-tools-toggle">
                                            <div class="card-title-group">
                                                <div class="card-tools">
                                                    <div class="form-inline flex-nowrap gx-3">
                                                        <div class="form-wrap w-150px">
                                                            <select class="form-select js-select2" data-search="off"
                                                                    data-placeholder="Bulk Action">
                                                                <option value="">Bulk Action</option>
                                                                <option value="email">Send Email</option>
                                                                <option value="group">Change Group</option>
                                                                <option value="suspend">Suspend User</option>
                                                                <option value="delete">Delete User</option>
                                                            </select>
                                                        </div>
                                                        <div class="btn-wrap">
                                                            <span class="d-none d-md-block"><button
                                                                    class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                            <span class="d-md-none"><button
                                                                    class="btn btn-dim btn-outline-light btn-icon disabled"><em
                                                                        class="icon ni ni-arrow-right"></em></button></span>
                                                        </div>
                                                    </div><!-- .form-inline -->
                                                </div><!-- .card-tools -->
                                                <div class="card-tools me-n1">
                                                    <ul class="btn-toolbar gx-1">
                                                        <li>
                                                            <a href="#" class="btn btn-icon search-toggle toggle-search"
                                                               data-target="search"><em class="icon ni ni-search"></em></a>
                                                        </li><!-- li -->
                                                        <li class="btn-toolbar-sep"></li><!-- li -->
                                                        <li>
                                                            <div class="toggle-wrap">
                                                                <a href="#" class="btn btn-icon btn-trigger toggle"
                                                                   data-target="cardTools"><em
                                                                        class="icon ni ni-menu-right"></em></a>
                                                                <div class="toggle-content" data-content="cardTools">
                                                                    <ul class="btn-toolbar gx-1">
                                                                        <li class="toggle-close">
                                                                            <a href="#"
                                                                               class="btn btn-icon btn-trigger toggle"
                                                                               data-target="cardTools"><em
                                                                                    class="icon ni ni-arrow-left"></em></a>
                                                                        </li><!-- li -->
                                                                        <li>
                                                                            <div class="dropdown">
                                                                                <a href="#"
                                                                                   class="btn btn-trigger btn-icon dropdown-toggle"
                                                                                   data-bs-toggle="dropdown">
                                                                                    <div class="dot dot-primary"></div>
                                                                                    <em class="icon ni ni-filter-alt"></em>
                                                                                </a>
                                                                                <div
                                                                                    class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                                    <div class="dropdown-head">
                                                                                        <span
                                                                                            class="sub-title dropdown-title">Filter Users</span>
                                                                                        <div class="dropdown">
                                                                                            <a href="#"
                                                                                               class="btn btn-sm btn-icon">
                                                                                                <em class="icon ni ni-more-h"></em>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="dropdown-body dropdown-body-rg">
                                                                                        <div class="row gx-6 gy-3">
                                                                                            <div class="col-6">
                                                                                                <div
                                                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        class="custom-control-input"
                                                                                                        id="hasBalance">
                                                                                                    <label
                                                                                                        class="custom-control-label"
                                                                                                        for="hasBalance">
                                                                                                        Have
                                                                                                        Balance</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <div
                                                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        class="custom-control-input"
                                                                                                        id="hasKYC">
                                                                                                    <label
                                                                                                        class="custom-control-label"
                                                                                                        for="hasKYC">
                                                                                                        KYC
                                                                                                        Verified</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <div class="form-group">
                                                                                                    <label
                                                                                                        class="overline-title overline-title-alt">Role</label>
                                                                                                    <select
                                                                                                        class="form-select js-select2">
                                                                                                        <option
                                                                                                            value="any">
                                                                                                            Any Role
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="investor">
                                                                                                            Investor
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="seller">
                                                                                                            Seller
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="buyer">
                                                                                                            Buyer
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <div class="form-group">
                                                                                                    <label
                                                                                                        class="overline-title overline-title-alt">Status</label>
                                                                                                    <select
                                                                                                        class="form-select js-select2">
                                                                                                        <option
                                                                                                            value="any">
                                                                                                            Any Status
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="active">
                                                                                                            Active
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="pending">
                                                                                                            Pending
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="suspend">
                                                                                                            Suspend
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="deleted">
                                                                                                            Deleted
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="form-group">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-secondary">
                                                                                                        Filter
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="dropdown-foot between">
                                                                                        <a class="clickable" href="#">Reset
                                                                                            Filter</a>
                                                                                        <a href="#">Save Filter</a>
                                                                                    </div>
                                                                                </div><!-- .filter-wg -->
                                                                            </div><!-- .dropdown -->
                                                                        </li><!-- li -->
                                                                        <li>
                                                                            <div class="dropdown">
                                                                                <a href="#"
                                                                                   class="btn btn-trigger btn-icon dropdown-toggle"
                                                                                   data-bs-toggle="dropdown">
                                                                                    <em class="icon ni ni-setting"></em>
                                                                                </a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                                    <ul class="link-check">
                                                                                        <li><span>Show</span></li>
                                                                                        <li class="active"><a href="#">10</a>
                                                                                        </li>
                                                                                        <li><a href="#">20</a></li>
                                                                                        <li><a href="#">50</a></li>
                                                                                    </ul>
                                                                                    <ul class="link-check">
                                                                                        <li><span>Order</span></li>
                                                                                        <li class="active"><a href="#">DESC</a>
                                                                                        </li>
                                                                                        <li><a href="#">ASC</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div><!-- .dropdown -->
                                                                        </li><!-- li -->
                                                                    </ul><!-- .btn-toolbar -->
                                                                </div><!-- .toggle-content -->
                                                            </div><!-- .toggle-wrap -->
                                                        </li><!-- li -->
                                                    </ul><!-- .btn-toolbar -->
                                                </div><!-- .card-tools -->
                                            </div><!-- .card-title-group -->
                                            <div class="card-search search-wrap" data-search="search">
                                                <div class="card-body">
                                                    <div class="search-content">
                                                        <a href="#" class="search-back btn btn-icon toggle-search"
                                                           data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                        <input type="text"
                                                               class="form-control border-transparent form-focus-none"
                                                               placeholder="Search by user or email">
                                                        <button class="search-submit btn btn-icon"><em
                                                                class="icon ni ni-search"></em></button>
                                                    </div>
                                                </div>
                                            </div><!-- .card-search -->
                                        </div><!-- .card-inner -->
                                        <div class="card-inner p-0">
                                            <div class="nk-tb-list nk-tb-ulist is-compact">
                                                <div class="nk-tb-item nk-tb-head">
                                                    <div class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="uid">
                                                            <label class="custom-control-label" for="uid"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col"><span class="sub-text">User</span></div>
                                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">Role</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm"><span class="sub-text">Email</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span>
                                                    </div>
                                                    <div class="nk-tb-col"><span class="sub-text">Action</span></div>
                                                </div>
                                                <!-- .nk-tb-item -->
                                                @foreach($users as $user)
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div
                                                                class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input"
                                                                       id="uid1">
                                                                <label class="custom-control-label" for="uid1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-primary">
                                                                    <span>AB</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">{{$user->name}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>@foreach($user->roles as $role)
                                                                    {{$role->name}}
                                                                @endforeach</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>{{$user->email}}</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            @if($user->hasRole('employee'))
                                                                <p>{{ $user->employee->phone_number }}</p>
                                                            @endif
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                <li class="nk-tb-action-hidden">
                                                                    <form class="mx-3 "
                                                                          action="{{ route('user.destroy', $user) }}"
                                                                          method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-trigger btn-icon"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                onclick="return confirm('Do you really want to Delete ?');"
                                                                                type="submit">
                                                                            <em
                                                                                class="icon ni ni-trash-fill ">
                                                                            </em>
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <!-- .nk-tb-item -->
                                            </div><!-- .nk-tb-list -->
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner-group -->

                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- content @e -->
        </div>
        <!-- wrap @e -->
    </div>

@endsection
