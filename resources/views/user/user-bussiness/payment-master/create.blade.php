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

            <form action="{{route('business.payment-master-save')}}" id="" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="control-label"> Type<span class="text-danger">*</span></label>
                    <select class="form-control typeEle" name="type">
                        <option value="">Select</option>
                        <option value="bank">Bank</option>
                        <option value="paytm">Paytm</option>
                        <option value="phonepay">Phone Pay</option>
                        <option value="googlepay">Google Pay</option>
                        <option value="upi">Upi</option>
                    </select>

                </div>


                <div class="bank_section">
                <div class="form-group">
                        <label class="control-label"> Account Number<span class="text-danger">*</span></label>
                        <input type="text" name="account_no" class="form-control" placeholder="Enter Account Number">
                  </div>

                  <div class="form-group">
                      <label class="control-label"> Account Type<span class="text-danger">*</span></label>
                      <select class="form-control" name="account_type">
                          <option value="">Select</option>
                          <option value="saving">Saving</option>
                          <option value="current">Current</option>
                      </select>


                  </div>

                  <div class="form-group">
                        <label class="control-label"> Account Holder Name<span class="text-danger">*</span></label>
                        <input type="text" name="account_holder_name" class="form-control" placeholder="Enter Account Holder Name">
                    </div>

                  <div class="form-group">
                        <label class="control-label"> IFSC Code<span class="text-danger">*</span></label>
                        <input type="text" name="ifsc_code" class="form-control" placeholder="Enter IFSC Code">
                    </div>

                  <div class="form-group">
                        <label class="control-label"> Bank Name<span class="text-danger">*</span></label>
                        <input type="text" name="bank_name" class="form-control" placeholder="Enter Bank Name">
                    </div>

                  <div class="form-group">
                        <label class="control-label"> Branch Name<span class="text-danger">*</span></label>
                        <input type="text" name="branch_name" class="form-control" placeholder="Enter Branch Name"
                        >
                  </div>

                </div>

                <div class="qr_section">

                <div class="form-group">
                        <label class="control-label"> Upi Id<span class="text-danger">*</span></label>
                        <input type="text" name="account_no" class="form-control" placeholder="Enter Upi Id format(abcd@upi)">
                  </div>

                    <div class="form-group">
                        <label class="control-label">Qr code<span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="qr_img" accept="image/*">
                    </div>
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
    $(".bank_section").hide();
    $(".qr_section").hide();
    $(".typeEle").change(function() {
      var typeVal = $(this).val();
      if (typeVal == 'bank') {
        $(".qr_section").hide();
        $(".bank_section").show();
      } else {
        $(".bank_section").hide();
        $(".qr_section").show();
      }
    })
  });
</script>
@stop