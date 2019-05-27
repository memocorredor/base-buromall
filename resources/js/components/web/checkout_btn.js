$(function () {
    //btn-detail-add-product-cart
    //field-form-quantity
    //id_data
    $('#btn-detail-add-product-cart').click(function () {
        alert('hoal');

        var id_prod = document.getElementById("id_data").value;
        var cant_prod = document.getElementById("field-form-quantity").value;
        $.ajax({
            /* the route pointing to the post function */
            url: '/add-to-cart',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: { id_prod: id_prod, cant_prod: cant_prod },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) {
                toastr.success("Producto agregado al carrito");
            }
        });

    });

});
