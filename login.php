<?php
   include_once "app.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.21'/>
    <title>iniciar sesion</title>
</head>
<body>
    <div id="Contenerdorlogin">
            <div class="fonfp"> <img src="img/fon2.jpg"   height= "680px" width="1380px" > </div>
                    <div class="header2">
                        <div class="logo">
                                <img src="img/icon (1).png"  height="45px">  
                        </div>
                            
                            <div class="name"> <a  style="color:rgb(8, 123, 165)" href="#">Peliculas Bj</a></div>
                            
                            <div class="menu-index">
                                    <ul id="menu">
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="">Generos</a></li>
                                    <li><a href="login.php" >Inciar sesion</a></li>
                                    <li><a href= "registrarse.php" >Registrarte</a></li>
                                    <li><a href="administrador.php">administrador</a></li>
                                    </ul>
                            </div>
                    </div>

            <div class="ContentForm">
                <label class="etq">Iniciar sesion</label>
                    <br>

                    <div class="img--agregar-perfil"> <form>
                    <input type="image" src="img/perfil-personal.png" width="150" height="150"> </form> </div>


                        <form action="app/authController.php" method="post" >
                            <br>
                                <div class="form-a">
                                <span class="title_correo" id="addon1">Correo : </span>
                                <input type="email" class="form-control" name="Correo" placeholder="Correo" id="Correo" aria-describedby="sizing-addon1" required>
                                </div>
                              


                                <div class="form-b">
                                <span class="titulo2" id="addon2">Contraseña : </span>
                                <input type="password" name="Password" class="form-control2" placeholder="******" aria-describedby="sizing-addon1" required>
                                </div>
                               <br>
                               
                                <button class="btn-in" id="Ingreso" type="submit">Entrar</button>
                        
                                <br>
                                
                                <div class="btn-sa"><a href="">Olvidaste tu contraseña?</a> </div>
                        </form>
            </div>


</div>

</body>
</html>



