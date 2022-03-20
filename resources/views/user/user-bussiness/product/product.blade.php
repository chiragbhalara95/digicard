@extends('layouts.user-bussiness.app')
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1 class="text-center">Gallery </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('product')}}">Gallery List</a></li>
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
            <div class="form-group formGroupShadow">
                <a class="form-control d-flex justify-content-center" href="{{url('addProduct')}}" style="background-color:#009688; color:white;"> + Add Gallery </a>
            </div>
            <div class="table-rep-plugin">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table class="table  table-striped table-bordered" cellspacing="0" style="width:100%;">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Header Image</th>
                                <!--<th>Multipal Image</th>-->
                                <th>Description</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach($product_data as $data)
                            <tr>
                                <td>{{$i}}.</td>
                                <td>{{$data->title}}</td>
                                <td>
                                    <img src="{{URL::asset('public/upload/product/'.$data->head_image)}}" width="130px">
                                </td>
                                {{--
                                <td>
                                    <?php
                                    
                                    $imgs = json_decode($data->mul_image);
                                    ?>
                                    @foreach($imgs as $val)
                                    <img src="{{URL::asset('public/upload/product/'.$val)}}" width="130px">
                                    @endforeach
                                    
                                </td>
                                --}}
                                <td><?php echo $data->description; ?></td>
                                <td><?php echo $data->links; ?></td>
                                <td class="text-center">

                                    <a href="{{url('productUpdate',$data->id)}}" class="btn btn-primary"><span class="basic_table_icon" style="font-size: 20px;"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</span></a>

                                    <a href="{{url('productDelete',$data->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');"><span class="basic_table_icon" style="font-size: 20px;"><i class="fa fa-trash-o" aria-hidden="true"></i></span>Delete</a>
                                </td>
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
