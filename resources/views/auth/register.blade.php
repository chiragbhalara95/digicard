@extends('layouts.app')

@section('custom_style')
    <style type="text/css">
        select option:disabled  {
            display: none;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Select Product</label>
                            <select class="form-control selectpicker col-md-6" id="product-select-list" data-live-search="true" name="product_id">
                                    @foreach($productData AS $key => $productDetail)
                                    <option @if($key == 0) selected @endif value="{{$productDetail['product_id']}}">{{$productDetail['product_name']}}</option>
                                    @endforeach
                            </select>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Select Product</label>
                            <select class="form-control selectpicker col-md-6" id="product-sku-list" data-live-search="true" name="sku_package_id">
                              @if(!empty($skuCustomPackage))
                                  @foreach($skuCustomPackage AS $productId => $skuCustomDetail)
                                    @foreach($skuCustomDetail as $detail)
                                      <option data-product-id="{{$detail['product_id']}}" value="{{$detail['sku_package_id']}}" disabled="disabled" @if($packageId == $detail['sku_package_id']) selected @endif>{{$detail['duration']}} {{$detail['durationType']}} (₹{{$detail['price']}})</option>
                                    @endforeach
                                  @endforeach
                              @endif
                            </select>
                        </div>


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
                            <label for="contact_no" class="col-md-4 col-form-label text-md-right">Contact Number</label>

                        <div class="col-md-3">
                            <select class="form-control selectpicker" required name="country_code" data-live-search="true">
                                <option value="" class="text-center">Select Country Code</option>
                                @if (!empty($countryData))
                                    @foreach($countryData AS $countryDetail)
                                    <option class="text-center" value="{{$countryDetail['dial_code']}}" 
                                        placeholder = "{{$countryDetail['name']}}"
                                        @if($countryDetail['dial_code'] === $selectedCode) selected @endif>
                                        {{$countryDetail['name']}} ({{$countryDetail['dial_code']}})
                                    </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-md-3">
                                <input id="name" type="number" class="form-control removeInputArrow @error('name') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

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
<script>
    $(document).ready(function() {
        var productId = $('#product-select-list').val();
        displaySkuOpt(productId)

    });
    $("#product-select-list").change(function() {
        var productId = $('#product-select-list').val();
        displaySkuOpt(productId)
    })

    function displaySkuOpt(reqProductId)
    {
        $('#product-sku-list > option').each(function() {
            var productId = $(this).data('product-id');
            if (reqProductId == productId) {
                $(this).prop('disabled', false);
            } else {
                $(this).prop('disabled', true);
            }
        });
    }
</script>

@endsection
