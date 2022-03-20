@extends('layouts.user-bussiness.app')
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h2 class="text-center">Enquiry List</h2>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('product')}}">Enquiry List</a></li>
        </ul>
    </div>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))

        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        </p>
        @endif
        @endforeach
    </div>
    <div class="row">
        <div class="col-sm-12 bg-white py-3 border">
            <div class="table-rep-plugin">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table class="table nowrap table-striped table-bordered" cellspacing="0" style="width:100%;">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach($product_data as $data)
                            <tr>
                                <td>{{$i}}.</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phoneNumber}}</td>
                                <td>{{$data->message}}</td>
                                <td>{{date("d/m/Y h:iA", strtotime($data->created_at))}}</td>
                            </tr>
                            @php $i++ @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@stop
