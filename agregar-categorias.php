<!DOCTYPE html>
<html>
    <head>
        <title>
                Peliculas Bj
        </title>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.82'/>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

    </head>
    <body>

    
       <div class="fondo-categorias">
       <div class="menu-lateral lateral--categoria">
                        <div class="logo2">
                        <img src="img/icon (1).png"  height="50px">  
                        </div>
                        <br>
                        <div class="name2"> <a   href="#">Peliculas Bj</a></div><br>
                        <div  class="lista-menu">
                            <ul class="lista-menu-1">
                                <strong><li><a href="index.php"  style="color:#FF0000;" >Inicio</a></li></strong><br>
                                <strong><li><a href="peliculas.php"  style="color:#FF0000;">Configurar peliculas</a></li></strong><br>
                                <strong><li><a href="categories.php"  style="color:#FF0000;">Configurar categorias</a></li></strong><br>
                                <strong><li><a href="login.php"  style="color:#FF0000;" >Inciar sesion</a></li></strong><br>
                                <strong><li><a href="graficas.php"  style="color:#FF0000;">Graficas</a></li></strong>
                            </ul>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                </div>

            <div class="container">
                        <h2 class="container__title">Registrar categorias</h2>
                    <form action ="app/insertar.php" method="post" class="container__form">
                        <br>
                        <label for="" class="container__id--cate">id</label>
                        <input name ="id" type="text" class="container__input--id--cate">
                        <br> <br>
                        <label for="" class="container__name--cate">Nombre</label>
                        <input name ="name" type="text" class="container__input--name--cate"> 
                        <br><br>
                        <label for="" class="container__desk--cate">Descripcion</label>
                        <input  name ="description" type="text" class="container__input--desk--cate"> 
                        <br><br>
                        <label for="" class="container__status--cate">Estado</label>
                        <input  name ="status" type="text" class="container__input--status--cate"> 
                        <br><br>
                        <label for="" class="container__fecha--cate">Feccha</label>
                        <input name ="created_at" type="text" class="container__input--fecha--cate"> 
                        <br><br> <br><br>
                        <input type="submit" class="submit--categorias" value="Registrar">
                    </form>
            </div>
        </div>

     