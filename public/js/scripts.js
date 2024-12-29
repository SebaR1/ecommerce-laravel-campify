$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        contentType: "application/json",
    },
});

$(".formAgregarProducto").submit(function (event) {
    event.preventDefault();

    const productoId = $(this).find("button").data("producto-id");

    console.log(productoId);

    $.ajax({
        url: "carrito/agregar/" + productoId,
        method: "POST",
        data: JSON.stringify({ producto_id: productoId }),
        success: function () {
            alert("Producto agregado al carrito");
        },
        error: function () {
            alert("Hubo un error.");
        },
    });
});

$(".btn_eliminar").on("click", function (e) {
    e.preventDefault();

    const productoId = $(this).data("producto-id");
    const filaProducto = $(`#producto-${productoId}`);

    $.ajax({
        url: "/carrito/eliminar",
        method: "DELETE",
        data: JSON.stringify({
            producto_id: productoId,
        }),
        contentType: "application/json",
        success: function (response) {
            alert(response.mensaje);
            filaProducto.remove();
        },
        error: function (response) {
            alert(response.error);
        },
    });
});

$(".btn_disminuir").on("click", function (e) {
    e.preventDefault();

    const productoId = $(this).data("producto-id");
    const cantidadContainer = $(this).siblings("p");
    const filaProducto = $(`#producto-${productoId}`);
    const precioProducto = parseInt(
        filaProducto.find(".precio-producto").text().replace("$", "")
    );
    const totalContainer = filaProducto.find(".total-producto");

    $.ajax({
        url: "/carrito/disminuir",
        method: "PATCH",
        data: JSON.stringify({
            producto_id: productoId,
        }),
        contentType: "application/json",
        success: function (response) {
            if (response.cantidad > 0) {
                cantidadContainer.text(response.cantidad);

                const nuevoTotal = precioProducto * response.cantidad;
                totalContainer.text(`$${nuevoTotal}`);
            } else {
                filaProducto.remove();
            }
        },
        error: function () {
            alert("Hubo un error al actualizar la cantidad.");
        },
    });
});
