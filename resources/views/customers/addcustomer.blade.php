@extends('layouts.app')
@section('header')
Add Customer
@endsection

@section('content')
<div class="container mt-n10">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4 box-shadow">
                <div class="card-body px-10 py-5">
                    {{-- @if ($errors->any()) --}}
                        {{-- <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div> --}}
                    {{-- @endif --}}
                    <form method="post" action="{{ route('customer.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">First Name</label>
                                <input name="firstname" type="text" class="form-control" :value="old('firstname')" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Last Name</label>
                                <input name="lastname" type="text" class="form-control" :value="old('lastname')" ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input name="email" type="text" class="form-control" :value="old('email')" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="phone">Phone No.</label>
                                <input name="phone" type="text" class="form-control" :value="old('phone')" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="picture">Upload Picture</label>
                                <input name="picture" type="file" class="form-control" :value="old('picture')">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="product">Product</label>
                                <input name="product" type="text" class="form-control" :value="old('product')">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="package">Package</label>
                                <input name="package" type="text" class="form-control" :value="old('package')">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="address">Address</label>
                                <textarea name="address" type="text" class="form-control" :value="old('address')"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn-sm btn-warning">Add Customer</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @include('sweetalert::alert') --}}
@endsection