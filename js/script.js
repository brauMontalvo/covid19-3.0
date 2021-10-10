// READ records
function addRecord() {
    // get values
    var id = $("#id").val();
    var nombres = $("#nombres").val();
    var apellidos= $("#apellidos").val();
    var puntaje= $("#puntaje").val();
    var resultado= $("#resultado").val();

    // Add record
    $.post("ajax/addUser.php", {
        id: id,
        nombres: nombres,
        apellidos: apellidos,
        puntaje: puntaje,
        resultado: resultado,
		
    }, function (data, status) {
        // close the popup
        $("#add_new_user_modal").modal("hide");

        // read records again
        readUsuario();

        // clear fields from the popup
        $("#id").val("");
        $("#nombres").val("");
        $("#apellidos").val("");
        $("#puntaje").val("");
        $("#resultado").val("");
        
    });
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/detallesUser.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_id").val(user.id);
            $("#update_nombre").val(user.nombre);
            $("#update_apellidos").val(user.apellidos);
            $("#update_puntaje").val(user.puntaje);
            $("#update_resultado").val(user.resultado);
        }
    );
    // Open modal popup
    $("#actualizar_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var id = $("#update_id").val();
    var nombres = $("#update_nombres").val();
    var apellidos = $("#update_apellidos").val();
    var puntaje = $("#update_puntaje").val();
    var resultado = $("#update_resultado").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/actualizarUsers.php", {
            id: id,
            nombres: nombres,
            apellidos: apellidos,
            puntaje: puntaje,
            resultado: resultado
        },
        function (data, status) {
            // hide modal popup
            $("#actualizar_user_modal").modal("hide");
            // reload Users by using readUsuario();
            readUsuario();
        }
    );
}

function DeleteUser(id) {
    var conf = confirm("¿Está seguro, realmente desea eliminar el registro?");
    if (conf == true) {
        $.post("ajax/borrarUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readUsuario();
            }
        );
    }
}



function readUsuario() {
    $.get("ajax/tablaUsuarios.php", {}, function (data, status) {
        $("#user").html(data);
    });
}

function readResultados() {
    $.get("ajax/tablaResultados.php", {}, function (data, status) {
        $("#result").html(data);
    });
}

function buscarUser() {
    $.get("ajax/buscarUser.php", {}, function (data, status) {
        $("#buscar").html(data);
    });
}

$(document).ready(function () {
    // READ recods on page load
    readUsuario(); // calling function
    readResultados();
    buscarUser();
});