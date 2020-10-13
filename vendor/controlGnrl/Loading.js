//<![CDATA[
class Loading {
    constructor() {
    }

    static _creteLoading(txt) {
        let body = $("body");

        if (txt === null || txt === "") {
            txt = "Cargando, espere un momento...";
        }
        const html = '<div id="loading" style="opacity: 0;">'
                + ' <div class="loading-box" >'
                + '     <div class="loading-content">'
                + '         <img src="' + body.data().baseurl + '/images/generales/preloader.gif" alt="Cargando">'
                + '         <p>' + txt + '</p>'
                + '     </div>'
                + ' </div>'
                + '</div > ';
        body.append(html);
    }

    static _deleteLoading() {
        $("#loading").remove();
    }

    static showLoading(txt = null, funcOK) {
        this._creteLoading(txt);
        $("#loading").animate({"opacity": "1"}, 500, () => {
            if (funcOK != null) {
                funcOK();
            }
        });
        $("body").css("overflow", "hidden");
    }

    static hideLoading() {
        $("#loading").animate({
            opacity: 0
        }, 500, () => {
            $("body").css("overflow", "auto");
            Loading._deleteLoading();
        });
    }
}
export default Loading;
//>]]