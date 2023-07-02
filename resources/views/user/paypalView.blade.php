@extends('layouts.'.$template_name.'.app')

@section('custom_style')
  <link rel="stylesheet" href="{{ asset('public/admin/plugins/toastr/toastr.min.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                  <h6>Order Summary</h6>
            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Error!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('error') !!}
            @if($message = Session::get('success'))
                <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Success!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('success') !!}

                  <form id="orderPaypalForm" action="{{route('processTransaction')}}" method="POST">
                        <table class="table table-hover text-nowrap">
                          <tr>
                            <td>Product Name</td>
                            <td>{{auth()->user()->product()->first()->product_name}}</td>
                          </tr>
                          <tr>
                            <td>Sku <span class="label label-danger">*</span></td>
                            <td>
                              @if(!empty($skuCustomPackage))
                              @foreach($skuCustomPackage AS $productId => $skuCustomDetail)
                              <div class="row col-md-12 sku-package-row" id="sku-package-row-{{$productId}}">
                                 @foreach($skuCustomDetail AS $detail)
                                       <select name="sku_price" id="sku_price" class="form-control select2 custom-duration" data-live-search="true">
                                          <option class="text-center" value="">Select Duration</option>
                                          @foreach($detail['duration'] AS $key => $duration)
                                          <option class="text-center" value="{{$key}}" 
                                          @if($skuCustomDetail[0]['currency'] == 'USD')
                                          data-price="{{$detail['price_usd']}}"
                                          @else
                                          data-price="{{$detail['price']}}"
                                          @endif
                                           data-currecy="{{$skuCustomDetail[0]['currency']}}">{{$duration}}</option>
                                          @endforeach
                                       </select>
                                 @endforeach
                              </div>
                              @endforeach
                              @endif

                            </td>
                          <tr/>
                          <tr>
                            <td></td>
                            <td>

                              @if ($userCurrency == 'USD')
                              <input type="submit" class="btn btn-sm btn-primary float-right buy_now" value="Pay Now"> 

                              @else
                             <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="" data-id="{{auth()->user()->product_id}}">Pay Now</a>
                             @endif 
                            </td>
                          </tr>
                      </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('custom_script')
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
<script src="{{ asset('public/admin/plugins/toastr/toastr.min.js') }}"></script>

<script>
$(document).ready(function() {
    $("#orderPaypalForm").validate({
        rules: {
            sku_price: {
                required: true
            },
        },
        messages: {
            sku_price: {
                required: "Please select SKU"
            },
        },
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error');
            $(element).parents('.form-group').addClass('has-success');
        },
        submitHandler: function(form) {
            $.ajax({
                type: 'POST',
                url: form.action,
                data: $('form').serialize(),
                success: function(result) {
                  if(result && result.code == '0') {
                    toastr.info(result.msg)
                    location.href=result.data.redirect_url
                  }
                },
                error : function(error) {
                    toastr.error(result.msg)

                }
            });
        }

    });

});  
</script>
@endsection
