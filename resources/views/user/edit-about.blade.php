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
            <h1>About Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About Us</li>
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
                <h3 class="card-title">Person Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('store-about-view')}}" method="POST"  enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="type" value="person">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Person Name</label>
                    <input type="text" name="name" readonly class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="{{auth()->user()->name}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" readonly class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{auth()->user()->email}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Profession</label>
                    <input type="text" name="company_profession" class="form-control" id="exampleInputEmail1" placeholder="Enter Profession" 
                      value="{{$companyData->company_profession ?? ''}}">
                  </div>

                  <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->
                    <label for="exampleInputEmail1">Profile Picture</label>

                    @if(isset($userInfo->profile_pic))
                    <img src="{{url('public')}}/{{$userInfo->profile_pic}}" width="100px" height="80px">
                    @endif

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="profile_pic">
                      <label class="custom-file-label" for="customFile">Choose file</label>
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

          <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Company Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('store-about-view')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="type" value="company">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" name="company_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" 
                    value="{{$companyData->company_name ?? ''}}">
                  </div>

                  <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->
                    <label for="exampleInputEmail1">Company Logo</label>

                    @if(isset($companyData->company_logo))
                    <img src="{{url('public')}}/{{$companyData->company_logo}}" width="100px" height="80px">
                    @endif

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="company_logo">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Company phone Number</label>
                    <div class="input-group input-group-lg col-md-12">
                        <div class="input-group-prepend  col-md-12">
                          <?php
                            $countryData = file_get_contents(url('public/country-tel-code.json'));
                            $countryData = json_decode($countryData, true);
                          ?>
                          <select class="form-control col-md-3" name="country_code" id="country_code">
                              @if (!empty($countryData))
                                  @foreach($countryData AS $countryDetail)
                                <option value="{{$countryDetail['dial_code']}}"
                                @if($countryDetail['dial_code'] === $companyData->country_code) selected @endif>
                                {{$countryDetail['name']}} ({{$countryDetail['dial_code']}})
                              </option>  
                              @endforeach
                              @endif
                            </select>
                            <input type="tel" class="form-control" name="company_mobile" value="{{$companyData->company_mobile ?? ''}}">
                        </div>
                    <!-- /input-group -->
                    </div>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Company Land line Number</label>
                    <div class="input-group input-group-lg col-md-12">
                        <div class="input-group-prepend  col-md-12">
                            <input type="tel" class="form-control" name="country_landline" value="{{$companyData->country_landline ?? ''}}">
                        </div>
                    <!-- /input-group -->
                    </div>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Company Info</label>
                    <textarea class="company-info" placeholder="Place some text here" name="company_info"
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          {!! $companyData->company_info ?? ''!!}
                    </textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Company Address</label>
                    <textarea class="company-address" placeholder="Place some text here" name="company_address"
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          {!! $companyData->company_address ?? ''!!}
                    </textarea>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Latitude</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="latitude" placeholder="Enter Name" value="{{$companyData->latitude ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Logitude</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="longitude" value="{{$companyData->longitude ?? ''}}">
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Company Website <small>(use: https:// e.g. http://www.abc.com)</small></label>
                    <input type="text" name="company_website" class="form-control" id="exampleInputEmail1" placeholder="Enter Website Url (use: https:// e.g. http://www.abc.com)"
                      value="{{$companyData->company_website ?? ''}}">
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

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
