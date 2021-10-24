@extends('layouts.layout')

@section('custom_style')
@endsection

@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-paint-brush"></i> Themes </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Themes Setting </a></li>
        </ul>
    </div>

    <div class="row bg-white py-3">
        <div class="col-md-12">
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
            <div class="card-box">
                <form action="{{route('save-user-theme')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row col-sm-12">
                        @foreach($theme_data as $data)
                        <div class="col-sm-3 mt-3">
                            <div class="row col-sm-12">
                                <div class="col-sm-12">
                                    <label class="control-label" for="theme_name{{$data->id}}"><img src="{{URL::asset('public/upload/theme/'.$data->image)}}" width="120px" ></label>
                                </div>
                                <div class="col-sm-2 mt-3">
                                    <input type="radio" name="theme" id="theme_name{{$data->id}}" value="{{$data->id}}" {{$theme == $data->id ? 'checked' : ''}} required>
                                </div>
                                <div class="col-sm-10 mt-3">
                                    <label class="control-label" for="theme_name{{$data->id}}"><b>{{$data->name}}</b></label>
                                </div>
                            </div>
                            <hr>
                        </div>
                        @endforeach
                        <div class="col-sm-12 py-5">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>&nbsp;
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection