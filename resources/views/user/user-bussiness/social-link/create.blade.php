@extends('layouts.user-bussiness.app')


@section('content')

<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$page_title}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{$page_title}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <main class="app-content">

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
</main>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <!-- left column -->
          <div class="col-md-12">
          <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{$page_title}}</h3>
              </div>
    <div class="row">
    <div class="col-md-8 bg-white py-3 border ml-5">

            <form action="{{route('business.social-media-master-save')}}" id="" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="control-label"> Type<span class="text-danger">*</span></label>
                    <select class="form-control typeEle" name="type" required>
                        <option value="">Select</option>
                        @foreach($allSocialMedia as $key => $allSocialMediaDetail)
                            <option @if(isset($socialMediaLinkData->type) && $socialMediaLinkData->type == $key) selected @endif value="{{$key}}">{{$allSocialMediaDetail}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group">
                        <label class="control-label"> Url<span class="text-danger">*</span></label>
                        <input type="text" name="url" class="form-control" placeholder="Enter Url" required value="{{isset($socialMediaLinkData->url) ? $socialMediaLinkData->url : ''}}">
                  </div>


                <input type="submit" value="Save" class="btn btn-primary">
            </form>

          </div>
    </div>


          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@stop

@section('custom_script')
<script>
  $(document).ready(function() {
  });
</script>
@stop