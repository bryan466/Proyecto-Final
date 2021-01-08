<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.1">
    <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.13'/>
    <title>iniciar sesion</title>
</head>
<body>
<div id="Contenerdoregistro">
    <div class="fonfp">
<img src="img/fon2.jpg"   height= "680px" width="1380px" > </div>
<div class="header3">
                <div class="logo">
                        <img src="img/icon (1).png"  height="45px">  
                </div>
                    
                    <div class="name"> <a  style="color:rgb(8, 123, 165)" href="#">Peliculas Bj</a></div>
                    
                        <nav>
                            <ul id="menu">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="">Generos</a>
                                <ul>
                                    <li><a href="">Aventura</a></li>
                                    <li><a href="">Animacion</a></li>
                                    <li><a href="">Comedia</a></li>
                                    <li><a href="">Ciencia ficcion</a></li>
                                    <li><a href="">Drama</a></li>
                                    <li><a href="">Terror</a></li>
                                    <li><a href="">Drama</a></li>
                                </ul>  
                            </li>
                            <li><a href="">Estrenos</a></li>
                            <li><a href="login.php" >Inciar sesion</a></li>
                            <li><a href="registrarse.php">Registrarte</a></li>
                            </ul>
                        </nav>
        </div>

                    <div class="ContentForm3">
                    <label class="etq2">Registrarse</label>
                    <br>
                        <form action="app/authController.php" method="post" name="FormEntrar">
                                <br>
                                <div class="form-a">
                                <span class="titulo3" id="addon2">Nombre: </span>
                                <input type="text" class="form-control3" name="nombre" placeholder="Nombre" id="Correo" aria-describedby="sizing-addon1" required>
                                </div>
                                <br>
                                <div class="form-b">
                                <span class="titulo8" id="addon7">Correo: </span>
                                <input type="email" class="form-control8" name="correo" placeholder="Correo" id="Correo" aria-describedby="sizing-addon1" required>
                                </div>
                                <br>
                                <div class="form-c">
                                <span class="titulo9" id="addon8">Contraseña : </span>
                                <input type="password" name="contra" class="form-control29" placeholder="******" aria-describedby="sizing-addon1" required>
                                </div>
                                <br>
                                <br>
                                <button class="btn-in2" id="Ingreso" type="submit">Registrar datos</button>
                                <input type="hidden" name="action" value="registrar">
                                <br>
                                
                        </form>
                    </div>


</div>

</body>
</html>



