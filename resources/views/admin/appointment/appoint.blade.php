@extends('layouts.main')

@section('website-main-section')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">My Patients</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cards</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <!-- ROW-3 OPEN -->
                <div class="row row-cols-4">
                    @if ($patients->isEmpty())
                        <h3>No Data to Show! </h3>
                    @endif
                    @foreach ($patients as $appoint)
                        <div class="col-xl-3 col-sm-6 col-md-6">
                            <div class="card border p-0">
                                <div class="card-body text-center">
                                    <span class="avatar avatar-xxl brround cover-image"
                                        data-bs-image-src="{{ asset('storage/profile_pictures/' . $appoint->profile_picture) }}"
                                        style="background: url(&quot;../assets/images/users/15.jpg&quot;) center center;"></span>
                                    <h4 class="h4 mb-0 mt-3">{{$appoint->name}}</h4>
                                    <p class="card-text text-capitalize">{{$appoint->role}}</p>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="row user-social-detail">
                                        <div class="social-profile me-4 rounded text-center">
                                            <a href="javascript:void(0)"><i class="fa fa-google"></i></a>
                                        </div>
                                        <div class="social-profile me-4 rounded text-center">
                                            <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                                        </div>
                                        <div class="social-profile me-4 rounded text-center">
                                            <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- ROW-3 CLOSED -->
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!--app-content closed-->
@endsection
