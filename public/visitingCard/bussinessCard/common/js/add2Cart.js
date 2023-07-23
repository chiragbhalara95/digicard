var itemCount = 0;
var cartItems = []
  var productIds = []

$('.add').click(function (){
  // $(this).prop("disabled", true)
  $(this).siblings('.itemDetails').clone().appendTo( "#cartItems" ).append('<button class="removeItem product-enquiry-btn text-center">Remove Item</button>');

  if (productIds.includes($(this).data('id')) == true) {
      cartItems[$(this).data('id')]['quantity'] += 1
  } else {
    itemCount ++;
    $('#itemCount').html(itemCount).css('display', 'block');
    productIds.push($(this).data('id'))
    cartItems[$(this).data('id')] = {
        id: $(this).data('id'),
        name: $(this).data('product'),
        price: $(this).data('price'),
        quantity: 1,
        image: ""

    }

  }

}); 

$('.clear').click(function() {
  itemCount = 0;
  $('#itemCount').html('').css('display', 'none');
  $('#cartItems').html('');
}); 

$('#cart').click(function(){
    var html = '';
      if (itemCount === 0) {
      html += 'No Products selected';
      $(".checkoutBtn").prop("disabled", true)
    } else{
      $(".checkoutBtn").prop("disabled", false)

      html += '<table class="table table-hover table-responsive" id="my-cart-table">';
      html += '<thead>'
      html += '<th>Product Name</th>'
      html += '<th>Price</th>'
      html += '<th>Qty</th>'
      html += '<th>Total</th>'
      html += '</thead>'
      html += '<tbody>'

      subtotal=0
      $.each(cartItems, function ( index, value) {

        if (typeof value != 'undefined') {
          subtotal+=(value.price*value.quantity)
          html += '<tr title="'+value.name+'" data-id="'+value.id+'" data-price="'+value.price+'">'
          html += '<td>'+value.name+'</td>'
          html += '<td>₹'+value.price+'</td>'
          html += '<td title="Quantity"><input type="number" min="1" style="width: 70px;" data-id="'+value.id+'" class="my-product-quantity" value="'+value.quantity+'"></td>'
          html += '<td title="Total" class="my-product-total">₹'+(value.price*value.quantity)+'</td>'
          html += '<td title="Remove from Cart" data-id="'+value.id+'" class="text-center" style="width: 30px;"><a href="javascript:void(0);" class="btn btn-xs btn-danger my-product-remove removeItem">X</a>'
          html += '</tr>'

        }

      })
        html += '<tr >'
        html += '<td colspan="3">Total</td>'
        html += '<td class="sub_total_amount">₹'+subtotal+'</td>'
        html += '</tr >'

      html +='</tbody></table>'

    }

  $("#checkoutModal .modal-body").html(html)
  $("#checkoutModal").modal('show')

  // $('#shoppingCart').toggle();
});

function updateSubTotal()
{
  subtotal = 0
  $(".my-product-total").each(function(i, obj) {
    itemTotal = parseInt($(obj).text().replace("₹",""))
    subtotal += itemTotal
  })
  $(".sub_total_amount").text('₹'+subtotal)
}

$(document).on('click', '.removeItem', function(){
    itemCount --;
    $('#itemCount').html(itemCount);
    id=$(this).parent().data('id')
    delete cartItems[id]
    $(this).parent().closest('tr').remove()
    productIds.splice( $.inArray(id, productIds), 1 );
    $('#cart').trigger('click')

    updateSubTotal()
    if (itemCount === 0) {
      $('#itemCount').html('').css('display', 'none');
      $('#shoppingCart').css('display', 'none');
    }
});

$(document).on("input", ".my-product-quantity", function(){
    if ($(this).val() <= 0) {
      $(this).val(1)
    }

    id=$(this).data('id')
    cartItems[id]['quantity'] = $(this).val()
    var price=$(this).parent().parent().data('price')
    $(this).parent().parent().closest("tr").find(".my-product-total").text('₹'+price*$(this).val())
    updateSubTotal()
})


$(document).on("click", ".checkoutBtn", function() {
  items = []
  $.each(cartItems, function ( index, value) {
    if (typeof value != 'undefined') {
      items.push(value)
    }
  })

  $("#array_product").val(JSON.stringify(items))
  $("#checkoutModal").modal('hide');
  $("#customerModal").modal('show')
})


$('#createOrderFrm').validate({
    ignore:[],
    rules: {
        customer_first_name: {
            required: true,
            minlength:2,
            maxlength:50
        },
        customer_last_name : {
            required: true,
            minlength:2,
            maxlength:50
        },
        customer_contactNo:{
            required: true,
            minlength:10,
            maxlength:10
        },
        customer_email:{
            required:true,
            email:true,
            minlength:8,
            maxlength:200
        },
        address:{
          required:true,
          minlength:10,
          maxlength:1000
        },
        customer_city:{
          required:true,
          minlength:2,
          maxlength:50
        },
        customer_state:{
          required:true,
          minlength:2,
          maxlength:50
        },
        customer_zip:{
          required:true,
          minlength:2,
          maxlength:6
        }

    },
    messages: {
        "customer_first_name": {
            required: "Please enter first name.",
        },
        "customer_last_name" : {
            required: "Please enter last name"
        },
        customer_contactNo:{
            required:"Please enter contact number"
        },
        customer_email:{
            required:"Please enter email"
        },
        address:{
          required:"Please enter email"
        },
        customer_city:{
          required:"Please enter city name"
        },
        customer_state:{
          required:"Please enter state name"
        },
        customer_zip:{
          required:"Please enter zip code"
        }
    },
    errorPlacement: function (error, element) {
        // error.insertAfter(element.attr("name"));
        if (element.attr("name") == "file_name") {
            error.appendTo(element.parent());
        }else if (element.attr("name") == "description") {
            error.appendTo(element.parent());
        }else{
            error.insertAfter(element);
        }
    },
    submitHandler: function (form) {
        $.ajax({
            url: form.action,
            type: form.method,
            data: $(form).serialize(),
            dataType: "json",

        beforeSend : function() {
        },
        success: function(data) {
            if(data.code == '0'){
                itemCount = 0
                cartItems = []
                $('#cart').trigger('click')
                $('#itemCount').html(itemCount).css('display', 'block');
                toastr.success(data.msg)
                $("#customerModal").modal('hide')
            }else{
                toastr.error(data.msg)
            }
        }

        });
    }
});









