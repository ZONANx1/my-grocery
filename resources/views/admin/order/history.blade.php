@extends('layouts.admin')

@section('main-content')
<div class="section__content section__content--p30" style="background-color: rgb(228, 228, 228);">
    <div class="container-fluid">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-1 m-b-1 m-t-30">History Order List</h3>
                @php
                $total = 0;
                $count = 0;
                @endphp
                <hr>
                <div class="table-data__tool">
                    <div class="table-data__tool-right">
                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{url('order')}}">
                            <i class="zmdi zmdi-plus"></i>Pendding Orders</a>
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Order ID</th>
                                <th>Tracking No</th>
                                <th>Order Date</th>
                                <th>Total Price</th>
                                <th>Status</th> 
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                            @php
                            $myvalue = $item->created_at;
                            
                            $datetime = new DateTime($myvalue);
                            $date = $datetime->format('d-m-Y');
                            $time = $datetime->format('H:i');
                            
                            @endphp
                            <tr class="tr-shadow">
                                <td>{{ ($orders->currentPage() - 1) * $orders->perPage() + $loop->iteration }}.
                                <td>{{$item->id}}</td>
                                <td>{{$item->tracking_no}}</td>
                                <td>{{ $date }}</td>
                                <td>{{$item->total_price}}</td>
                                <td>{{ $item->status == '0' ? 'Pending' : 'Completed' }}</td>
                                <td>
                                    <a href="{{ url('view-order-history/' . $item->id) }}" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                    <div class="row float-end">
                        <div class="mx-auto mt-3">
                            {!! $orders->links() !!}
                        </div>
                    </div>
                    
                </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
    </div>
@endsection