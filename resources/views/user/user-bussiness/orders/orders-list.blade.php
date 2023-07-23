@extends('layouts.user-bussiness.app')
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h2 class="text-center">Order List</h2>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{route('business.order-list')}}">Order List</a></li>
        </ul>
    </div>

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

    <div class="row">
        <div class="col-sm-12 bg-white py-3 border">
            <div class="table-rep-plugin">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="example1" class="table nowrap table-striped table-bordered" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Order No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach($orderData as $data)
                            <tr>
                                <td>{{$i}}.</td>
                                <td>{{$data->id}}</td>
                                <td>{{$data->first_name}} {{$data->last_name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->contactNo}}</td>
                                <td>{{convertUTCToOtherTimeZone('Asia/Kolkata', $data->created_at, "d/m/Y h:i A")}}</td>
                                <td>₹{{$data->total}}</td>
                                <td>
                                    <a href="{{route('business.order.invoice-print', $data->id)}}" class="btn btn-primary">Save Invoice</a>
                                    <a href="{{route('business.order.invoice-print', $data->id)}}?print=y" target="_tabs" class="btn btn-warning">Print Invoice</a>

                                </td>
                            </tr>
                            @php $i++ @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</main>
@stop

@section('custom_script')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
  $(function () {

  $(document).on('click', '.convert_to_order_btn', function(event) {
    event.preventDefault();
    var id = $(this).data('id');
    var url = "{{route('business.convert-order')}}";

    /* Act on the event */
    swal({
      title: "Are you sure?",
      text: "You want to create an order",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, order placed it!",
      cancelButtonText: "No, cancel please!",
      closeOnConfirm: true,
      closeOnCancel: true
    },
    function(isConfirm){
      if (isConfirm) {

        $.ajax({
            type: 'POST',
            url: url,
            data: {
                'id':id,
                "_token": "{{ csrf_token() }}",

            },
            dataType: "json",
            success: function(result) {
              if(result && result.code == '0') {
                toastr.success(result.msg);
                setTimeout(() => {
                    location.reload()
                }, 1000);

              } else{
                toastr.error(result.msg);
              }
            },
            error : function(error) {
                toastr.error("Something went wrong, please try again");

            }
        });

      } else {

      }
    });
  });
})
</script>
@endsection
