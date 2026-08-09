@extends('layouts.app')

@section('custom_style')
    <style type="text/css">
        select option:disabled  {
            display: none;
        }
        .card {
            background: linear-gradient(145deg, rgba(25,23,19,.98), rgba(18,17,14,.98));
            border: 1px solid rgba(215,181,106,.18);
            border-radius: 2rem;
            box-shadow: 0 24px 70px rgba(0,0,0,.34);
            overflow: hidden;
        }
        .card-header {
            background: transparent;
            border: 0;
            color: #f5ecdd;
            font-family: 'Fraunces', Georgia, serif;
            font-size: 2rem;
            font-weight: 400;
            padding: 2.25rem 2.25rem 0;
        }
        .card-body { padding: 1.75rem 2.25rem 2.25rem; }
        .col-form-label { color: #b7afa4; font-size: .78rem; letter-spacing: .1em; text-transform: uppercase; }
        .form-control, .bootstrap-select > .dropdown-toggle {
            min-height: 48px;
            background: #211f1b !important;
            border: 1px solid rgba(215,181,106,.16) !important;
            border-radius: 1rem !important;
            color: #f5ecdd !important;
            caret-color: #ebcf8c;
        }
        .form-control:focus, .bootstrap-select > .dropdown-toggle:focus {
            background: #211f1b !important;
            border-color: #d7b56a !important;
            box-shadow: 0 0 0 4px rgba(215,181,106,.11) !important;
            color: #f5ecdd !important;
        }
        .form-control:-webkit-autofill, .form-control:-webkit-autofill:focus { -webkit-text-fill-color: #f5ecdd; -webkit-box-shadow: 0 0 0 1000px #211f1b inset; }
        .bootstrap-select .dropdown-menu { background: #211f1b; border-color: rgba(215,181,106,.2); }
        .bootstrap-select .dropdown-item { color: #f5ecdd; }
        .bootstrap-select .dropdown-item:hover, .bootstrap-select .dropdown-item.active { background: #322b20; color: #ebcf8c; }
        .showPasswordEle, .input-group-text { background: #211f1b !important; border-color: rgba(215,181,106,.16) !important; }
        .password-input-group .form-control { border-right: 0 !important; border-radius: 1rem 0 0 1rem !important; }
        .password-input-group .password-toggle { width: 52px; background: #211f1b; border: 1px solid rgba(215,181,106,.16); border-left: 0; border-radius: 0 1rem 1rem 0; color: #d7b56a; }
        .password-input-group:focus-within .form-control, .password-input-group:focus-within .password-toggle { border-color: #d7b56a !important; }
        .password-input-group .password-toggle:hover { background: #29251f; color: #ebcf8c; }
        .btn-primary { width: 100%; border: 0; border-radius: 999px; padding: .8rem 1.5rem; background: linear-gradient(100deg,#c69645,#ebcf8c); color: #15120d; font-weight: 600; }
        .btn-primary:hover { background: #ebcf8c; color: #15120d; }
        @media (max-width: 767px) { .card-header { padding: 1.75rem 1.25rem 0; } .card-body { padding: 1.25rem; } .col-form-label { text-align: left !important; } }
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

<!-- Product Dropdown -->
<div class="form-group row">
    <label for="product-select-list" class="col-md-4 col-form-label text-md-right">Select Product</label>
    <select class="form-control selectpicker col-md-6" id="product-select-list" data-live-search="true" name="product_id">
        @foreach($productData as $productDetail)
            <option value="{{ $productDetail['product_id'] }}" 
                @if($productDetail['product_id'] == $selectedProduct) selected @endif>
                {{ $productDetail['product_name'] }}
            </option>
        @endforeach
    </select>
</div>

<!-- SKU Dropdown -->
<div class="form-group row">
    <label for="product-sku-list" class="col-md-4 col-form-label text-md-right">Select Package</label>
    <select class="form-control selectpicker col-md-6" id="product-sku-list" data-live-search="true" name="sku_package_id">
        @if(!empty($skuCustomPackage))
            @foreach($skuCustomPackage as $productId => $skuCustomDetail)
                @foreach($skuCustomDetail as $detail)
                    <option data-product-id="{{ $detail['product_id'] }}" 
                        value="{{ $detail['sku_package_id'] }}"
                        @if($packageId == $detail['sku_package_id']) selected @endif>
                        {{ $detail['duration'] }} {{ $detail['durationType'] }}
                        @if($detail['currency'] == 'USD')
                            (${{ $detail['price_usd'] }})
                        @else
                            (₹{{ $detail['price'] }})
                        @endif
                    </option>
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
                                <div class="input-group password-input-group" id="show_hide_password">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    <button type="button" class="password-toggle" aria-label="Show password" aria-pressed="false"><i class="fa-solid fa-eye-slash" aria-hidden="true"></i></button>

                                </div>

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
                                <div class="input-group password-input-group" id="show_hide_password2">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                    <button type="button" class="password-toggle" aria-label="Show password" aria-pressed="false"><i class="fa-solid fa-eye-slash" aria-hidden="true"></i></button>
                                </div>

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
        $("#product-sku-list").val('');
        displaySkuOpt(productId);
        $("#product-sku-list :last").attr("selected", "seleected");
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

    document.querySelectorAll('.password-input-group').forEach(function (group) {
        const input = group.querySelector('input');
        const toggle = group.querySelector('.password-toggle');
        const icon = toggle.querySelector('i');
        toggle.addEventListener('click', function () {
            const isVisible = input.type === 'text';
            input.type = isVisible ? 'password' : 'text';
            icon.classList.toggle('fa-eye-slash', !isVisible);
            icon.classList.toggle('fa-eye', isVisible);
            toggle.setAttribute('aria-label', isVisible ? 'Show password' : 'Hide password');
            toggle.setAttribute('aria-pressed', String(!isVisible));
        });
    });
</script>

@endsection
