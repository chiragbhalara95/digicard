function setLocalStorage(key, value) {
    localStorage.setItem(key, value);
}

function getLocalStorage(key) {
    return localStorage.getItem(key);
}

$(document).ready(function() {
    // Check if already rated
    var isPostRating = getLocalStorage('is_post_rating_' + $("#slug").val());
    if (isPostRating == '1') {
        $("#rating-post").hide();
    }

    // ⭐ Initialize validation for feedback form
    $("#feedbackFrm").validate({
        ignore: "",
        rules: {
            name: {
                required: true
            },
            comment: {
                required: true
            },
            rating_count: {
                required: true,
                min: 1
            }
        },
        messages: {
            name: {
                required: "Please enter your name"
            },
            comment: {
                required: "Please enter your feedback message"
            },
            rating_count: {
                required: "Please select a rating",
                min: "Please select a rating"
            }
        },
        highlight: function(element) {
            $(element).closest('.form-group, .form-input, .form-textarea').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group, .form-input, .form-textarea').removeClass('has-error').addClass('has-success');
        },
        submitHandler: function(form) {
            $.ajax({
                type: 'POST',
                url: form.action,
                data: $(form).serialize(),
                success: function(result) {
                    if (result && result.code == '0') {
                        toastr.success(result.msg);
                        setLocalStorage('is_post_rating_' + $("#slug").val(), 1);
                        $("#rating-post").hide();
                        $(form)[0].reset();
                        $('#ratingVal').val(0);
                        $('.fa-star').removeClass('star-filled');
                    } else {
                        toastr.error(result.msg);
                    }
                },
                error: function() {
                    toastr.error("Something went wrong, please try again");
                }
            });
            return false;
        }
    });

    // Handle rating star clicks
    $('.rating-stars .star').on('click', function() {
        const rating = $(this).data('rating');
        $('#ratingVal').val(rating);
        $('.rating-stars .star').removeClass('star-filled');
        $(this).prevAll('.star').addBack().addClass('star-filled');
    });
});
