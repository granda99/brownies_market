function mostrar() {
    $.ajax({
        type: "POST",
        url: "Modelo/mostrarUsuarios.php",
        success: function(r) {
            $('#tablaDatos').html(r);
        }
    });
}

function mostrarMensajes() {
    $.ajax({
        type: "POST",
        url: "Modelo/mostrarMensajes.php",
        success: function(r) {
            $('#tablaDatos').html(r);
        }
    });
}

function insertMensajes() {

    $.ajax({
        type: "POST",
        url: "Modelo/insertarMensaje.php",
        data: $('#frmMensaje').serialize(),

        success: function(r) {
            console.log(r);
            if (r != 0) {
                $('#frmMensaje')[0].reset();
                mostrarProductos();
                swal("¡Mensaje enviado con éxito!", ":D", "success");
            } else {
                swal("¡Usuario o contraseña no coinciden!", ":(", "error");
            }
        }
    });
    return false;
}

function eliminarDatosMensaje(id) {
    swal({
            title: "¿Estas seguro de eliminar este mensaje?",
            text: "!Eliminado lógico¡",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "Modelo/actualizarMensaje.php",
                    data: "id=" + id,

                    success: function(r) {
                        console.log(r);
                        if (r == 1) {
                            mostrarMensajes()
                            swal("¡Eliminado con éxito!", ":D", "success");
                        } else {
                            swal("¡Error! al eliminar producto", ":(", "error");
                        }
                    }
                });
            }
        });
}

function obtenerDatos(id) {
    $.ajax({
        type: "POST",
        url: "Modelo/obtenerDatoUsuario.php",
        data: "id=" + id,
        success: function(r) {
            r = jQuery.parseJSON(r);
            console.log(r);

            $('#id').val(r['id_usuario']);
            $('#nombreu').val(r['nombre']);
            $('#apellidou').val(r['apellido']);
            $('#correou').val(r['correo']);
            $('#usuariou').val(r['usuario']);
            $('#tipou').val(r['tipo']);
        }
    });
}

function logerUsuario() {
    var session = null;

    var promise = $.ajax({
        type: "POST",
        url: "Modelo/login_modelo.php",
        data: $('#logUsuario').serialize(),

        success: function(r) {
            console.log(r);
            if (r != 0) {
                $('#logUsuario')[0].reset();
                session = r;
            } else {
                swal("¡Usuario o contraseña no coinciden!", ":(", "error");
            }
        }
    });
    promise.then(function() {
        if (session != null) {
            $.ajax({
                type: "POST",
                url: window.location.href = session,
                success: function(r) {
                    console.log(r);
                }
            });
        }
    });

    return false;
}

function closeSession() {
    $.ajax({
        type: "POST",
        url: "Modelo/logout_modelo.php",

        success: function(r) {
            console.log(r);
            if (r == 1) {
                window.location.href = "login.php";
            } else {
                swal("¡Error! NO SE PUEDE CERRAR SESION", ":(", "error");
            }
        }
    });
}

function insertarDatos() {

    if (validarPassword()) {
        $.ajax({
            type: "POST",
            url: "Modelo/insertarUsuario.php",
            data: $('#frmUsuario').serialize(),

            success: function(r) {
                console.log(r);
                if (r == 1) {
                    mostrar()
                    $('#frmUsuario')[0].reset();
                    swal("¡Agregado con éxito!", ":D", "success");
                } else {
                    swal("¡Error!", ":(", "error");
                }
            }
        });
    }

    return false;
}

function validarPassword() {
    var p1 = document.getElementById("pass1").value;
    var p2 = document.getElementById("pass2").value;

    var espacios = false;
    var cont = 0;

    while (!espacios && (cont < p1.length)) {
        if (p1.charAt(cont) == " ")
            espacios = true;
        cont++;
    }
    if (espacios) {
        alert("La contraseña no puede contener espacios en blanco");
        return false;
    }
    if (p1.length == 0 || p2.length == 0) {
        alert("Los campos de la password no pueden quedar vacios");
        return false;
    }
    if (p1 != p2) {
        alert("Las passwords deben de coincidir");
        return false;
    }
    if (p1.length < 8 && p2.length < 8) {
        alert("Las passwords deben tener al menos 8 caracteres");
        return false;
    }

    return true;
}

function actualizarDatos() {

    $.ajax({
        type: "POST",
        url: "Modelo/actualizarDatUsuarios.php",
        data: $('#frminsertu').serialize(),
        success: function(r) {
            console.log(r);
            if (r == 1) {
                mostrar();
                swal("¡Actualizado con éxito!", ":D", "success");
            } else {
                swal("¡Error! al actualizar datos", ":(", "error");
            }
        }
    });

    return false;
}

function insertarPedido() {
    var promise = $.ajax({
        type: "POST",
        url: "Modelo/insertarFactura.php",
        data: $('#frmPedido').serialize(),

        success: function(r) {
            console.log(r);
            if (r > 0) {
                $('#id_factura').val(r);
            } else {
                swal("¡Error! al guardar factura", ":(", "error");
            }
        }
    });
    promise.then(function() {
        $.ajax({
            type: "POST",
            url: "Modelo/insertarPedido.php",
            data: $('#frmPedido').serialize(),

            success: function(r) {
                console.log(r);
                if (r == 1) {
                    generarDetalle()
                } else {
                    swal("¡Error! al guardad pedido", ":(", "error");
                }
            }
        });
    });

    return false;
}

function eliminarDatosUsuario(id) {
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
                    url: "Modelo/eliminarDatosUsuario.php",
                    data: "id=" + id,

                    success: function(r) {
                        console.log(r);
                        if (r == 1) {
                            mostrar()
                            swal("¡Eliminado con éxito!", ":D", "success");
                        } else {
                            swal("¡Error! al eliminar producto", ":(", "error");
                        }
                    }
                });
            }
        });
}

function generarDetalle() {
    $.ajax({
        type: "POST",
        url: "Modelo/insertarDetalle.php",
        data: $('#frmPedido').serialize(),

        success: function(r) {
            console.log(r);
            if (r == 1) {
                $('#frmPedido')[0].reset();
                swal("¡Compra exitosa!", ":D", "success");
            } else {
                swal("¡Error! al guardad pedido", ":(", "error");
            }
        }
    });

    return false;
}