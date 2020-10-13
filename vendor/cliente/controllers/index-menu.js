import AjaxControl from '../../controlGnrl/AjaxControl.js';
import Loading from '../../controlGnrl/Loading.js';
import SweetAlert from  '../../controlGnrl/SweetAlert.js';

let indexMenu = () => {
    cargaInicial();
}
let cargaInicial = () => {
    $("#contentSlider").load($("body").data().baseurl + "/Home/sliderPaginaPrincipal", () => {
        $("#bodyContentAll").load($("body").data().baseurl + "/Home/bodyPaginaPrincipal");
        Loading.hideLoading();
    });
}
export default indexMenu;