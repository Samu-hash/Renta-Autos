import AjaxControl from '../../controlGnrl/AjaxControl.js';
import Loading from '../../controlGnrl/Loading.js';
import SweetAlert from '../../controlGnrl/SweetAlert.js';
import VistaPagina1 from '../clasesControl/pagina1LLamada.js';

let dashboardMenu = () => {

    /*****START BTN MENU LATERAL****/
    $("#menu-lat-ingreso-autos").click((e) => {
        ingresoAutos();
    });
    /*****END BTN MENU LATERAL****/

    /*****START BTN MENU CENTRAL****/

    /*****END BTN MENU CENTRAL****/

    /**BTN CERRAR SESION **/

    $("#btnCerrarSesion").click((e) => {
        e.preventDefault();
        cerrarSesion();
    })

    let ingresoAutos = () => {
        Loading.showLoading("Cargando..", () => {
            $("#containerCard").load($("body").data().baseurl + "/Admin/Home/pagina1", () => {
                VistaPagina1();
                Loading.hideLoading();
            });
        });
    }

    let cerrarSesion = () => {
        Loading.showLoading("Cargando..", () => {
            AjaxControl.postJSON({
                "url": "/Admin/Home/cerrarSesion",
                "function": (response) => {
                    Loading.hideLoading();
                    $(location).attr('href', response.url);
                }
            });
        });
    }
}
export default dashboardMenu;