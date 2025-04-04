@extends('layouts.main')

@section('website-page-title', 'Dashboard')

@section('website-active-dashboard', 'active')

@section('website-main-section')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Profile</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
                <div class="row" id="user-profile">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="wideget-user mb-2">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="panel profile-cover">
                                                    <div class="profile-cover__action bg-img">
                                                        <img src="{{ asset('storage/banner_images/' . $user->banner_image) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="profile-cover__img">
                                                        <div class="profile-img-1">
                                                            @if (!is_null($user->profile_picture))
                                                                <img src="{{ asset('storage/profile_pictures/' . $user->profile_picture) }}"
                                                                    alt="img">
                                                            @endif
                                                        </div>
                                                        <div class="profile-img-content text-dark text-start">
                                                            <div class="text-dark">

                                                                @if (Auth::check())
                                                                    <h3 class="h3 mb-2">{{ Auth::user()->name }}</h3>
                                                                    <h5 class="text-muted"> {{ Auth::user()->email }}</h5>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-profile">
                                                        <a href="{{ route('profile.edit') }}"><button
                                                                class="btn btn-danger mt-1 mb-1"> <i
                                                                    class="fa fa-envelope"></i> <span>Edit
                                                                    Profile</span></button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="px-0 px-sm-4">
                                                    <div class="social social-profile-buttons mt-5 float-end">
                                                        <div class="mt-3">
                                                            <a class="social-icon text-primary" style="visibility:hidden;"
                                                                href="{{ $user->twitter_link }}" target="_blank"><i
                                                                    class="fab fa-arrow"></i></a>
                                                            @if (!is_null($user->facebook_link))
                                                                <a class="social-icon text-primary"
                                                                    href="{{ $user->facebook_link }}" target="_blank"><i
                                                                        class="fab fa-facebook"></i></a>
                                                            @endif
                                                            @if (!is_null($user->instagram_link))
                                                                <a class="social-icon text-primary"
                                                                    href="{{ $user->instagram_link }}" target="_blank"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            @endif
                                                            @if (!is_null($user->linkedin_link))
                                                                <a class="social-icon text-primary"
                                                                    href="{{ $user->linkedin_link }}" target="_blank"><i
                                                                        class="fab fa-linkedin"></i></a>
                                                            @endif
                                                            @if (!is_null($user->twitter_link))
                                                                <a class="social-icon text-primary"
                                                                    href="{{ $user->twitter_link }}" target="_blank"><i
                                                                        class="fab fa-twitter"></i></a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                    </div>
                    <!-- CONTAINER CLOSED -->

                </div>
            </div>
            <!--app-content close-->



            <!-- Sidebar-right -->
            <div class="sidebar sidebar-right sidebar-animate">
                <div class="panel panel-primary card mb-0 shadow-none border-0">
                    <div class="tab-menu-heading border-0 d-flex p-3">
                        <div class="card-title mb-0"><i class="fe fe-bell me-2"></i><span
                                class=" pulse"></span>Notifications
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
                                <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-anchor me-1"></i>Timeline</a>
                                </li>
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
                                                        <a href="javascript:void(0)"><i
                                                                class="fe fe-settings me-1"></i></a>
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
                                                        <a href="javascript:void(0)"><i
                                                                class="fe fe-settings me-1"></i></a>
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
                                                        <a href="javascript:void(0)"><i
                                                                class="fe fe-settings me-1"></i></a>
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
                                                        <a href="javascript:void(0)"><i
                                                                class="fe fe-settings me-1"></i></a>
                                                        <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-sm-2 mb-sm-0 mb-3">
                                                <span
                                                    class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i
                                                        class="fe fe-database text-pink"></i></span>
                                            </div>
                                            <div class="col-sm-10 ps-sm-0">
                                                <div class="d-flex align-items-end justify-content-between ms-2">
                                                    <h6 class="">Server #1 overloaded</h6>
                                                    <div>
                                                        <a href="javascript:void(0)"><i
                                                                class="fe fe-settings me-1"></i></a>
                                                        <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2 mb-sm-0 mb-3">
                                                <span
                                                    class="feeds avatar-circle avatar-circle-info brround bg-info-transparent"><i
                                                        class="fe fe-check-circle text-info"></i></span>
                                            </div>
                                            <div class="col-sm-10 ps-sm-0">
                                                <div class="d-flex align-items-end justify-content-between ms-2">
                                                    <h6 class="">New project launched</h6>
                                                    <div>
                                                        <a href="javascript:void(0)"><i
                                                                class="fe fe-settings me-1"></i></a>
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
                                                        <a href="javascript:void(0)"><i
                                                                class="fe fe-settings me-1"></i></a>
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
                                                        <a href="javascript:void(0)"><i
                                                                class="fe fe-settings me-1"></i></a>
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
                                                        <a href="javascript:void(0)"><i
                                                                class="fe fe-settings me-1"></i></a>
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
                                                        <a href="javascript:void(0)"><i
                                                                class="fe fe-settings me-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-sm-2 mb-sm-0 mb-3">
                                                <span
                                                    class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i
                                                        class="fe fe-bell text-pink"></i></span>
                                            </div>
                                            <div class="col-sm-10 ps-sm-0">
                                                <div class="d-flex align-items-end justify-content-between ms-2">
                                                    <h6 class="">Notification Settings</h6>
                                                    <div>
                                                        <a href="javascript:void(0)"><i
                                                                class="fe fe-settings me-1"></i></a>
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
                                            <h6 class="fw-semibold">Task Finished<span
                                                    class="text-muted fs-11 mx-2 fw-normal">09
                                                    July 2021</span></h6>
                                            <p class="text-muted fs-12">Adam Berry finished task on<a
                                                    href="javascript:void(0)" class="fw-semibold"> Project
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
                                            <h6 class="fw-semibold">New Comment<span
                                                    class="text-muted fs-11 mx-2 fw-normal">05
                                                    July 2021</span></h6>
                                            <p class="text-muted fs-12">Victoria commented on Project <a
                                                    href="javascript:void(0)" class="fw-semibold"> AngularJS
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
                                            <h6 class="fw-semibold">New Comment<span
                                                    class="text-muted fs-11 mx-2 fw-normal">25
                                                    June 2021</span></h6>
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
                                            <h6 class="fw-semibold">Task Overdue<span
                                                    class="text-muted fs-11 mx-2 fw-normal">29
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
                                            <h6 class="fw-semibold">Task Finished<span
                                                    class="text-muted fs-11 mx-2 fw-normal">09
                                                    July 2021</span></h6>
                                            <p class="text-muted fs-12">Adam Berry finished task on<a
                                                    href="javascript:void(0)" class="fw-semibold"> Project
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
