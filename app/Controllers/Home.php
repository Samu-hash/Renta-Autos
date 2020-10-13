<?php

namespace App\Controllers;

use App\Controllers\BaseController;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeCliente
 *
 * @author Mr-Robot_-
 */
class Home extends BaseController {

    public function index() {
        $plantilla = view('cliente/plantilla/headerCliente', array('title' => '..:: Renta Autos ::..'))
                . view('cliente/plantilla/menuCliente')
                . view('cliente/plantilla/slider')
                . view('cliente/plantilla/bodyCliente')
                . view('cliente/plantilla/footerCliente');
        return $plantilla;
    }

    public function sliderPaginaPrincipal() {
        return view('cliente/contenedores/contenedorSlider/principalSliderContent');
    }

    public function bodyPaginaPrincipal() {
        return view('cliente/contenedores/contenedorBody/principalBodyContent');
    }

}
