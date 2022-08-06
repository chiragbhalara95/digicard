@extends('layouts.user-bussiness.app')

@section('custom_style')
  <link rel="stylesheet" href="{{ asset('public/admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <!-- left column -->
          <div class="col-md-6">
          <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Digital Business Card Setting Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('storeUserConfigure')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Is Show Number of visitor</label>
                    <input type="radio" name="isShowNoOfVisit" id="isShowNoOfVisit" value="1" required="" @if($userConfigData->isShowNoOfVisit == 1) checked @endif>Yes
                    <input type="radio" name="isShowNoOfVisit" id="isShowNoOfVisit" value="2" required="" @if($userConfigData->isShowNoOfVisit == 2) checked @endif>No
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Is Show Enquiry form</label>
                    <input type="radio" name="isShowEnquiry" id="isShowEnquiry" value="1" required="" @if($userConfigData->isShowEnquiry == 1) checked @endif>Yes
                    <input type="radio" name="isShowEnquiry" id="isShowEnquiry" value="2" required="" @if($userConfigData->isShowEnquiry == 2) checked @endif>No
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Is Enquiry detail receive on Whatsapp</label>
                    <input type="radio" name="isFeedbackOnWhatsapp" id="isFeedbackOnWhatsapp" value="1" required="" @if($userConfigData->isFeedbackOnWhatsapp == 1) checked @endif>Yes
                    <input type="radio" name="isFeedbackOnWhatsapp" id="isFeedbackOnWhatsapp" value="2" required="" @if($userConfigData->isFeedbackOnWhatsapp == 2) checked @endif>No
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">About Us Label</label>
                    <input type="text" class="form-control" name="aboutLabel" 
                    placeholder="Default About Us Label in Digital Card" value="{{$userConfigData->aboutLabel}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Default Country</label>
                    <input type="text" class="form-control" name="defaultCountry" 
                    placeholder="Default Country" value="{{$userConfigData->defaultCountry}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Whatsapp Messages</label>
                    <textarea class="form-control" name="whatsappMsg">{{$userConfigData->whatsappMsg}}</textarea>
                  </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            </form>

          </div>
          <!--/.col (left) -->
 
          <!-- left column -->
          <div class="col-md-6">


          </div>
          <!--/.col (left) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection


@section('custom_script')
<script src="{{ asset('public/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script>
  $(function () {
    // Summernote
    $('.company-info').summernote()
    $('.company-address').summernote()
  })
</script>

<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
@endsection
