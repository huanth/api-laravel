@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->

<div class="container py-4">
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total API Accesses </h6>
                    <h4 class="mb-3">4,42,236</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total APIs</h6>
                    <h4 class="mb-3">6</h4>
                </div>
            </div>
        </div>


        <div class="col-md-12 col-xl-8">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="mb-0">Unique Visitor</h5>
                <ul class="nav nav-pills justify-content-end mb-0" id="chart-tab-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="chart-tab-home-tab" data-bs-toggle="pill" data-bs-target="#chart-tab-home"
                            type="button" role="tab" aria-controls="chart-tab-home" aria-selected="true">Month</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="chart-tab-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#chart-tab-profile" type="button" role="tab" aria-controls="chart-tab-profile"
                            aria-selected="false">Week</button>
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="chart-tab-tabContent">
                        <div class="tab-pane" id="chart-tab-home" role="tabpanel" aria-labelledby="chart-tab-home-tab"
                            tabindex="0">
                            <div id="visitor-chart-1"></div>
                        </div>
                        <div class="tab-pane show active" id="chart-tab-profile" role="tabpanel"
                            aria-labelledby="chart-tab-profile-tab" tabindex="0">
                            <div id="visitor-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-xl-4">
            <h5 class="mb-3">Analytics Report</h5>
            <div class="card">
                <div class="list-group list-group-flush">
                    <a href="#"
                        class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Company
                        Finance Growth<span class="h5 mb-0">+45.14%</span></a>
                    <a href="#"
                        class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Company
                        Expenses Ratio<span class="h5 mb-0">0.58%</span></a>
                    <a href="#"
                        class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Business
                        Risk Cases<span class="h5 mb-0">Low</span></a>
                </div>
                <div class="card-body px-2">
                    <div id="analytics-report-chart"></div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-xl-8">
            <h5 class="mb-3">Sales Report</h5>
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
                    <h3 class="mb-0">$7,650</h3>
                    <div id="sales-report-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-4">
            <h5 class="mb-3">Transaction History</h5>
            <div class="card">
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s rounded-circle text-success bg-light-success">
                                    <i class="ti ti-gift f-18"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Order #002434</h6>
                                <p class="mb-0 text-muted">Today, 2:00 AM</P>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <h6 class="mb-1">+ $1,430</h6>
                                <p class="mb-0 text-muted">78%</P>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                                    <i class="ti ti-message-circle f-18"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Order #984947</h6>
                                <p class="mb-0 text-muted">5 August, 1:45 PM</P>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <h6 class="mb-1">- $302</h6>
                                <p class="mb-0 text-muted">8%</P>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s rounded-circle text-danger bg-light-danger">
                                    <i class="ti ti-settings f-18"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Order #988784</h6>
                                <p class="mb-0 text-muted">7 hours ago</P>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <h6 class="mb-1">- $682</h6>
                                <p class="mb-0 text-muted">16%</P>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection