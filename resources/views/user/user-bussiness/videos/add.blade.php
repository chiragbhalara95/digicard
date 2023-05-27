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

    <div class="row pt-2 ">

    <div class="col-md-11 bg-white ml-5">

        <form action="{{route('business.videos.save')}}" id="saveVideoFrm" method="post" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="id" value="{{isset($videoData->id) ? $videoData->id : ''}}">

                <div class="form-group">
                        <label class="control-label"> Title</span></label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{isset($videoData->title) ? $videoData->title : ''}}">
                  </div>
                <div class="form-group">
                        <label class="control-label"> Url<span class="text-danger">*</span></label>
                        <input type="text" name="video_path" class="form-control" placeholder="Enter Url" required value="{{isset($videoData->video_path) ? $videoData->video_path : ''}}">
                  </div>


                <input type="submit" value="Save" class="btn btn-primary pb-2">

        </form>
        <br/>
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
<script src="{{asset('public/visitingCard/a/vendor/jquery-validation/js/jquery.validate.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
$("#saveVideoFrm").validate({
    ignore: ".ignore",
    rules:{
        video_path:{
            required: true,
            url:true
        },
    },
    messages: {
        video_path:{
            required: "Please enter url.",
        },
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function(form){
        let data=$('#saveVideoFrm').serializeArray()
        $.ajax({
            type: 'post',
            url: $("#saveVideoFrm").attr('action'),
            data:data,
            dataType:'json',
            success: function(result) {
                if(result && result.code == '0') {
                    toastr.success("Record deleted successfull.");
                    location.href="{{route('business.videos.list')}}"

                } else{
                    toastr.error("Record deleted successfull.");
                }
            },
            error : function(error) {

            }
});
    }
    })

</script>
@stop