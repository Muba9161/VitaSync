{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


@extends('layouts.main')

@section('website-page-title', 'Edit Profile')

@section('website-active-profile', 'active')

@section('website-main-section')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Edit Profile</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Edit Password</div>
                            </div>
                            @if (Auth::check())
                                <div class="card-body">
                                    <div class="text-center chat-image mb-5">
                                        <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                            @if (is_null($user->profile_picture))
                                                <a class="" href="profile.html">
                                                    <i class="brround"></i>
                                                </a>
                                            @else
                                                <a class="" href="#"><img alt="avatar"
                                                        src="{{ asset('storage/profile_pictures/' . $user->profile_picture) }}"
                                                        class="brround profilepic"></a>
                                            @endif
                                        </div>

                                        <div class="main-chat-msg-name">
                                            <a href="profile.html">
                                                <h5 class="mb-1 text-dark fw-semibold">{{ Auth::user()->name }}</h5>
                                            </a>
                                            <p class="text-muted mt-0 mb-0 pt-0 fs-13" style="text-transform: capitalize;">
                                                {{ Auth::user()->option }}</p>
                                        </div>

                                    </div>
                                    <div class="card panel-theme">
                                        <div class="card-body no-padding">
                                            <ul class="list-group no-margin">
                                                <li class="list-group-item d-flex ps-3">
                                                    <div class="social social-profile-buttons me-2">
                                                        <a class="social-icon text-primary" href="javascript:void(0)"><i
                                                                class="fe fe-mail"></i></a>
                                                    </div>
                                                    <a href="javascript:void(0)"
                                                        class="my-auto">{{ Auth::user()->email }}</a>
                                                </li>

                                                {{-- Phone Number --}}
                                                <li class="list-group-item d-flex ps-3">
                                                    <div class="social social-profile-buttons me-2">
                                                        <a class="social-icon text-primary" href="#"><i
                                                                class="fe fe-phone"></i></a>
                                                    </div>
                                                    @if (is_null($user->phone_number))
                                                        <p class="my-auto">No Data</p>
                                                    @else
                                                        <a href="#" class="my-auto"
                                                            onclick="copyDetails('{{ $user->phone_number }}')">{{ $user->phone_number }}</a>
                                                    @endif
                                                </li>

                                                {{-- LinkedIn Profile --}}
                                                <li class="list-group-item d-flex ps-3">
                                                    <div class="social social-profile-buttons me-2">
                                                        <a class="social-icon text-primary" href="#"><i
                                                                class="fe fe-linkedin"></i></a>
                                                    </div>
                                                    @if (is_null($user->linkedin_link))
                                                        <p class="my-auto">No Data</p>
                                                    @else
                                                        <a href="#" class="my-auto"
                                                            onclick="copyDetails('{{ $user->linkedin_link }}')">LinkedIn</a>
                                                    @endif
                                                </li>

                                                {{-- Instagram Profile --}}
                                                <li class="list-group-item d-flex ps-3">
                                                    <div class="social social-profile-buttons me-2">
                                                        <a class="social-icon text-primary" href="#"><i
                                                                class="fe fe-instagram"></i></a>
                                                    </div>
                                                    @if (is_null($user->instagram_link))
                                                        <p class="my-auto">No Data</p>
                                                    @else
                                                        <a href="#" class="my-auto"
                                                            onclick="copyDetails('{{ $user->instagram_link }}')">Instagram</a>
                                                    @endif
                                                </li>

                                                {{-- facebook Profile --}}
                                                <li class="list-group-item d-flex ps-3">
                                                    <div class="social social-profile-buttons me-2">
                                                        <a class="social-icon text-primary" href="#"><i
                                                                class="fe fe-facebook"></i></a>
                                                    </div>
                                                    @if (is_null($user->facebook_link))
                                                        <p class="my-auto">No Data</p>
                                                    @else
                                                        <a href="#" class="my-auto"
                                                            onclick="copyDetails('{{ $user->facebook_link }}')">Facebook</a>
                                                    @endif
                                                </li>

                                                {{-- twitter Profile --}}
                                                {{-- <li class="list-group-item d-flex ps-3">
                                                    <div class="social social-profile-buttons me-2">
                                                        <a class="social-icon text-primary" href="#"><i
                                                                class="fe fe-twitter"></i></a>
                                                    </div>
                                                    @if (is_null($user->twitter_link))
                                                        <p class="my-auto">No Data</p>
                                                    @else
                                                        <a href="#" class="my-auto"
                                                            onclick="copyDetails('{{ $user->twitter_link }}')">X</a>
                                                    @endif
                                                </li> --}}

                                                {{-- portfolio Profile --}}
                                                <li class="list-group-item d-flex ps-3">
                                                    <div class="social social-profile-buttons me-2">
                                                        <a class="social-icon text-primary" href="#"><i
                                                                class="fe fe-globe"></i></a>
                                                    </div>
                                                    @if (is_null($user->portfolio_link))
                                                        <p class="my-auto">No Data</p>
                                                    @else
                                                        <a href="#" class="my-auto"
                                                            onclick="copyDetails('{{ $user->portfolio_link }}')">Portfolio</a>
                                                    @endif
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>

                    </div>

                    @if (session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
                    @endif

                    @if ($errors->any())
                        <div style="color: red;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-xl-8">
                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <input type="hidden" name="_method" value="PATCH">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Profile</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="name" class="form-control" id="name" name="name"
                                            value="{{ old('name', $user->name) }}" placeholder="">
                                    </div>


                                    {{-- Email Address and Phone Number --}}
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="{{ old('email', $user->email) }}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="phone_number" class="form-label">Contact Number</label>
                                                <input type="number" class="form-control" id="phone_number"
                                                    name="phone_number"
                                                    value="{{ old('phone_number', $user->phone_number) }}"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- City and Country --}}
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="city" class="form-label">City</label>
                                                <input type="text" class="form-control" id="city" name="city"
                                                    value="{{ old('city', $user->city) }}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="country" class="form-label">Country</label>
                                                <input type="text" class="form-control" id="country" name="country"
                                                    value="{{ old('country', $user->country) }}" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Links to various accounts --}}
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="portfolio_link" class="form-label">Portfolio</label>
                                                <input type="url" class="form-control" id="portfolio_link"
                                                    name="portfolio_link"
                                                    value="{{ old('portfolio_link', $user->portfolio_link) }}"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="linkedin_link" class="form-label">LinkedIn</label>
                                                <input type="url" class="form-control" id="linkedin_link"
                                                    name="linkedin_link"
                                                    value="{{ old('linkedin_link', $user->linkedin_link) }}"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="instagram_link" class="form-label">Instagram</label>
                                                <input type="url" class="form-control" id="instagram_link"
                                                    name="instagram_link"
                                                    value="{{ old('instagram_link', $user->instagram_link) }}"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="facebook_link" class="form-label">Facebook</label>
                                                <input type="url" class="form-control" id="facebook_link"
                                                    name="facebook_link"
                                                    value="{{ old('facebook_link', $user->facebook_link) }}"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="twitter_link" class="form-label">Specialization</label>
                                                <input type="text" class="form-control" id="twitter_link"
                                                    name="twitter_link"
                                                    value="{{ old('twitter_link', $user->twitter_link) }}"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="twitter_link" class="form-label">Fees</label>
                                                <input type="nummber" class="form-control" id="twitter_link"
                                                    name="fees"
                                                    value="{{ old('fees', $user->fees) }}"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="form-label">About Me</label>
                                        <textarea class="form-control" rows="6" name="bio" id="bio">{{ old('bio', $user->bio) }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_of_birth" class="form-label">Date Of Birth</label>
                                        <input type="date" id="date_of_birth" name="date_of_birth"
                                            value="{{ old('date_of_birth', $user->date_of_birth) }}"
                                            class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="profile_picture" class="form-label">Profile Picture</label>
                                        <input type="file" name="profile_picture" id="profile_picture"
                                            class="dropify" data-bs-height="180" />
                                    </div>
                                    <div class="form-group">
                                        <label for="banner_image" class="form-label">Banner Picture</label>
                                        <input type="file" name="banner_image" id="banner_image" class="dropify"
                                            data-bs-height="180" />
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-danger my-1">Update</button>
                                </div>
                            </div>
                        </form>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Delete Account</div>
                            </div>
                            <div class="card-body">
                                <p>Its Advisable for you to request your data to be sent to your Email.</p>
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1"
                                        value="option1" checked>
                                    <span class="custom-control-label">Yes, Send my data to my Email.</span>
                                </label>
                            </div>
                            <div class="card-footer text-end">
                                <a href="javascript:void(0)" class="btn btn-primary my-1">Deactivate</a>
                                <a href="javascript:void(0)" class="btn btn-danger my-1">Delete Account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 CLOSED -->

            </div>
            <!--CONTAINER CLOSED -->

        </div>
    </div>
    <!--app-content close-->



    <!-- Sidebar-right -->
    <div class="sidebar sidebar-right sidebar-animate">
        <div class="panel panel-primary card mb-0 shadow-none border-0">
            <div class="tab-menu-heading border-0 d-flex p-3">
                <div class="card-title mb-0"><i class="fe fe-bell me-2"></i><span class=" pulse"></span>Notifications
                </div>
                <div class="card-options ms-auto">
                    <a href="javascript:void(0);" class="sidebar-icon text-end float-end me-3 mb-1"
                        data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i
                            class="fe fe-x text-white"></i></a>
                </div>
            </div>
            <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
                <div class="tabs-menu border-bottom">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i
                                    class="fe fe-settings me-1"></i>Feeds</a></li>
                        <li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-message-circle"></i>
                                Chat</a></li>
                        <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-anchor me-1"></i>Timeline</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="side1">
                        <div class="p-3 fw-semibold ps-5">Feeds</div>
                        <div class="card-body pt-2">
                            <div class="browser-stats">
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle brround bg-primary-transparent"><i
                                                class="fe fe-user text-primary"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">New user registered</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span
                                            class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i
                                                class="fe fe-shopping-cart text-secondary"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">New order delivered</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span
                                            class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i
                                                class="fe fe-bell text-danger"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">You have pending tasks</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span
                                            class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i
                                                class="fe fe-gitlab text-warning"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">New version arrived</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i
                                                class="fe fe-database text-pink"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">Server #1 overloaded</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-info brround bg-info-transparent"><i
                                                class="fe fe-check-circle text-info"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">New project launched</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 fw-semibold ps-5">Settings</div>
                        <div class="card-body pt-2">
                            <div class="browser-stats">
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle brround bg-primary-transparent"><i
                                                class="fe fe-settings text-primary"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">General Settings</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span
                                            class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i
                                                class="fe fe-map-pin text-secondary"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">Map Settings</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span
                                            class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i
                                                class="fe fe-headphones text-danger"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">Support Settings</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span
                                            class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i
                                                class="fe fe-credit-card text-warning"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">Payment Settings</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i
                                                class="fe fe-bell text-pink"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">Notification Settings</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="side2">
                        <div class="list-group list-group-flush">
                            <div class="pt-3 fw-semibold ps-5">Today</div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/2.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Addie Minstra</div>
                                        <p class="mb-0 fs-12 text-muted"> Hey! there I' am available.... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/11.jpg"><span
                                            class="avatar-status bg-success"></span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Rose Bush</div>
                                        <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/10.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Claude Strophobia</div>
                                        <p class="mb-0 fs-12 text-muted"> Hi we can explain our new
                                            project......
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/13.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Eileen Dover</div>
                                        <p class="mb-0 fs-12 text-muted"> New product Launching... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/12.jpg"><span
                                            class="avatar-status bg-success"></span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Willie Findit</div>
                                        <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/15.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Manny Jah</div>
                                        <p class="mb-0 fs-12 text-muted"> Hi we can explain our new
                                            project......
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/4.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Cherry Blossom</div>
                                        <p class="mb-0 fs-12 text-muted"> Hey! there I' am available....</p>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-3 fw-semibold ps-5">Yesterday</div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/7.jpg"><span
                                            class="avatar-status bg-success"></span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Simon Sais</div>
                                        <p class="mb-0 fs-12 text-muted">Schedule Realease...... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/9.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Laura Biding</div>
                                        <p class="mb-0 fs-12 text-muted"> Hi we can explain our new
                                            project......
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/2.jpg"><span
                                            class="avatar-status bg-success"></span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Addie Minstra</div>
                                        <p class="mb-0 fs-12 text-muted">Contact me for details....</p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/9.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Ivan Notheridiya</div>
                                        <p class="mb-0 fs-12 text-muted"> Hi we can explain our new
                                            project......
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/14.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Dulcie Veeta</div>
                                        <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/11.jpg"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Florinda Carasco</div>
                                        <p class="mb-0 fs-12 text-muted">New product Launching...</p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image"
                                        data-bs-image-src="../assets/images/users/4.jpg"><span
                                            class="avatar-status bg-success"></span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                            data-target="#chatmodel">Cherry Blossom</div>
                                        <p class="mb-0 fs-12 text-muted">cherryblossom@gmail.com</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="side3">
                        <ul class="task-list timeline-task">
                            <li class="d-sm-flex mt-4">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">Task Finished<span class="text-muted fs-11 mx-2 fw-normal">09
                                            July 2021</span></h6>
                                    <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)"
                                            class="fw-semibold"> Project
                                            Management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span
                                            class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span
                                            class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">New Comment<span class="text-muted fs-11 mx-2 fw-normal">05
                                            July 2021</span></h6>
                                    <p class="text-muted fs-12">Victoria commented on Project <a href="javascript:void(0)"
                                            class="fw-semibold"> AngularJS
                                            Template</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span
                                            class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span
                                            class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">New Comment<span class="text-muted fs-11 mx-2 fw-normal">25
                                            June 2021</span></h6>
                                    <p class="text-muted fs-12">Victoria commented on Project <a href="javascript:void(0)"
                                            class="fw-semibold"> AngularJS
                                            Template</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span
                                            class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span
                                            class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">Task Overdue<span class="text-muted fs-11 mx-2 fw-normal">14
                                            June 2021</span></h6>
                                    <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a
                                            href="javascript:void(0)" class="fw-semibold"> Integrated
                                            management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span
                                            class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span
                                            class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">Task Overdue<span class="text-muted fs-11 mx-2 fw-normal">29
                                            June 2021</span></h6>
                                    <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a
                                            href="javascript:void(0)" class="fw-semibold"> Integrated
                                            management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span
                                            class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span
                                            class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">Task Finished<span class="text-muted fs-11 mx-2 fw-normal">09
                                            July 2021</span></h6>
                                    <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)"
                                            class="fw-semibold"> Project
                                            Management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span
                                            class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span
                                            class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Sidebar-right-->
@endsection
