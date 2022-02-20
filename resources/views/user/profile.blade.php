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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
                <h3 class="card-title">Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('storeProfile')}}" method="POST">
            @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Person Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="{{$userInfo->name}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" readonly class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{$userInfo->email}}">
                  </div>

                  <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="want_chang_pwd" id="want_chang_pwd" {{ old('want_chang_pwd') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                      I want to change Password
                                  </label>
                                </div>
                            </div>
                        </div>

                <div class="row change_pwd_ele">
                  <div class="col-md-6 mb-3">
                      <label class="form-label mb-1">Current Password <span class="required">*</span></label>
                      <input class="form-control fw-normal" type="password" name="current_password" id="current_password" placeholder="Enter Current Password">
                  </div>
                  <div class="col-md-6 mb-3">
                      <label class="form-label mb-1">New Password <span class="required">*</span></label>
                      <input class="form-control fw-normal" type="password" name="password" id="password" placeholder="Enter New Password" >
                  </div>
                  <div class="col-md-6 mb-3">
                      <label class="form-label mb-1">Confirm Password <span class="required">*</span></label>
                      <input class="form-control fw-normal" type="password" name="password_confirmation" placeholder="Enter Confirm Password" >
                  </div>
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
<script>
setTimeout(() => {
  $('#want_chang_pwd').trigger('change');  
}, 100);
  $('#want_chang_pwd').change(function() {
    if($(this).is(':checked')) {
      $(".change_pwd_ele").show();
    } else {
      $(".change_pwd_ele").hide();
    }
  });

</script>
@endsection
