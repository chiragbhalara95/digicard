@extends('layouts.layout')

@section('custom_style')
  <link rel="stylesheet" href="{{ asset('public/admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('content')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Occasion Events</h3>
                <a class="btn btn-primary col-md-1 float-right text-white" href="{{route('add-user-occasion-event')}}">Add</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Event Name</th>
                    <th>Event Time</th>
                    <th>Invite From</th>
                    <th>Venue</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($eventData as $eventDetail)
                    <tr>
                      <td>{{$eventDetail->name}}</td>
                      <td>{{date("d/m/Y h:i A", strtotime($eventDetail->event_time))}}</td>
                      <td>{{$eventDetail->invite_by}}</td>
                      <td>{{$eventDetail->address}}</td>
                      <td>
                        <a class="btn btn-primary" href="{{url('user/occasion/event/edit/')}}/{{$eventDetail->id}}">Edit</a>
                        <button class="btn btn-warning delete_event_btn" data-id="{{$eventDetail->id}}">Delete</button>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection


@section('custom_script')
<script src="{{ asset('public/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('public/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });


  $(document).on('click', '.delete_event_btn', function(event) {
    event.preventDefault();
    var id = $(this).data('id');
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
        url: '{{url("/user/occasion/event/delete/")}}/'+id,
        data: $('form').serialize(),
        success: function(result) {
          if(result && result.code == '0') {
            toastr.success("Record deleted successfull.");
            location.reload()
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
