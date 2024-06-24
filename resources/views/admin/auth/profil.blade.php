@extends('admin.layout.main')
@section('title', 'Profil - ')

@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row ">
            <div class="col-xl-4">
                <h3>Edit Profile</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Edit Profile</li>
                </ol>
            </div>
            <div class="col-lg-12 justify-content-center">
                <!-- Bookmark Start-->
                <div class="bookmark">

                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="edit-profile">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">My Profile</h4>
                        <div class="card-options">
                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show mt-2">



                            <?php

                                    $nomer = 1;

                                    ?>

                            @foreach ($errors->all() as $error)
                            <li>{{ $nomer++ }}. {{ $error }}</li>
                            @endforeach
                        </div>
                        @endif
                        <form action="/admin/updateprofil" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row mb-2">
                                <div class="profile-title">
                                    <div class="media">
                                        <img class="img-70 rounded-circle" alt="" src="{{ asset('admin/assets/images/user/7.jpg') }}" />
                                        <div class="media-body">
                                            <h3 class="mb-1 f-20 txt-primary">{{ Auth::user()->name }}</h3>
                                            <p class="f-12">{{ Auth::user()->role }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input class="form-control" name="name" value="{{ Auth::user()->name }}" placeholder="your-email@domain.com" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email-Address</label>
                                <input class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="your-email@domain.com" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input class="form-control" name="password" type="password" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input class="form-control" name="repassword" type="password" />
                            </div>



                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
