<!DOCTYPE html>
<html>
    <head>
        <title>
                Peliculas Bj
        </title>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.81'/>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

    </head>
    <body>
       <div class="fondo-peliculas">
            <div class="menu-lateral lateral--peliculas">
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

                    <div class="container-peliculas">
                                <h2 class="titulo--peliculas">Registrar Peliculas</h2>
                            <form action ="app/insertar-peliculas.php" method="post" class="container__form2">
                                <br>
                                <label for="" class="container__id--peliculas">Id</label>
                                <input name ="Id" type="text" class="container__input--id">
                                <br>
                                <br>
                                <label for="" class="container__nombre--peliculas">Nombre</label>
                                <input name ="Nombre" type="text" class="container__input--name"> 
                                <br><br>
                                <label for="" class="container__desk--peliculas">Descripcion</label>
                                <input  name ="Descripcion" type="text" class="container__input--desk"> 
                                <br><br>
                                <label for="" class="container__cover--peliculas">Cover</label>
                                <input  name ="Cover" type="text" class="container__input--cover"> 
                                <br><br>
                                <label for="" class="container__minute--peliculas">Minutos</label>
                                <input name ="Minutos" type="text" class="container__input--minute"> 
                                <br><br>
                                <label for="" class="container__clasf--peliculas">Clasificacion</label>
                                <input name ="Clasificacion" type="text" class="container__input--clasf"> 
                                <br><br>
                                <label for="" class="container__cate--peliculas">Categorias</label>
                                <input name ="Categorias" type="text" class="container__input--cate"> 
                                <br><br>
                                <input type="submit" class="container__submit--peliculas " value="Registrar">
                            </form>
                    </div>

</div>
    </body>
</html>