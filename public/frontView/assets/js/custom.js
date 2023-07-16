$(function () {
    $("#sku-package-row-"+$("#product-select-list").val()).show();
    $(".custom-duration option:last").attr("selected", "selected").trigger('change');
    
    $("#product-select-list").change(function(event) {
        $(".sku-package-row").hide();
        $("#sku-package-row-"+$("#product-select-list").val()).show();
    });

    $(".custom-duration").change(function(event) {
      var durationStr = $(this).find(':selected').text();
      var price = durationStr.substring(durationStr.lastIndexOf("(") + 1, durationStr.lastIndexOf(")"));
    });

    $(".create_custom_card").click(function(event) {
        event.preventDefault();
        var customPackageId = $(this).parent().closest('.box').find('.custom-duration option:selected').val();
        var url = $(this).attr('href');
        if (customPackageId > 0) {
            url += '?packageId='+customPackageId
        }
        location.href = url;
    });

});

$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
