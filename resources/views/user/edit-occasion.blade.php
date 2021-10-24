@extends('layouts.layout')

@section('custom_style')
  <link rel="stylesheet" href="{{ asset('public/admin/plugins/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('public/admin/plugins/toastr/toastr.min.css') }}">

@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Occasion Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Occasion</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Occasion Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" role="form" method="POST" action="{{route('save-occasion')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Event Type</label>
                    <select class="form-control event_type" name="event_type" required>
                      <option value="" @if(!empty($occasionData)) selected @endif>Select Event Type</option>
                      <!--
                      <option value="birthday" @if(!empty($occasionData) && $occasionData->event_type == 'birthday') selected @endif>BirthDay</option>
                      <option value="enagement" @if(!empty($occasionData) && $occasionData->event_type == 'enagement') selected @endif>Enagement</option>
                      -->
                      <option value="marriage" @if(!empty($occasionData) && $occasionData->event_type == 'marriage') selected @endif>Marriage</option>
                    </select>
                  </div>

                  <div class="birthday-section dynamic-section" style="display: none">
                  </div>

                  <div class="enagement-section dynamic-section" style="display: none">
                  </div>

                  <div class="marriage-section dynamic-section" style="display: none">
                      @foreach($marriageData as $marriageDetail)
                        @if($marriageDetail['type'] == 'text')
                            <div class="form-group">
                              <label for="exampleInputEmail1">{{$marriageDetail['label']}}</label>
                              <input name="{{$marriageDetail['name']}}" type="text" class="form-control" placeholder="{{$marriageDetail['paceholder']}}" value="{{isset($marriageDetail['value']) ? $marriageDetail['value'] : ''}}" required>
                            </div>

                        @elseif($marriageDetail['type'] == 'date')
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{$marriageDetail['label']}}</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" name="{{$marriageDetail['name']}}" class="form-control datetimepicker-input" data-target="#reservationdate" value="{{isset($marriageDetail['value']) ? $marriageDetail['value'] : date('d/m/Y')}}"  required/>
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>

                        @elseif($marriageDetail['type'] == 'textArea')
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{$marriageDetail['label']}}</label>
                            <textarea name="{{$marriageDetail['name']}}" class="form-control">{{isset($marriageDetail['value']) ? $marriageDetail['value'] : ''}}</textarea>
                        </div>

                        @elseif($marriageDetail['type'] == 'phone')
                            <div class="form-group">
                              <label for="exampleInputEmail1">{{$marriageDetail['label']}}</label>
                              <input name="{{$marriageDetail['name']}}" type="tel" class="form-control" placeholder="{{$marriageDetail['paceholder']}}" value="{{isset($marriageDetail['value']) ? $marriageDetail['value'] : ''}}" required>
                            </div>

                        @elseif($marriageDetail['type'] == 'file')
                            <div class="form-group">
                              <label for="exampleInputEmail1">{{$marriageDetail['label']}}</label>
                              @if(!empty($marriageDetail['value']))
                                    <img class="headline_1" src="{{asset('public/upload/save-the-date/'.$marriageDetail['name'].'/'.$marriageDetail['value'])}}" width="100px" height="100px" alt="">
                              <input name="{{$marriageDetail['name']}}_old" type="hidden" value="{{$marriageDetail['value']}}">
                              @endif
                              <input name="{{$marriageDetail['name']}}" type="file" class="form-control" placeholder="{{$marriageDetail['paceholder']}}">
                            </div>

                        @endif
                      @endforeach

                      <div class="form-group">
                        <label for="exampleInputEmail1">Cover Image</label>
                              @if(!empty($occasionData['cover_image']))
                                    <img class="headline_1" src="{{asset('public/upload/save-the-date/cover_image/'.$occasionData['cover_image'])}}" width="100px" height="100px" alt="">
                                  <input name="cover_image_old" type="hidden" value="{{$occasionData['cover_image']}}">
                              @endif
                        <input name="cover_image" type="file" class="form-control" placeholder="Please select cover image">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Welcome Image</label>
                              @if(!empty($occasionData['welcome_image']))
                                    <img class="headline_1" src="{{asset('public/upload/save-the-date/welcome_image/'.$occasionData['welcome_image'])}}" width="100px" height="100px" alt="">
                                  <input name="welcome_image_old" type="hidden" value="{{$occasionData['welcome_image']}}">
                              @endif

                        <input name="welcome_image" type="file" class="form-control" placeholder="Please select welcome image" >
                      </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
          <!--/.col (left) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection


@section('custom_script')
<script src="{{ asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/moment/moment.min.js') }}"></script>
<!--
<script src="{{ asset('public/admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('public/admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
-->
<script src="{{ asset('public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/toastr/toastr.min.js') }}"></script>


<script type="text/javascript">
$('#reservationdate').datetimepicker({
    format: 'DD/MM/YYYY'
});

$(document).ready(function () {
    setTimeout(function() {
        $(".event_type").trigger('change');
    }, 500)

    $(".event_type").change(function(event) {
        var eventType = $(this).val();
        $(".dynamic-section").hide();
        $("."+eventType+"-section").show();
    });

});

</script>

<script type='text/javascript'>
/*
$(document).ready(function() {
    $(".form").validate({
        rules: {
            girl_name: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            userName: {
                required: "specify userName"
            },
            password: {
                required: "specify password"
            }
        },
        errorClass: "help-inline text-danger",
        errorElement: "span",
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error');
            $(element).parents('.form-group').addClass('has-success');
        },
        submitHandler: function(form,e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: form.action,
                data: $('form').serialize(),
                success: function(result) {
                  if(result && result.code == '0') {
                    toastr.info(result.msg)
                  }
                },
                error : function(error) {

                }
            });
            return false;
        }
    });

});  
*/
</script>

@endsection
