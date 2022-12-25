@extends('layouts.admin.app')

@section('content')
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.digital-card.save') }}" id="save-digital-card">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">Company Name</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="" required autocomplete="company_name" autofocus>

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact_no" class="col-md-4 col-form-label text-md-right">Contact Number</label>

                        <div class="col-md-3">
                            <select class="form-control selectpicker" required name="country_code" data-live-search="true">
                                <option value="" class="">Select Country Code</option>
                                @if (!empty($countryData))
                                    @foreach($countryData AS $countryDetail)
                                    <option class="" value="{{$countryDetail['dial_code']}}" 
                                        placeholder = "{{$countryDetail['name']}}"
                                        @if($countryDetail['dial_code'] === $selectedCode) selected @endif>
                                        {{$countryDetail['name']}} ({{$countryDetail['dial_code']}})
                                    </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-md-3">
                                <input id="company_mobile" type="number" class="form-control removeInputArrow @error('name') is-invalid @enderror" name="company_mobile" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom_script')
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('#save-digital-card').validate({
            ignore:[],
            rules: {
                name: {
                    required: true,
                },
                company_name : {
                    required: true,
                },
                company_mobile:{
                    required: true,
                    minlength:10,
                    maxlength:10
                },
                email:{
                    required:true,
                    email:true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                password_confirmation: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                }

            },
            messages: {
                "name": {
                    required: "Please enter name.",
                },
                "company_name" : {
                    required: "Please enter company name"
                },
                company_mobile:{
                    required:"Please enter contact number"
                },
                email:{
                    required:"Please enter email"
                },
                password:{
                    required:"Please enter password"
                },
                password_confirmation:{
                    required:"Please enter confirm password"
                }
            },
            errorPlacement: function (error, element) {
                // error.insertAfter(element.attr("name"));
                if (element.attr("name") == "file_name") {
                    error.appendTo(element.parent());
                }else if (element.attr("name") == "description") {
                    error.appendTo(element.parent());
                }else{
                    error.insertAfter(element);
                }
            },
            submitHandler: function (form) {
                $.ajax({
                    url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                beforeSend : function() {
                },
                success: function(data) {
                    if(data.code == '0'){
                        toastr.success(data.msg)
                    }else{
                        toastr.error(data.msg)
                    }
                }

                });
            }
        });
    </script>
@endsection
