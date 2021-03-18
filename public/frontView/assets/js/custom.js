$(function () {
    $("#sku-package-row-"+$("#product-select-list").val()).show();

    $("#product-select-list").change(function(event) {
        $(".sku-package-row").hide();
        $("#sku-package-row-"+$("#product-select-list").val()).show();
    });

});
