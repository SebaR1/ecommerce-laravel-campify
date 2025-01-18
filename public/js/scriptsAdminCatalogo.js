$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        contentType: "application/json",
    },
});

$(".btn_admin_eliminar").on("click", function (e) {
    e.preventDefault();

    const productoId = $(this).data("producto-id");
    const tarjetaProducto = $(`#productoTarjeta-${productoId}`);

    $.ajax({
        url: "/catalogo/destroy",
        method: "DELETE",
        data: JSON.stringify({
            producto_id: productoId,
        }),
        contentType: "application/json",
        success: function (response) {
            alert(response.mensaje);
            tarjetaProducto.remove();
        },
        error: function (response) {
            alert(response.responseJSON.error); //Error
        },
    });
});
