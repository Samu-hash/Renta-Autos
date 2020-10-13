//<![CDATA[

class SweetAlert {

    static _basicSweet(title, txt, icon, footer, funcOK) {
        if (title == null || title == "")
            title = "";

        if (txt == null || txt == "")
            txt = "Proceso";

        if (icon == null || icon == "")
            icon = "";

        if (footer == null || footer == "")
            footer = "";

        Swal.fire({
            title: title,
            text: txt,
            type: icon,
            footer: footer,
            confirmButtonText: "Cerrar"
        }).then(() => {
            if (funcOK != null) {
                funcOK();
            }
        });
    }

    static _imageSweet(nameImg, width, height, imageAlt) {
        if (nameImg == null || nameImg == "") {
            Swal.fire({
                title: "Error",
                text: "No se puede mostrar la imagen",
                confirmButtonText: "Cerrar"
            });
        } else {
            if (height == null || height == "")
                height = 200;

            if (width == null || width == "")
                width = 400;

            if (imageAlt == null || imageAlt == "")
                imageAlt = "Imagen--";


            Swal.fire({
                imageUrl: $("body").data().baseurl + nameImg,
                imageHeight: height,
                imageAlt: imageAlt,
                confirmButtonText: "Cerrar"
            });
        }
    }

    static _confirmSweet(title, txt, icon, footer, funcOK = null) {
        if (title == null || title == "")
            title = "Confirmación";

        if (txt == null || txt == null)
            txt = "¿Esta seguro de realizar la operación?";

        if (icon == null || icon == "")
            icon = "warning";

        if (footer == null || footer == "")
            footer = "";


        Swal.fire({
            title: title,
            text: txt,
            type: icon,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: "Cancelar",
            confirmButtonText: 'Aceptar',
            footer: footer
        }).then((result) => {
            if (result.isConfirmed) {

                if (funcOK != null)
                    funcOK();

                Swal.fire('Alerta!', 'Proceso realizado con exito.', 'success');
            }
        });
    }

    static showBasicOrConfirmSweet(type = 0, title, descripcion, icon = null, footer, funcOK) {
        switch (type) {
            case 0:
                this._basicSweet(title, descripcion, icon, footer, funcOK);
                break;
            case 1:
                this._confirmSweet(title, descripcion, icon, footer, funcOK);
                break;
            default:
                this._basicSweet(title, descripcion, icon, footer, funcOK);
                break;
        }

    }
}

export default SweetAlert;
//>]]