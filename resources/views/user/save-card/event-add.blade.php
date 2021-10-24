@extends('layouts.layout')

@section('custom_style')
  <link rel="stylesheet" href="{{ asset('public/admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Occasion Events</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">

        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Event Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="saveEventFrm" class="form" method="POST" action="{{route('save-user-occasion-event')}}">
                @csrf
                <div class="card-body">
                  <input type="hidden" name="id" value="{{isset($eventDetail->id) ? $eventDetail->id : ''}}">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Event Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Event Name" value="{{isset($eventDetail->name) ? $eventDetail->name : ''}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Event Time</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control float-right" id="event_time" name="event_time" value="{{isset($eventDetail->event_time) ? $eventDetail->event_time : ''}}">
                  </div>


                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Invite From</label>
                    <input type="text" class="form-control" id="invite_by" name="invite_by" placeholder="Enter Invite From" value="{{isset($eventDetail->invite_by) ? $eventDetail->invite_by : ''}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea name="address" class="form-control" placeholder="Enter Address">{{isset($eventDetail->address) ? $eventDetail->address : ''}}</textarea>
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
          <!--/.col (left) -->
        </div>

              </div>
              <!-- /.card-body -->
            </div>

@endsection


@section('custom_script')
<link rel="stylesheet" href="{{ asset('public/admin/plugins/daterangepicker/daterangepicker.css')}}">
<script src="{{ asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>

<script type='text/javascript'>
$(document).ready(function() {
$('#event_time').daterangepicker({
      singleDatePicker: true,
      timePicker: true,
      timePickerIncrement: 5,
      minDate:new Date(),
      locale: {
        format: 'DD/MM/YYYY hh:mm A'
      }
});

    $(".form").validate({
        rules: {
            name: {
                required: true
            },
            event_time:{
              required: true
            },
            invite_by: {
                required: true
            },
            address:{
                required: true
            }
        },
        messages: {
            name: {
                required: "Please enter event name."
            },
            event_time: {
              required: "Please select event time"
            },
            invite_by: {
                required: "Please enter invite from."
            },
            address: {
                required: "Please enter address."
            }
        },
        errorClass: "help-inline text-danger",
        errorElement: "span",
        highlight: function(element, errorClass, validClass) {
            if ($(element).attr('name') == 'event_time') {
                $(element).parents().parent().appendTo('has-error');
            } else {
                $(element).parents('.form-group').addClass('has-error');
            }
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
                    window.location.href = "{{route('user-occasion-event')}}";
                    toastr.success("Record saved successfull.");
                  }
                },
                error : function(error) {

                }
            });
            return false;
        }
    });

});
</script>

@endsection
