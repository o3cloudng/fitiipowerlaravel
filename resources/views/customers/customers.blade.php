@extends('layouts.app')
@section('header')
Customers List
@endsection


@section('content')
<div class="container mt-n10">
    <div class="row">
        
        <div class="col-md-12">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{-- <input type="text" placeholder="Search" class="form-control"> --}}
                                <a href="customer/create" class="btn btn-primary float-right mb-2"><i class="fas fa-plus-square"></i>&nbsp; New Customer</a>
                            </div>
                        </div>
                    </div>
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Serial No.</th>
                                    <th>Phone</th>
                                    <th>Initial Pay</th>
                                    <!-- <th>Status</th> -->
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SN</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Serial No.</th>
                                    <th>Phone</th>
                                    <th>Initial Pay</th>
                                    <!-- <th>Status</th> -->
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if($customers)
                                    @foreach($customers as $customer)
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>{{ $customer->firstname }} {{ $customer->lastname }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->product }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->created_at->diffForHumans() }}</td>
                                        <td>
                                            <form action="{{ route('customer.destroy',$customer->id) }}" method="POST">
                                                <a href="/customer/{{ $customer->id }}" class="btn btn-warning py-1 px-3" data-toggle="tooltip" title="Show"><i class="far fa-eye"></i></a>
                                                <a href="/customer/{{ $customer->id }}/edit" class="btn btn-primary py-1 px-3" data-toggle="tooltip" title="Edit"><i class="far fa-edit"></i></a>
                                            
                                                @csrf
                                                {{-- @method('DELETE') --}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                {{-- <button type="submit" onclick="confirm('Are you sure you want to delete?')" class="btn btn-danger py-1 px-3"><i class="far fa-trash-alt"></i></button> --}}
                                                <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                <p class="alert alert-info">No records found.</p>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $customers->links() }}
                    </div>
                    {{-- <div class="d-flex">
                        {!! $customers->links() !!}
                    </div> --}}

                </div>
            </div>
            
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
 
        $('.show_confirm').click(function(event) {
            event.preventDefault();
            // alert('Work?');
             var form =  $(this).closest("form");
             var name = $(this).data("name");
             swal({
                 title: `Are you sure you want to delete this record?`,
                 text: "If you delete this, it will be gone forever.",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
             .then((willDelete) => {
               if (willDelete) {
                 form.submit();
               }
             });
         });
     
   </script>
@endsection