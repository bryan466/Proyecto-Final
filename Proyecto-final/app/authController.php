<?php 

    if (!isset($_SESSION)) {
        session_start();
    }
    include "connectionBD.php";

    if (isset($_POST['action'])){
        $authController = new authController();

        switch ($_POST['action']) {
            case 'acceder':
                $correo = strip_tags($_POST['correo']);
                $contra = strip_tags($_POST['contra']);
            
                $authController->acceder($correo, $contra);
            break;        
            case 'registrar':
                $nombre = strip_tags($_POST['nombre']);
                $correo = strip_tags($_POST['correo']);
                $contra = strip_tags($_POST['contra']);

                $authController->registrar($nombre, $correo, $contra);
            break;                        
        }
    }

class AuthController
{
    public function registrar($nombre, $correo, $contra){
        $conn = connect();
        if (!$conn->connect_error){
            if($nombre!="" && $correo!="" && $contra!=""){
                $contraOriginal = $contra;
                $contra = sha1($contra.'pelicula');
                $query = "insert into Usuarios (Nombre, Correo, Password) VALUES(?,?,?)";
                $prepared_query = $conn->prepare($query);
                $prepared_query->bind_param('sss', $nombre, $correo, $contra);
                if ($prepared_query->execute()){
                    $this->acceder($correo, $contraOriginal);
                }else{
                    $_SESSION['error'] = 'Verifica si los datos ingresados son correctos';
                    header("Location:".$_SERVER["HTTP_REFERER"]);
                }
            }else{
                $_SESSION['error'] = 'Los datos de inicio de sesion son incorrectos';
                header("Location:".$_SERVER["HTTP_REFERER"]);
            }
        }else{
            $_SESSION['error'] = 'Verifica si los datos de la BD son correctos';
            header("Location:".$_SERVER["HTTP_REFERER"]);
        }
    }

	public function acceder($correo, $contra)
	{
        $conn = connect();
        if (!$conn->connect_error){
            $contra = sha1($contra.'pelicula');
            $query = "select * from Usuarios where Correo = ? and Password = ?";
            $prepared_query = $conn->prepare($query);
            $prepared_query->bind_param('ss', $correo, $contra);
            if ($prepared_query->execute()){
                $results = $prepared_query->get_result();
                $usuario = $results->fetch_all(MYSQLI_ASSOC);
                if(count($usuario)){
                    $_SESSION['id'] = $user[0]['id'];
                    $_SESSION['nombre'] = $user[0]['Nombre'];
                    $_SESSION['correo'] = $user[0]['Correo'];
                    $_SESSION['role'] = $user[0]['roles'];
                    if ($_SESSION['role']=="admin") {
                        header("Location:"."../admin");
                    }else{
                        header("Location:"."../index.php");
                    }
                }
                else{
                    $_SESSION['error'] = 'Los datos de inicio de sesion son incorrectos';
                    header("Location:".$_SERVER["HTTP_REFERER"]);
                }
            }

        }else{
            $_SESSION['error'] = 'Verifica si los datos de la BD son correctos';
            header("Location:".$_SERVER["HTTP_REFERER"]);
        }
    }
}



?>