<!DOCTYPE html>
<html>
<head>
	<title>
            Peliculas Bj
	</title>
    <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.10'/>
    <script>
    /**
     * Array con las imagenes y enlaces que se iran mostrando en la web
     */
    var imagenes=new Array(
        ['img/1.jpg','http://www.lawebdelprogramador.com/cursos/'],
        ['img/2.jpg','http://www.lawebdelprogramador.com/foros/'],
        ['img/3.jpg','http://www.lawebdelprogramador.com/pdf/'],
        ['img/4.jpg','http://www.lawebdelprogramador.com/utilidades/']
    );
    var contador=0;
 
    /**
     * Funcion para cambiar la imagen y link
     */
    function rotarImagenes()
    {
        // cambiamos la imagen y la url
        contador++
        document.getElementById("imagen").src=imagenes[contador%imagenes.length][0];
        document.getElementById("link").href=imagenes[contador%imagenes.length][1];
    }
 
    /**
     * Función que se ejecuta una vez cargada la página
     */
    onload=function()
    {
        // Cargamos una imagen aleatoria
        rotarImagenes();
 
        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes,5000);
    }
</script>
</head>
<body>
    <div class="contenedor">
        <div class="header">
                <div class="logo">
                        <img src="img/icon (1).png"  height="45px">  
                    </div>
                    
                    <div class="name"> <a  style="color:rgb(8, 123, 165)" href="#">Peliculas Bj</a></div>
                    
                        <nav>
                            <ul id="menu">
                            <li><a href="">Inicio</a></li>
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
                            <li><a href="">Inciar sesion</a></li>
                            <li><a href="">Registrarte</a></li>
                            </ul>
                        </nav>
                
        </div>

        <div class="slider">
                <div class="random">
                    <img src="img/ghost4.jpg"   height= "600px" width="1350px" >  
                
                    <div class="inimg1">
                    <img src="img/380x570.jpg"   height= "390px" width="290px" >
                    </div>
                    <div class="titulo1">
                    <h2><strong>El Halloween de Hubbie</strong></h2>
                    </div>
                    <div class="descripcion1">
                    <p>
                    Hubie Dubois, un hombre muy miedica residente en Salem<br>
                    que deberá armarse de valor en la noche de Halloween <br>
                    para poder proteger su ciudad de una terrible maldición<br>
                    que empieza a afectar a los lugareños.<br>
                    </p>
                    </div>
                    <button class="ver" onclick="location.href='https://repelis.io/pelicula/hubie-halloween-mKSmnv'">  VER PELICULA </button>
                    <button class="ver2" > VER TRAILER</button>
                </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="slider2">
                <div class="random2">
                      <label class="estrenos">Peliculas destacadas</label>
                    <br>
                    <br>
                      <table class="tab">
                            <tr>
                                <td>
                                    <div class="imgnom1">
                                        <img src="img/losguardianes.jpg"   height= "300px" width="210px" >
                                    </div>
                  
                                    <div class= "nompeli">    
                                        <label>El vieja  guardia</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="imgnom2">
                                        <img src="img/newmutans.jpg"   height= "300px" width="210px" >
                                    </div>
                  
                                    <div class= "nompeli2">    
                                        <label>Nuevos mutates</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="imgnom3">
                                        <img src="img/bajomar.jpg"   height= "300px" width="210px" >
                                    </div>
                  
                                    <div class= "nompeli3">    
                                        <label>Greyhound: Enemigos bajo el mar</label>
                                    </div>
                                </td>
                              
                                <td>
                                    <div class="imgnom4">
                                        <img src="img/ava.jpg"   height= "300px" width="210px" >
                                    </div>
                  
                                    <div class= "nompeli4">    
                                        <label>Ava</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="imgnom5">
                                        <img src="img/bill&ted.jpg"   height= "300px" width="210px" >
                                    </div>
                  
                                    <div class= "nompeli5">    
                                        <label> Bill & Ted Face the Music</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                </div>
    
        </div>
        <br>
        <br>
        <br>
        <dic class="movie">
            <div class="movies">
                    <label class="recientes">Péliculas estrenadas recientemente</label>
                        <br>
                        <br>
                        <table class="tab2">
                            <tr>
                                <td>
                                    <div class="view1">
                                        <img src="img/dark.jpg"   height= "250px" width="172px" >
                                    </div>
                    
                                    <div class= "nomview1">    
                                        <label>The Dark and the Wicked</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="view2">
                                        <img src="img/alone.jpg"    height= "250px" width="172px" >
                                    </div>
                    
                                    <div class= "nomview2">    
                                        <label>Alone</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="view3">
                                        <img src="img/amigas.jpg"    height= "250px" width="172px" >
                                    </div>
                    
                                    <div class= "nomview3">    
                                        <label>Friendsgiving</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="view4">
                                        <img src="img/elcadaver.jpg"   height= "250px" width="172px" >
                                    </div>
                    
                                    <div class= "nomview4">    
                                        <label>El cadaver</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="view5">
                                        <img src="img/DB_broly.jpg"  height= "250px" width="172px" >
                                    </div>
                    
                                    <div class= "nomview5">    
                                        <label>Dragon Ball Super: Broly</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="view6">
                                        <img src="img/freddy-mercurio.jpg"    height= "250px" width="172px" >
                                    </div>
                    
                                    <div class= "nomview6">    
                                        <label>Bohemian Rhapsody</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>

                                <td>
                                    <div class="view7">
                                        <img src="img/monster.jpg"   height= "250px" width="172px" >
                                    </div>
                    
                                    <div class= "nomview7">    
                                        <label>Love and Monsters</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="view8">
                                        <img src="img/sos.jpg"   height= "200px" width="132px" >
                                    </div>
                    
                                    <div class= "nomview8">    
                                        <label>S.O.S. Survive or Sacrifice</label>
                                    </div>
                                </td>

                            </tr>




                           
                        </table>
            </div>
</div>














    </div>
</body>
</html>