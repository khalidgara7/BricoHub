@extends('Admin.layouts.master')

@section('title')
    Employee_info
@endsection

@section('content')

<div class="row justify-content-center">

    <div class="col-lg-8 ">
        <div class="card card-bordered h-100">
            <div class="card-inner">
                <div class="card-head">
                    <h5 class="card-title">Contact Form</h5>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger border text-center border-red-400 text-red-500 px-4 py-3 rounded relative" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('Employee.store')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label class="form-label" for="cf-full-name"> CIN </label>
                        <input type="text" class="form-control" id="cin" name="cin">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="cf-email-address"> phone_number </label>
                        <input type="text" class="form-control" id="phone" name="phone_number">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="cf-email-address"> Age </label>
                        <input type="text" class="form-control" id="age" name="age">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="cf-phone-no"> Skills </label>
                        <input type="text" class="form-control" id="skills" name="skill">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="cf-subject"> Ville</label>
                        <input name="ville" type="text" class="form-control" id="ville">
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="default-06"> Image Upload</label>
                            <div class="form-control-wrap">
                                <div class="form-file">
                                    <input name="image" type="file" multiple class="form-file-input" id="customFile">
                                    <label class="form-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="cf-default-textarea"> Bio </label>
                        <div class="form-control-wrap">
                            <textarea name="bio" class="form-control form-control-sm" id="cf-default-textarea" placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
