@extends('layouts.app')
@section('header')
Dashboard
@endsection
@section('content')

<div class="container mt-n10">
                    
    @if( Auth::user())
    <!-- Example Colored Cards for Dashboard Demo-->
    <div class="row">
        <div class="col-xxl-3 col-lg-3">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-3">
                            <div class="text-white-75 small">No. of Reseller</div>
                            <div class="text-lg font-weight-bold">555</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="calendar"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{% url 'adminarea:resellers' %}">View Report</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-3">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-3">
                            <div class="text-white-75 small">No. of Accounts</div>
                            <div class="text-lg font-weight-bold">100</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{% url 'adminarea:customers' %}">View Report</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-3">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-3">
                            <div class="text-white-75 small">No. of Products</div>
                            <div class="text-lg font-weight-bold">555</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="check-square"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{% url 'adminarea:products' %}">View Activities</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-3">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-3">
                            <div class="text-white-75 small">Pending Requests</div>
                            <div class="text-lg font-weight-bold">17</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="message-circle"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{% url 'adminarea:customers' %}">View Requests</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example Charts for Dashboard Demo-->
    <div class="row">
        <div class="col-xl-6 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-header">
                    Sales per Month
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                            id="areaChartDropdownExample" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="text-gray-500"
                                data-feather="more-vertical"></i></button>
                        <div class="dropdown-menu dropdown-menu-right animated--fade-in-up"
                            aria-labelledby="areaChartDropdownExample">
                            <a class="dropdown-item" href="#!">Last 12 Months</a>
                            <a class="dropdown-item" href="#!">Last 30 Days</a>
                            <a class="dropdown-item" href="#!">Last 7 Days</a>
                            <a class="dropdown-item" href="#!">This Month</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Custom Range</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-header">
                    Monthly Subscription Counts
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                            id="areaChartDropdownExample" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="text-gray-500"
                                data-feather="more-vertical"></i></button>
                        <div class="dropdown-menu dropdown-menu-right animated--fade-in-up"
                            aria-labelledby="areaChartDropdownExample">
                            <a class="dropdown-item" href="#!">Last 12 Months</a>
                            <a class="dropdown-item" href="#!">Last 30 Days</a>
                            <a class="dropdown-item" href="#!">Last 7 Days</a>
                            <a class="dropdown-item" href="#!">This Month</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Custom Range</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-bar"><canvas id="myBarChart" width="100%" height="30"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="row">
        <div class="container">
            <p class="alert alert-warning">You are not allowed here.</p>
        </div>
    </div>
    @endif
    <!-- Example DataTable for Dashboard Demo-->
   
</div>
@endsection