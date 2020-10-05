function mostrarProductos() {
    $.ajax({
        type: "POST",
        url: "Modelo/mostrarDatosProducto.php",
        success: function(r) {

            $('#tablaDatos').html(r);
        }
    });
}

function insertarDatosProductos() {
    console.log("insertar");
    $.ajax({
        type: "POST",
        url: "Modelo/insertarDatosProducto.php",
        data: $('#frminsert').serialize(),

        success: function(r) {
            console.log(r);
            if (r == 1) {
                $('#frminsert')[0].reset();
                mostmostrarProductosrar();
                swal("¡Agregado con éxito!", ":D", "success");
            } else {
                swal("¡Error!", ":(", "error");
            }
        }
    });

    return false;
}

function obtenerDatosProducto(id) {
    $.ajax({
        type: "POST",
        url: "Modelo/obtenerDatosProducto.php",
        data: "id=" + id,
        success: function(r) {
            r = jQuery.parseJSON(r);

            $('#id').val(r['id_producto']);
            $('#nombreu').val(r['nombre']);
            $('#descripcionu').val(r['descripcion']);
            $('#imagenu').val(r['imagen']);
            $('#preciou').val(r['precio']);
            $('#stocku').val(r['stock']);
        }
    });
}

function actualizarDatosProducto() {
    $.ajax({
        type: "POST",
        url: "Modelo/actualizarDatosProducto.php",
        data: $('#frminsertu').serialize(),
        success: function(r) {
            console.log(r);
            if (r == 1) {
                mostrarProductos();
                swal("¡Actualizado con éxito!", ":D", "success");
            } else {
                swal("¡Error!", ":(", "error");
            }
        }
    });

    return false;
}

function eliminarDatosProducto(id) {
    swal({
            title: "¿Estas seguro de eliminar este registro?",
            text: "!Eliminado lógico¡",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "Modelo/eliminarDatosProducto.php",
                    data: "id=" + id,

                    success: function(r) {
                        console.log(r);
                        if (r == 1) {
                            $('#frminsert')[0].reset();
                            mostrarProductos();
                            swal("¡Eliminado con éxito!", ":D", "success");
                        } else {
                            swal("¡Error! al eliminar producto", ":(", "error");
                        }
                    }
                });
            }
        });
}