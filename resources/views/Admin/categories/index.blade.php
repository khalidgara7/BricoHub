<@extends('Admin.layouts.master')

    @section('title')
    Category
@endsection

@section('content')
    <!-- content @s -->
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">

                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Categories management</h3>
                            </div>

                            <!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">

                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary"
                                                   data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="{{route('category.create')}}"><em
                                                                    class="icon ni ni-note-add-fill-c"></em><span>Add Category</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                    <!-- .toggle-expand-content -->
                                </div>
                                <!-- .toggle-wrap -->
                            </div>
                            <!-- .nk-block-head-content -->
                        </div>
                        <!-- .nk-block-between -->
                    </div>
                    <!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">

                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">Total Categories</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                                    <span class="amount">
                                                        {{$total_categories}}
                                                        <span class="currency currency-usd">
                                                            Category
                                                        </span>
                                                    </span>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->

                            <div class="col-xl-12 col-xxl-8">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner border-bottom">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Recent Category</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="#" class="link">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-list">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>name</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>description</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span>image</span></div>
                                            <div class="nk-tb-col"><span>Action</span></div>
                                        </div>
                                        @foreach($categories as $category)

                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col tb-col-sm">
                                                    <div class="user-card">
                                                        <div class="user-name">
                                                            <span class="tb-lead">{{$category->name}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-sub"> {{$category->description}}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                                <span class="tb-product">
                                                                    <img
                                                                        src="{{ asset('storage/images/category/' . $category->image) }}"
                                                                        alt="" class="thumb">
                                                                </span>
                                                </div>

                                                <div class="nk-tb-col nk-tb-col-tools">

                                                    <ul class="nk-tb-actions gx-1">

                                                        <li class="nk-tb-action-hidden">
                                                            <a class="btn btn-trigger btn-icon"
                                                               href="{{ route('category.edit', [$category]) }}"
                                                               data-bs-placement="top" title="Edit">
                                                                <em class="icon ni ni-edit-fill"></em>
                                                            </a>
                                                        </li>

                                                        <li class="nk-tb-action-hidden">
                                                            <form class="mx-3"
                                                                  action="{{ route('category.destroy', $category) }}"
                                                                  method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Trash"
                                                                    onclick="return confirm('Do you really want to Delete ?');"
                                                                    type="submit">
                                                                    <em
                                                                        class="icon ni ni-trash-fill">
                                                                    </em>
                                                                </button>
                                                            </form>

                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a data-bs-toggle="modal" href="{{ route('category.edit', [$category->id]) }}"><em class="icon ni ni-edit-fill"></em><span>Edit Category</span></a></li>
                                                                        <li>
                                                                            <form class="mx-2"
                                                                                  action="{{ route('category.destroy', $category) }}"
                                                                                  method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Trash"
                                                                                        onclick="return confirm('Do you really want to Delete ?');"
                                                                                        type="submit">
                                                                                    <em
                                                                                        class="icon ni ni-trash-fill"></em> Trash category</button>
                                                                            </form>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
