
<!-- Modal -->




<div class="feedback-list">

@if (!empty($ratigSummaryData))
@foreach($ratigSummaryData as $ratigSummaryDetail)
  <div class="feedback-wrapper"> 

    <span class="feedback-name-wrapper">
      <span class="feedback-name">{{$ratigSummaryDetail->name}}</span> on {{date("M d, Y", strtotime($ratigSummaryDetail->created_at))}} </span>

    @for($i=0;$i<=$ratigSummaryDetail->rating_count;$i++)
      <span class="fa fa-star checked"></span>
    @endfor
    @if ($ratigSummaryDetail->rating_count < 5)
      @for($i=$ratigSummaryDetail->rating_count;$i<=5;$i++)
      <span class="fa fa-star"></span>
      @endfor
    @endif

    <div>{{$ratigSummaryDetail->comment}}</div>
    <hr>
  </div>
@endforeach
@endif

</div>

@if (count($ratigSummaryData) > 0)
<div class="feedbtndiv">
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ratingAllModal">View All Feedback</button>
</div>
@endif

<div id ="rating-post">
<form action="{{route('sendRating')}}" method="post" id="feedbackFrm" class="enquiry-form">

  @csrf
  <input type="hidden" name="slug" id="slug" value="{{$userObj->slug}}">
  <input type="hidden" name="rating_count" id="ratingVal" value="0">

  <div class="rating"></div>
  <div class="form-group">
    <input type="text" class="form-control" name="name" data-parsley-trigger="change" id="feedbackName" placeholder="Enter Full Name" >
    </div>

    <div class="form-group">
        <textarea name="comment" class="form-control" id="message" placeholder="Enter Message"></textarea>
    </div>

    <div class="form-group">
        <input type="submit" id="feedbackSubmitBtn" value="Send" class="">
    </div>
</form>
</div>


<div id="ratingAllModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="color: #333;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">FEEDBACKS</h4>
      </div>
      <div class="modal-body" style="color: #333;">
<div class="feedback-list">

@if (!empty($ratigAllData))
@foreach($ratigAllData as $ratigSummaryDetail)
  <div class="feedback-wrapper"> 

    <span class="feedback-name-wrapper">
      <span class="feedback-name">{{$ratigSummaryDetail->name}}</span> on {{date("M d, Y", strtotime($ratigSummaryDetail->created_at))}} </span>

    @for($i=0;$i<=$ratigSummaryDetail->rating_count;$i++)
      <span class="fa fa-star checked"></span>
    @endfor
    @if ($ratigSummaryDetail->rating_count < 5)
      @for($i=$ratigSummaryDetail->rating_count;$i<=5;$i++)
      <span class="fa fa-star"></span>
      @endfor
    @endif

    <div>{{$ratigSummaryDetail->comment}}</div>
    <hr>
  </div>
@endforeach
@endif

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

