@extends('layouts.app')
@section('header')
Customer
@endsection

@section('content')
<div class="container mt-n10">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/media/" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4>{{ $customer->firstname }} {{ $customer->lastname }}</h4>
                                    <hr>
                                    <p><small><i class="fa fa-envelope"></i> {{ $customer->email }}</small></p>
                                    <p><small><i class="fa fa-phone"></i> {{ $customer->phone }}</small></p>
                                    <p><small><i class="fa fa-map-marker"></i> {{ $customer->address }}</small></p>
                                    {{-- <p><small><strong>Reseller: </strong><a href="#">{{ $customer->firstname }} {{ $customer->lastname }}</a></small> --}}
                                    </p>
                                    <hr>
                                    <p> 
                                    </p>
                                    <p>
                                        Date Joined: {{ $customer->created_at }}
                                    </p>
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Token</h2>
                                    <hr>
                                    <form action="">
                                        <div class="form-group">
                                            <input type="hidden" value="*4755555512" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Send Token</button>
                                        </div>
                                    </form>

                                    <p>
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>  
                                        Monthly Payment: &#8358;55.00
                                    </p>
                                    <p>
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>  
                                        Initial Payment: &#8358;5,000.00
                                    </p>
                                    <p>
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>  
                                        Total Package: &#8358;60,000.00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            
        </div>
    </div>

    @endsection