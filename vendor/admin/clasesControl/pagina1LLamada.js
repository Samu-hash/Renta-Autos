import AjaxControl from '../../controlGnrl/AjaxControl.js';
import Loading from '../../controlGnrl/Loading.js';
import SweetAlert from '../../controlGnrl/SweetAlert.js';

let vistaPaginaLlamada_Precargar = () => {
    AjaxControl.postJSON({
        "url": "/Admin/Home/holaMundo",
        "function": (response) => {
            $("#llamada1").html(response.hola);
        }
    });
}
export default vistaPaginaLlamada_Precargar;