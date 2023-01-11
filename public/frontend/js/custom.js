$(document).ready(function () {


    loadcart();

    function loadcart() 
    {
        $.ajax({
            type: "GET",
            url: "/load-cart-data",
            success: function (response) {
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
            }
        });
    }

    $(".addToCart-btn").click(function (e) {
    e.preventDefault();

    var product_id = $(this)
        .closest(".product_data")
        .find(".prod_id")
        .val();
    var product_quantity = $(this)
        .closest(".product_data")
        .find(".quantities")
        .val();

        $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        method: "POST",
        url: "/add-to-cart",
        data: {
            'product_id': product_id,
            'product_quantity' : product_quantity,
        },
        success: function (response){
            swal(response.status);
            loadcart();
        }
    })  
});
    $(".increment-btn").click(function (e) {
    e.preventDefault();
    var inc_value = $(".quantities").val();
    var value = parseInt(inc_value, 10);
    value = isNaN(value) ? 0 : value;
    if (value < 10) {
        value++;
        $(".quantities").val(value);
    }
});

 $(".decrement-btn").click(function (e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    var dec_value = $(".quantities").val();
    var value = parseInt(dec_value, 10);
    value = isNaN(value) ? 0 : value;
    if (value > 1) {
        value--;
        $(".quantities").val(value);
    }
});

$(".delete-cart-item").click(function (e) {
    e.preventDefault();

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    var product_id = $(this)
    .closest(".product_data")
    .find(".prod_id")
    .val();

    $.ajax({
        type: "POST",
        url: "delete-cart-item",
        data: {
            product_id: product_id,
        },
        success: function (response) {
           window.location.reload();
           swal(response.status);
        },
    });
});

$(".changeQuantity").click(function (e) { 
    e.preventDefault();

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    var product_id = $(this).closest(".product_data").find(".prod_id").val();
    var qty = $(this).closest(".product_data").find(".quantities").val();
    data = {
        product_id: product_id,
        product_quantity : qty,
    }

    $.ajax({
        type: "POST",
        url: "update-cart",
        data: data,
        success: function (response) {
            window.location.reload();
            
        }
    });
});




});