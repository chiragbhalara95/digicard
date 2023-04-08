@extends('layouts.layout')

@section('custom_style')
  <link rel="stylesheet" href="{{ asset('public/admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1 class="text-center">Social Media Link </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{route('business.social-media-master-list')}}">Social Media Link List</a></li>
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
            <div class="form-group formGroupShadow">
                <a class="form-control d-flex justify-content-center" href="{{route('business.social-media-master-add')}}" style="background-color:#009688; color:white;"> + Add Social Media Link </a>

            </div>

            <div class="table-rep-plugin">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table class="table  table-striped table-bordered" cellspacing="0" style="width:100%;">
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
                  </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

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
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
