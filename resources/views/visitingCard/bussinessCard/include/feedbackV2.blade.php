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
                    <button onclick="openFeedbackModal()" class="btn btn-secondary" style="width: 100%;">
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

                        <div class="rating-input">
                            <div style="text-align: center; margin-bottom: 10px; color: var(--text-secondary);">Rate Us</div>
                            <div class="rating-stars" id="ratingStars">
                                <i class="fas fa-star star" data-rating="1"></i>
                                <i class="fas fa-star star" data-rating="2"></i>
                                <i class="fas fa-star star" data-rating="3"></i>
                                <i class="fas fa-star star" data-rating="4"></i>
                                <i class="fas fa-star star" data-rating="5"></i>
                            </div>
                        </div>

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

