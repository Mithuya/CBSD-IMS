@extends('master')


@push('styles')
    <!--Chartist Chart CSS -->
    <link rel="stylesheet" href="../plugins/chartist/css/chartist.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session('status') }}
                </div>
            @endif
            <div class="page-title-box">
                <div class="row align-items-center">

                    <div class="col-sm-6">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Welcome to IMS Dashboard</li>
                        </ol>

                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-left mini-stat-img mr-4">
                                    <img src="assets/images/services-icon/03.png" alt="">
                                </div>
                                <h5 class="font-16 text-uppercase mt-0 text-white-50">Courses</h5>
                                {{-- <h4 class="font-500">{{ $courseCount }} <i class="mdi  text-success ml-2"></i></h4> --}}

                            </div>
                            <div class="pt-2">
                                <p class="text-white-50 mb-0">Total Number of Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-left mini-stat-img mr-4">
                                    <img src="assets/images/services-icon/04.png" alt="">
                                </div>
                                <h5 class="font-16 text-uppercase mt-0 text-white-50">EXAMS</h5>
                                {{-- <h4 class="font-500">{{ $examCount }} <i class="mdi text-success ml-2"></i></h4> --}}
                            </div>
                            <div class="pt-2">
                                <p class="text-white-50 mb-0">Total Number of Exams</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Institute Management System(IMS)</h4>
                            <p class="text-muted mb-5">"Institute Management System(IMS) gives a straightforward interface to support
                                 of Student information, Staff information, Course Details, Subject Details, Exam Attendance and Marks details. It very well may be utilized by instructive
                                 establishments for Institute to keep up the records of understudies without any problem "</p>
                            <div class="float-right mt-2">
                                <a href="#" class="text-primary">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->

    </div>
@endsection


@push('scripts')
    <!--Chartist Chart-->
    <script src="../plugins/chartist/js/chartist.min.js"></script>
    <script src="../plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>

    <!-- peity JS -->
    <script src="../plugins/peity-chart/jquery.peity.min.js"></script>

    <script src="assets/pages/dashboard.js"></script>
@endpush
