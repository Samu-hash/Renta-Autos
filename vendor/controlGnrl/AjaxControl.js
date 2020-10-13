//<![CDATA[
class AjaxControl {

    construcotr() {
    }

    static _ajaxHandle(data) {
        let URL = $("body").data().baseurl + data.url;

        let request = $.post(
                URL,
                data.data,
            (response, status, xhr) => {
                data.function(response, status, xhr);
            },
            data.dataType
        );

        request.fail((jqXHR, txtStatus) => {
            data.function({
                message:txtStatus,
                response:0
            }, txtStatus);
        });
    }
    
    static postJSON(data){
        data.dataType = "json";
        this._ajaxHandle(data);
    }
    
    static postHTML(data){
        data.dataType = "html";
        this._ajaxHandle(data);
    }
}

export default AjaxControl;
//]]>