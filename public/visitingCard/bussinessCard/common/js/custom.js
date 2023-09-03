window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-CJZJHWL0WG');

$('.rating').starRating({
    starSize: 1.5,
    showInfo: true
});

$(document).on('change', '.rating',function (e, stars, index) {
  // alert(`Thx for ${stars} stars!`);
  $("#ratingVal").val(stars)
});


$(document).ready(function() {
    var isPostRating = getLocalStorage('is_post_rating_'+$("#slug").val());
    if (isPostRating == '1') {
      $("#rating-post").hide();
    }

    $("#feedbackFrm").validate({
        ignore: "",
        rules: {
            message: {
                required: true
            },
            feedbackName: {
                required: true
            },
            star: {
                required: true,
                min:1
            },
        },
        messages: {
            message: {
                required: "Please enter message"
            },
            feedbackName: {
                required: "Please enter name"
            },
            ratingVal:{
              required: "Please select a rating",
              min:"Please select a rating"
            }

        },
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error');
            $(element).parents('.form-group').addClass('has-success');
        },
        submitHandler: function(form,e) {
            $.ajax({
                type: 'POST',
                url: form.action,
                data: $('#feedbackFrm').serialize(),
                success: function(result) {
                  if(result && result.code == '0') {
                    toastr.success(result.msg)
                    setLocalStorage('is_post_rating_'+$("#slug").val(),1)
                    // setLocalStorage('rating_comment_'+userId,JSON.stringify(response.data))
                    $("#rating-post").hide();

                  } else {
                    toastr.error(result.msg)
                  }
                },
                error : function(error) {
                    toastr.error("Something went wrong, please try again")

                }
            });
            return false;
        }
    });

});  



function setLocalStorage(key,value)
{
    localStorage.setItem(key,value);
}

function getLocalStorage(key)
{
    return localStorage.getItem(key);
}


$("#feedbackBtn").click( function(){
  $("#ratingAllModal").modal('show');
})


function copyUrlSecond() {
  // Get the text field
  var copyText = document.getElementById("visitingUrlText");
  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices
  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  // Alert the copied text
  toastr.success("Url copied successfully")
}


  $('.whatsapp-input-phone').on('paste',function(e){
      var value = e.originalEvent.clipboardData.getData('Text');
      console.log(value)
      var mobile = '';

      if(value.charAt(0) == '+' || value.charAt(0)=='0'){
        mobile = value.replace(/[^a-zA-Z0-9+]/g, "").substr(3);
      } else {
        mobile = value.replace(/[^a-zA-Z0-9]/g, "");
      }

      $('.whatsapp-input-phone').val(mobile)
  });


    $('#ratingAllModal').on('shown.bs.modal'  , function() {
      $('.modal-backdrop').remove();
      $('body').removeClass( "modal-open" );
    });