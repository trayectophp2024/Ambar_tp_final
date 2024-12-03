<?php

 class Autenticacion{

    /* Verifica las credenciales del usuario y de ser correcto guarda los datos en una sesion */

    public function log_in(string $usuario, string $password){

        //Instanciar la clase usuario con el metodo
        $datosUsuario = (new Usuario())->usuario_x_username($usuario);

        //Comprobaciones si el usuario existe, comprobar si la contraseña es corecta

        if ($datosUsuario) {
           if (password_verify($password, $datosUsuario->getPassword() )) {
            $datosLogin['username'] = $datosUsuario->getNombre_usuario();
            $datosLogin['id'] = $datosUsuario->getId();
            $_SESSION['loggedIn'] = $datosLogin;
            return TRUE;
           }else {
            (new Alerta())->add_alerta("danger", "El password ingresado no es correcto");
            return FALSE;
           }
        }else{
            (new Alerta())->add_alerta("warning", "El usuario ingresado no existe en la base de datos");
            return FALSE;
        }
    
    }
     //Metodo logOut
     public function log_out(){
        if (isset($_SESSION['loggedIn'])) {
           unset($_SESSION['loggedIn']);
        }
     }

     //Verificar si el usuario está loggeado

     public function verify() {
        if (isset($_SESSION['loggedIn'])) {
            return TRUE;
        }else {
            header('Location: index.php?sec=login');
        }
     }
 }


 



?>