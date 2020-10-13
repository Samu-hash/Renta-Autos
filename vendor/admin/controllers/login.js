import AjaxControl from '../../controlGnrl/AjaxControl.js';
import Loading from '../../controlGnrl/Loading.js';
import SweetAlert from '../../controlGnrl/SweetAlert.js';

let login = () => {
    
    validacionesLogin();
    $("#formLoginRentaAuto").submit((e) => {
        e.preventDefault();
        if ($("#formLoginRentaAuto").valid()) {
            Loading.showLoading("Cargando...", () => {
                AjaxControl.postJSON({
                    "url": "/Admin/Home/validarCredenciales",
                    "data": {
                        "usuario": $("#userLogin").val(),
                        "clave": $("#passLogin").val()
                    },
                    "function": (response) => {
                        if (response.code == 1) {
                            window.location.replace(response.url);
                        } else {
                            SweetAlert.showBasicOrConfirmSweet(1, "Error", response.message, "error");
                        }
                    }
                });
                Loading.hideLoading();
            });
        } else {
            SweetAlert.showBasicOrConfirmSweet(0, "Error", "Por favor ingrese valor en los campos requeridos");
        }

    });
}

let validacionesLogin = () => {
    $("#formLoginRentaAuto").validate({
        rules: {
            userLogin: {
                required: true,
                email: true
            },
            passLogin: {
                required: true
            }
        },
        messages: {
            userLogin: {
                required: "Por favor ingrese un correo electronico",
                email: "Por favor ingrese un correo electronico valido"
            },
            passLogin: {
                required: "Por favor ingrese una clave"
            }
        },
        onchange: true,
        errorClass: "error-validation",
        errorElement: "p",
        errorPlacement: (err, ele) => {
            ele.parent().append(err);
        }
    });
}

$(document).ready(login);