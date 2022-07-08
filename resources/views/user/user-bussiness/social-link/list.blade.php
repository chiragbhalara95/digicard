@extends('layouts.layout')

@section('custom_style')
  <link rel="stylesheet" href="{{ asset('public/admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('content')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Social Media Link</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a class="form-control d-flex justify-content-center" href="{{route('business.social-media-master-add')}}" style="background-color:#009688; color:white;"> + Add Social Media Link </a>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr</th>
                    <th>Type</th>
                    <th>Url</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if (!empty($socialMediaLinkData))
                    @foreach($socialMediaLinkData as $key => $socialMediaLinkDetail)
                      <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{isset($allSocialMedia[$socialMediaLinkDetail->type]) ? $allSocialMedia[$socialMediaLinkDetail->type] : $socialMediaLinkDetail->type}}</td>
                        <td>{{$socialMediaLinkDetail->url}}</td>
                        <td>
                          <a href="{{route('business.social-media-master-edit', $socialMediaLinkDetail->id)}}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{route('business.social-media-master-delete', $socialMediaLinkDetail->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                  @endif
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
</script>
@endsection
