@extends('layouts.user-bussiness.app')
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tree"></i> Edit Gallery</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Gallery Setting</a></li>
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
        <div class="col-md-8 bg-white py-3 border ml-5">
            @foreach($products_data as $data)
            <form action="{{url('productEditSave')}}" id="" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="hidden" name="mul_image" value="{{$data->mul_image}}">
                <div class="form-group">
                    <label class="control-label"> Title<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                    
                </div>
                <div class="form-group">
                    <label class="control-label">Heading Image<span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="head_image" accept="image/*">
                </div>
                
                {{--
                <div class="form-group">
                    <label class="control-label">Multipal Image<span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="mul_image[]" multiple>
                </div>
                --}}

                <div class="form-group">
                    <label class="control-label">Description<span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control"><?php echo $data->description; ?></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Gallery Link (Use - https OR http://)</label>
                    <input type="url" name="links" class="form-control" value="{{$data->links}}">
                </div>

                <div class="form-group">
                    <label class="control-label">Mrp Price<span class="text-danger">*</span></label>
                    <input type="number" required name="mrp_price" class="form-control" placeholder="Enter MRP" step="0.01" min="0" value="{{$data->mrp_price}}">
                </div>

                <div class="form-group">
                    <label class="control-label">Special Price<span class="text-danger">*</span></label>
                    <input type="number" required name="special_price" class="form-control" placeholder="Enter Special Price" step="0.01" min="0" value="{{$data->special_price}}">
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
            @endforeach
        </div>
    </div>
</main>
@stop
