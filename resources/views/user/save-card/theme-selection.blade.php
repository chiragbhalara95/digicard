@extends('layouts.layout')

@section('custom_style')
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-paint-brush"></i> Themes</h3>
    </div>
    <div class="card-body">
    <div class="row bg-white py-3">
        <div class="col-md-12">
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
            <div class="card-box">
                <form action="{{route('business.save-user-theme')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row col-sm-12">
                        @foreach($theme_data as $data)
                        <div class="col-sm-3 mt-3">
                            <div class="row col-sm-12">
                                <div class="col-sm-12">
                                    <label class="control-label" for="theme_name{{$data->id}}"><img src="{{URL::asset('public/upload/theme/'.$data->image)}}" width="120px" ></label>
                                </div>
                                <div class="col-sm-2 mt-3">
                                    <input type="radio" name="theme" id="theme_name{{$data->id}}" value="{{$data->id}}" {{$theme == $data->id ? 'checked' : ''}} required>
                                </div>
                                <div class="col-sm-10 mt-3">
                                    <label class="control-label" for="theme_name{{$data->id}}"><b>{{$data->name}}</b></label>
                                </div>
                                @if(!empty($data->options))
                                    <select class="form-control color_selection_option" name="color[{{$data->id}}]">
                                        <option value="other" selected="">Other</option>

                                        @foreach($data->options as $colorCode => $option)
                                        <option value="{{$colorCode}}"
                                        @if (auth()->user()->theme_color == $colorCode) selected @endif
                                        >{{$option}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <input type="text" class="form-control custom_color_other d-none mt-1" name="custom_color_code[{{$data->id}}]" maxlength="6" value="{{str_replace("#","",auth()->user()->theme_color)}}">
                                    <div class="custom_color" style="width: 320px;margin-top:10px;height: 10px;"></div>
                                @endif

                            </div>
                            <hr>
                        </div>

                        @endforeach
                        <div class="col-sm-12 py-5">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;
                        </div>
                    </div>
                </form>

            </div>

        </div>

        {{ $theme_data->links('pagination::bootstrap-4') }}

    </div>

    </div>



@endsection


@section('custom_script')
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".custom_color").each(function(index, el) {
            code = $(el).parent().find('.color_selection_option').val()
            $(this).css("background-color", code)
            if (code == 'other') {
                $(".custom_color_other").removeClass('d-none');
            }
        });
    });

    $(document).on("change", ".color_selection_option", function(){
        $(".custom_color_other").addClass('d-none');

        code = $(this).val()
        if (code == 'other') {
            $(".custom_color_other").removeClass('d-none');
        } else {
            $(this).parent().find('.custom_color').css("background-color", code)
        }
    })
</script>
@endsection
