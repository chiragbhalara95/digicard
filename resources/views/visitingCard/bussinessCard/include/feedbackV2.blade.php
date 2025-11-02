            <!-- Feedback -->
            <div class="section" id="feedback-section">
                <h2 class="section-header">Feedbacks</h2>
                
                <!-- Feedback List Preview -->
                <div class="feedback-list">
                    @if (!empty($ratigSummaryData))
                        @foreach($ratigSummaryData as $ratigSummaryDetail)
                        <div class="feedback-item">
                            <div class="feedback-header">
                                <div class="feedback-user">
                                    <div class="feedback-avatar">{{substr($ratigSummaryDetail->name, 0, 1)}}</div>
                                    <div>
                                        <div class="feedback-name">{{$ratigSummaryDetail->name}}</div>
                                        <div class="feedback-date">{{date("M d, Y", strtotime($ratigSummaryDetail->created_at))}}</div>
                                    </div>
                                </div>
                                <div class="feedback-stars">
                                    @for($i=1; $i<=5; $i++)
                                        @if($i <= $ratigSummaryDetail->rating_count)
                                        <i class="fas fa-star star-filled"></i>
                                        @else
                                        <i class="fas fa-star star-empty"></i>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <div class="feedback-comment">{{$ratigSummaryDetail->comment}}</div>
                        </div>
                        @endforeach
                    @endif
                </div>


                @if (count($ratigSummaryData) > 0)
                <div style="text-align: center; margin: 20px 0;">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ratingAllModal">
                <i class="fas fa-comments"></i> View All Feedbacks
                </button>


                </div>
                @endif

                <!-- Feedback Form -->
                <div class="feedback-form-wrapper">
                    <h3 style="margin-bottom: 20px; text-align: center;">Leave Your Feedback</h3>
                    
                    <form action="{{route('sendRating')}}" method="post" id="feedbackFrm" class="feedback-form">
                        @csrf
                        <input type="hidden" name="slug" id="slug" value="{{$userObj->slug}}">
                        <input type="hidden" name="rating_count" id="ratingVal" value="0">

                        <div id="ratingStars"></div>

                        <input type="text" 
                               class="form-input" 
                               name="name" 
                               id="feedbackName" 
                               placeholder="Enter Your Name" 
                               required>

                        <textarea name="comment" 
                                  class="form-textarea" 
                                  id="comment" 
                                  placeholder="Share Your Experience..."
                                  required></textarea>

                        <button type="submit" id="feedbackSubmitBtn" class="btn btn-primary" style="width: 100%;">
                            <i class="fas fa-paper-plane"></i> Submit Feedback
                        </button>
                    </form>
                </div>
            </div>

            <!-- All Feedbacks Modal -->
            <div id="feedbackModal" class="modal">
                <div class="modal-content" style="max-width: 600px;">
                    <span class="modal-close" onclick="closeFeedbackModal()">×</span>
                    <h2 style="margin-bottom: 20px;">All Feedbacks</h2>
                    
                    <div class="feedback-list" style="max-height: 500px; overflow-y: auto;">
                        @if (!empty($ratigAllData))
                            @foreach($ratigAllData as $ratigSummaryDetail)
                            <div class="feedback-item">
                                <div class="feedback-header">
                                    <div class="feedback-user">
                                        <div class="feedback-avatar">{{substr($ratigSummaryDetail->name, 0, 1)}}</div>
                                        <div>
                                            <div class="feedback-name">{{$ratigSummaryDetail->name}}</div>
                                            <div class="feedback-date">{{date("M d, Y", strtotime($ratigSummaryDetail->created_at))}}</div>
                                        </div>
                                    </div>
                                    <div class="feedback-stars">
                                        @for($i=1; $i<=5; $i++)
                                            @if($i <= $ratigSummaryDetail->rating_count)
                                            <i class="fas fa-star star-filled"></i>
                                            @else
                                            <i class="fas fa-star star-empty"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                                <div class="feedback-comment">{{$ratigSummaryDetail->comment}}</div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

<!-- All Feedbacks Modal -->
<div class="modal fade" id="ratingAllModal" tabindex="-1" aria-labelledby="ratingAllModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content border-0 shadow-lg rounded-4" 
         style="background: linear-gradient(145deg, #1d1d2f, #12121a); color: #f8f9fa;">

      <!-- Header -->
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title fw-semibold" id="ratingAllModalLabel">
          <i class="fas fa-comments text-warning me-2"></i> All Feedbacks
        </h5>
        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body px-3 pt-3 pb-2" style="max-height: 400px; overflow-y: auto;">
        @if (!empty($ratigAllData))
          @foreach($ratigAllData as $ratigSummaryDetail)
          <div class="p-3 mb-3 rounded-3" 
               style="background-color: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08); transition: 0.3s;">
            <div class="d-flex justify-content-between align-items-start mb-1">
              <div>
                <div class="fw-semibold" style="font-size: 15px;">{{ $ratigSummaryDetail->name }}</div>
                <small class="text-muted">{{ date('M d, Y', strtotime($ratigSummaryDetail->created_at)) }}</small>
              </div>
              <div class="text-warning">
                @for($i=1; $i<=5; $i++)
                  @if($i <= $ratigSummaryDetail->rating_count)
                    <i class="fas fa-star"></i>
                  @else
                    <i class="far fa-star"></i>
                  @endif
                @endfor
              </div>
            </div>
            <p class="mb-0 text-light small" style="opacity: 0.9;">{{ $ratigSummaryDetail->comment }}</p>
          </div>
          @endforeach
        @else
          <p class="text-center text-muted my-4">No feedbacks yet.</p>
        @endif
      </div>

      <!-- Footer -->
      <div class="modal-footer border-0 justify-content-center pt-0 pb-3">
        <button type="button" class="btn btn-outline-light px-4 py-2 rounded-pill" data-bs-dismiss="modal">
          <i class="fas fa-times me-2"></i> Close
        </button>
      </div>

    </div>
  </div>
</div>
