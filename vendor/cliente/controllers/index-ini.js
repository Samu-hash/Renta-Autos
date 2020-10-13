import AjaxControl from '../../controlGnrl/AjaxControl.js';
import Loading from '../../controlGnrl/Loading.js';
import SweetAlert from  '../../controlGnrl/SweetAlert.js';
import indexMenu from './index-menu.js';

let index = () => {
    Loading.showLoading("Cargando preferencias, por favor espere...", () => {
        indexMenu();
        Loading.hideLoading();
    });
}

$(document).ready(index);