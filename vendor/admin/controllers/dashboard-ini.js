import AjaxControl from '../../controlGnrl/AjaxControl.js';
import Loading from '../../controlGnrl/Loading.js';
import SweetAlert from '../../controlGnrl/SweetAlert.js';
import dashboardMenu from './dashboard-menu.js';


//FUNCION INICIAL PARA PRECARGAR COMPONENTES 
let funcInitial = () => {
    Loading.showLoading("Cargando preferencias, favor espere...", () => {
        dashboardMenu();
        recuperacionDataSesion();
        Loading.hideLoading();
    });
}

let recuperacionDataSesion = () => {
    AjaxControl.postJSON({
        "url": "/Admin/Home/recuperarDatosSesion",
        "function": (response) => {
            $("#usernameLog").text(response.correo);
        }
    });
}

$(document).ready(funcInitial());