@extends('layouts.'.$template_name.'.app')

@section('custom_style')
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

                  <form id="orderPayForm">
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
                                          <option class="text-center" value="{{$key}}" data-price="{{$detail['price']}}">{{$duration}}</option>
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
                             <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="" data-id="{{auth()->user()->product_id}}">Pay Now</a> 
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
      <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
      <script>
         var SITEURL = '{{URL::to('')}}';
         $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
         }); 

         $('body').on('click', '.buy_now', function(e){
          $("#buy_now-error").empty();
          if($("#sku_price").val() == '') {
            $(this).after('<label id="buy_now-error" class="error label-warning" for="buy_now"><small>This field is required.</small></label>');
            return false;
          }

           var totalAmount = $(this).attr("data-amount");
           var product_id =  $(this).attr("data-id");
           var options = {
           "key": "{{ env('RAZORPAY_KEY') }}",
           "amount": (totalAmount*100), // 2000 paise = INR 20
           "name": "Digicard",
           "description": "Payment",
           "image": "http://w3adda.com/wp-content/uploads/2019/07/w3a-fb-dp.png",
           "handler": function (response){
           $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
           }); 

                 $.ajax({
                   url: SITEURL + '/razorpay-payment',
                   type: 'post',
                   dataType: 'json',
                   data: {
                    razorpay_payment_id: response.razorpay_payment_id ,
                     totalAmount : totalAmount ,product_id : product_id,
                    "_token": "{{ csrf_token() }}",
                   }, 
                   success: function (data) {
                      if (data.code === 0) {
                            window.location.href = SITEURL + '/home';
                        } else {
                          window.location.href = SITEURL + '/payment';
                        }
                   }
               });
           },
          "prefill": {
               "contact": "{{auth()->user()->country_code}}{{auth()->user()->phone}}",
               "email":"{{auth()->user()->email}}",
           },
           "theme": {
               "color": "#528FF0"
           }
         };
         var rzp1 = new Razorpay(options);
         rzp1.open();
         e.preventDefault();
         });
      </script>

  <script type="text/javascript">
    $(".custom-duration").change(function(event) {
      var price = $(".custom-duration :selected").attr('data-price');
      $(".buy_now").attr('data-amount', price);
    });

</script>
@endsection
