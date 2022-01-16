@extends('layouts.user-bussiness.app')


@section('content')

<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <main class="app-content">

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
</main>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <!-- left column -->
          <div class="col-md-12">
          <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Person Detail</h3>
              </div>
    <div class="row">
    <div class="col-md-8 bg-white py-3 border ml-5">

            <form action="{{url('productSave')}}" id="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label"> Title<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" required placeholder="Title">
                    
                </div>
                <div class="form-group">
                    <label class="control-label">Heading Image<span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="head_image" required accept="image/*">
                @error('head_image')
                    <label id="mobile-error" class="error" for="image">
                        <strong>{{ $message }}</strong>
                    </label>
                @enderror
                                        
                </div>
                
                {{--
                <div class="form-group">
                    <label class="control-label">Multipal Image<span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="mul_image[]" multiple required>
                </div>
                --}}
                
                <div class="form-group">
                    <label class="control-label">Description<span class="text-danger">*</span></label>
                    <textarea name="description" placeholder="Description" required class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Gallery Link (Use - https OR http://)</label>
                    <input type="url" name="links" class="form-control" placeholder="Gallery Link">
                </div>

                <div class="form-group">
                    <label class="control-label">Mrp Price<span class="text-danger">*</span></label>
                    <input type="number" required name="mrp_price" class="form-control" placeholder="Enter MRP" step="0.01" min="0">
                </div>

                <div class="form-group">
                    <label class="control-label">Special Price<span class="text-danger">*</span></label>
                    <input type="number" required name="special_price" class="form-control" placeholder="Enter Special Price" step="0.01" min="0">
                </div>

                <div class="form-group">
                    <label class="control-label">Document</label>
                    <input type="file" class="form-control" name="document" accept=".doc,.docx,application/msword,.pdf">
                    @error('head_image')
                        <label id="mobile-error" class="error" for="image">
                            <strong>{{ $message }}</strong>
                        </label>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
            </form>
        </div>
    </div>


          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@stop
