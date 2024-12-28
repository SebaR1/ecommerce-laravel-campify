/*

document.addEventListener("DOMContentLoaded", () => {
    const botonesAgregarCarrito = document.querySelectorAll(".btn_Carrito");

    botonesAgregarCarrito.forEach((boton) => {
        boton.addEventListener("click", function (e) {
            e.preventDefault();

            const productoId = this.dataset.productoId;

            fetch("/carrito/agregar", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
                body: JSON.stringify({ producto_id: productoId, cantidad: 1 }),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.mensaje) {
                        alert(data.mensaje);
                        actualizarVistaCarrito(data.carrito);
                    }
                })
                .catch((error) => console.error("Error:", error));
        });
    });
});



function actualizarVistaCarrito(carrito) {
    const contenedorCarrito = document.querySelector("#contenedor-carrito");

    if (contenedorCarrito) {
        contenedorCarrito.innerHTML = "";

        if (Object.keys(carrito).length === 0) {
            const mensajeVacio = document.createElement("div");
            mensajeVacio.textContent = "No hay productos en el carrito.";
            contenedorCarrito.appendChild(mensajeVacio);
        } else {
            Object.values(carrito).forEach((producto) => {
                const item = document.createElement("div");
                item.textContent = `${producto.nombre} - ${producto.cantidad} x $${producto.precio}`;
                contenedorCarrito.appendChild(item);
            });
        }
    }
}

$(".btn-eliminar").on("click", function (e) {
    e.preventDefault();

    const productoId = $(this).data("producto-id");
    console.log("Producto ID:", productoId);

    $.ajax({
        url: "/carrito/eliminar",
        method: "DELETE",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: { producto_id: productoId },
        success: function (response) {
            console.log("Respuesta del servidor:", response);
            $(`#producto-${response.producto_id}`).remove();
            alert(response.mensaje);
        },
        error: function (xhr) {
            console.error("Error eliminando producto:", xhr.responseText);
        },
    });
});
*/

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        contentType: "application/json",
    },
});

$(".formAgregarProducto").submit(function (event) {
    event.preventDefault();

    // Obtén el producto ID directamente desde el data attribute del botón
    const productoId = $(this).find("button").data("producto-id");

    console.log(productoId);

    $.ajax({
        url: "carrito/agregar/" + productoId,
        method: "POST",
        data: JSON.stringify({ producto_id: productoId }),
        contentType: "application/json",
        success: function () {
            alert("Producto agregado al carrito");
        },

        error: function (xhr) {
            console.error("Error: ", xhr.responseJSON || xhr.responseText);
            alert(
                "Error al agregar al carrito: " +
                    (xhr.responseJSON?.error || "Error desconocido")
            );
        },
    });
});

// Evento de clic en el botón de eliminar
$(".btn_eliminar").on("click", function (e) {
    e.preventDefault();

    // Obtener el ID del producto desde el atributo data-producto-id
    const productoId = $(this).data("producto-id");
    const filaProducto = $(`#producto-${productoId}`);

    console.log(productoId);
    console.log(filaProducto);

    // Enviar la solicitud AJAX
    $.ajax({
        url: "/carrito/eliminar", // Ruta definida en tus rutas de Laravel
        method: "DELETE",
        data: JSON.stringify({
            producto_id: productoId,
        }),
        contentType: "application/json",
        success: function (response) {
            alert(response.mensaje); // Mostrar mensaje de éxito
            filaProducto.remove(); // Eliminar la fila del producto dinámicamente
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText); // Log para depuración
            alert(
                "Hubo un error al eliminar el producto. Por favor, inténtalo de nuevo."
            );
        },
    });
});

$(".btn_disminuir").on("click", function (e) {
    e.preventDefault();

    // Obtener el ID del producto
    const productoId = $(this).data("producto-id");
    const cantidadContainer = $(this).siblings("p"); // Contenedor donde se muestra la cantidad
    const filaProducto = $(`#producto-${productoId}`); // Fila completa
    const precioProducto = parseFloat(
        filaProducto.find(".precio-producto").text().replace("$", "")
    ); // Obtener precio
    const totalContainer = filaProducto.find(".total-producto"); // Contenedor del total

    // Enviar solicitud AJAX para disminuir cantidad
    $.ajax({
        url: "/carrito/disminuir", // Ruta para disminuir cantidad
        method: "PATCH",
        data: JSON.stringify({
            producto_id: productoId,
        }),
        contentType: "application/json",
        success: function (response) {
            if (response.cantidad > 0) {
                cantidadContainer.text(response.cantidad); // Actualizar cantidad visualmente

                // Recalcular y actualizar el total
                const nuevoTotal = precioProducto * response.cantidad;
                totalContainer.text(`$${nuevoTotal}`);
            } else {
                filaProducto.remove(); // Eliminar fila si cantidad es 0
            }
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText); // Mostrar errores en consola
            alert("Hubo un error al actualizar la cantidad.");
        },
    });
});

//<input type="text" id="miInput" style="display: none;">
