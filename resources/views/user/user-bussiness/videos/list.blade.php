@extends('layouts.user-bussiness.app')
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h2 class="text-center">Videos List</h2>
        </div>


        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{route('business.videos.list')}}">Videos List</a></li>
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
        <div class="float-right col-lg-2 col-md-12 col-sm-12 form-group formGroupShadow">
            <a class="form-control float-right" href="{{route('business.videos.add')}}" style="background-color:#009688; color:white;"> + Add Video </a>
        </div>

        <div class="col-sm-12 bg-white py-3 border">
            <div class="table-rep-plugin">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="example1" class="table nowrap table-striped table-bordered" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Title</th>
                                <th>Videos</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach($videosData as $data)
                            <tr>
                                <td>{{$i}}.</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->video_path}}</td>
                                <td>
                                  <a href="{{route('business.videos.edit', $data->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                  <a href="{{route('business.videos.delete', $data->id)}}" class="btn btn-sm btn-danger delete_video_btn">Delete</a>
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
<!-- DataTables -->
<script src="{{ asset('public/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
  $(function () {

    $("#example1").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": false,
    });
  });

  $(document).on('click', '.delete_video_btn', function(event) {
    event.preventDefault();
    var id = $(this).data('id');
    var url = $(this).attr('href');

    /* Act on the event */
    swal({
      title: "Are you sure?",
      text: "Yo can not able to revert it..",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel please!",
      closeOnConfirm: true,
      closeOnCancel: true
    },
    function(isConfirm){
      if (isConfirm) {

        $.ajax({
            type: 'get',
            url: url,
            // data: $('form').serialize(),
            success: function(result) {
              if(result && result.code == '0') {
                toastr.success("Record deleted successfull.");
                setTimeout(() => {
                    location.reload()
                }, 1000);

              }
            },
            error : function(error) {

            }
        });

      } else {

      }
    });
  });

</script>
@endsection
