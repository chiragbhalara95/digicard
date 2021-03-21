 $(function () {
     $('.selectpicker').selectpicker('setStyle', 'col-md-8 btn-sm btn-primary');
 });

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

      console.log(price)
    });

});
