<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\MailController;
use App\Models\UsuariosModel;
use DateTime;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeAdmin
 *
 * @author Mr-Robot_-
 */
class Home extends BaseController {

    public function index() {
        return view('admin/login', array('title' => '..:: Login Renta Autos ::..'));
    }

    //---------------------------------------------
    /*     * ****REDIRECCIONES START*** */
    /*
     * REDIRECION A DASHBOARD
     */
    public function dashboard() {
        session_start();
        if (isset($_SESSION['LOG_ADMIN'])) {
            $plantilla = view('admin/plantilla/headerAdmin', array('title' => '..:: Admin Renta Autos ::..'))
                    . view('admin/plantilla/menuAdmin')
                    . view('admin/plantilla/bodyAdmin')
                    . view('admin/contenedores/principalContainer')
                    . view('admin/plantilla/footerAdmin');
        } else {
            $plantilla = view('admin/login', array('title' => '..:: Login Renta Autos ::..'));
        }

        return $plantilla;
    }

    /*
     * REDIRECCION A PAGINA 1 EJEMPLO
     */

    public function pagina1() {
        return view('admin/contenedores/pagina1');
    }

    /*     * ****REDIRECCIONES END**** */

    //---------------------------------------------
    /*     * ****FUNCIONES DE PROCESO START ** */
    /*
     * FUNC PROCESOS ENVIO DE VARIABLES A LA VISTA
     */
    public function holaMundo() {
        $response = [];
        try {
            $response = [
                "code" => "1",
                "message" => "Transacción existosa",
                "hola" => "funcion inicial llamada en  la vista del admin",
                "hola2" => "funcion inicial llamada en  la vista del admin"
            ];
        } catch (Exception $e) {
            $response = [
                "code" => "0",
                "message" => "Error generado (" . $e . ")"
            ];
        }
        echo json_encode($response);
    }

    /*
     * FUNC VALIDA CREDENCIALES
     */

    public function validarCredenciales() {
        $response = [];
        try {
            if (isset($_POST['usuario']) || isset($_POST['clave'])) {
                $correo = $_POST['usuario'];
                $clave = $_POST['clave'];
                $usuarioModel = new UsuariosModel($db);

                $usuario = $usuarioModel->where('correo_electronico', $correo)
                        ->where('clave', $clave)
                        ->first();

                if (!is_null($usuario)) {
                    if ($usuario['estado'] == "A") {
                        $data = [
                            "usuario" => $usuario['id_usuario'],
                            "correo" => $usuario['correo_electronico'],
                            "f_inc_sesion" => new DateTime('now'),
                            "nombres" => $usuario['nombres'],
                            "apellidos" => $usuario['apellidos']
                        ];
                        $this->crearSesion($data);
                        $response = [
                            "code" => "1",
                            "message" => "Credenciales correctas",
                            "url" => base_url() . "/Admin/home/dashboard"
                        ];
                    } else {
                        $response = [
                            "code" => "0",
                            "message" => "Usuario inactivo, por favor contactar con el servicio al cliente",
                            "url" => ""
                        ];
                    }
                } else {
                    $response = [
                        "code" => "0",
                        "message" => "Credenciales incorrectas",
                        "url" => ""
                    ];
                }
            } else {
                $response = [
                    "code" => "0",
                    "message" => "Credenciales incorrectas, debe ingresar usuario y clave",
                    "url" => ""
                ];
            }
        } catch (Exception $e) {
            $response = [
                "code" => "0",
                "message" => "Credenciales incorrectas (" . $e . ")",
                "url" => ""
            ];
        }
        echo json_encode($response);
    }

    /*     * ****FUNCIONES DE PROCESO END ** */

    //--------------------------
    /*     * ***FUNCION DE SESION Y RECUPERACION DE DATOS START*** */
    /*
     * FUNC CREA SESION
     */
    private function crearSesion($data) {
        try {
            session_start();
            $_SESSION['LOG_ADMIN'] = $data;
            $mail = new MailController();
            $mail->enviarEmail($data);
            return true;
        } catch (Exception $ex) {
            return false;
        }
    }

    /*     * ***FUNCION DE SESION Y RECUPERACION DE DATOS END*** */
}
