// Obtener todos los contenedores de productos
const contenedoresProductos = document.getElementsByClassName('contenedor-productos');

// Recorrer los contenedores de productos
Array.from(contenedoresProductos).forEach(contenedor => {
    // Obtener todos los botones de compra dentro del contenedor
    const botonesCompra = contenedor.getElementsByClassName('btnComprar');

    // Agregar evento de clic a cada botón de compra
    Array.from(botonesCompra).forEach(boton => {
        boton.addEventListener('click', function () {
            // Obtener el nombre del producto y su precio
            const nombreProducto = this.getAttribute('data-nombre');
            const precioProducto = this.getAttribute('data-precio');

            // Mostrar el mensaje de confirmación con SweetAlert
            Swal.fire({
                title: `<span class="swal-custom-title">¿Deseas comprar ${nombreProducto} por $${precioProducto} pesos?</span>`,
                showCancelButton: true,
                confirmButtonText: 'Comprar',
                cancelButtonText: 'Cancelar',
                icon: 'question',
                customClass: {
                    popup: 'swal-custom-popup',
                    confirmButton: 'swal-custom-button',
                    cancelButton: 'swal-custom-button'
                },
                buttonsStyling: false,
                confirmButtonClass: 'swal-custom-confirm-button',
                cancelButtonClass: 'swal-custom-cancel-button'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Construir la URL de redirección con los parámetros
                    const urlRedireccion = `Compras.php?producto=${encodeURIComponent(nombreProducto)}&precio=${encodeURIComponent(precioProducto)}`;

                    // Redireccionar a la página de compras
                    window.location.href = urlRedireccion;
                }
            });
        });
    });
});
