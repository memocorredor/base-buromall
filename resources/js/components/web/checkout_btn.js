$(function () {
    //btn-detail-add-product-cart
    //field-form-quantity
    //id_data
    $('#btn-detail-add-product-cart').click(function () {
        var type_item = document.getElementById("type_item").value;;
        var id_prod = document.getElementById("id_data").value;
        var cant_prod = document.getElementById("field-form-quantity").value;

        $.ajax({
            /* the route pointing to the post function */
            url: '/add-to-cart',
            type: 'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            /* send the csrf-token and the input to the controller */
            data: { type_item: type_item, id_prod: id_prod, cant_prod: cant_prod },
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) {
                toastr.success("Producto agregado al carrito");
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });

    });

});
