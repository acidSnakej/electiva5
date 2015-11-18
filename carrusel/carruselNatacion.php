<center><h3>Natación</h3></center>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3" class="active"></li>
</ol>
</ol>

<div class="carousel-inner" role="listbox" id="carouselSmall">
    <div class="item active">
        <a  onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Imagen sobre una competencia de natación" data-tittle="Tablero Ajedrez" data-toggle="modal" data-image-id="3" href="#">
            <img  class="img-responsive" src="img/natacion.png" alt="competencia" height="400px" width="100%">                
        </a>

        <div class="carousel-caption">
          ...
        </div>
    </div>
    
    <div class="item">
        <a  onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Una mujer lanzandose a la piscina" data-tittle="Tablero ajedrez1" data-toggle="modal" data-image-id="3" href="#">
            <img class="img-responsive" src="img/natacion1.jpg" alt="piscina" height="400px" width="100%" >
        </a>
    </div>

    <div class="item">
    <a onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Una mujer nadando debajo del agua" data-tittle="Artista Marcial" data-toggle="modal" data-image-id="3" href="#">
            <img class= "img-responsive"  src="img/natacion2.jpg" alt="Nadando debajo del agua"  height="400px" width="100%" >
    </a>
        <div class="carousel-caption">
        </div>

    </div>
    <div class="item">
    <a onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Niños dentro de una piscina" data-tittle="Tablero jugador ajedrez" data-toggle="modal" data-image-id="3" href="#">
        <img onclick="showDetails(this)"  src="img/natacion3.jpg" alt="Niños en una piscina" height="567px" width="100%" >
    </a>
        <div class="carousel-caption">
            ....
        </div>
    </div>
        <?php include("plantillasAcces/accesibilidadCarousel.php"); ?>
</div>
<a class="left carousel-control" data-slide="prev" role="button" href="#carousel-example-generic">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Anterior</span>
</a>
<a class="right carousel-control" data-slide="next" role="button" href="#carousel-example-generic">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Siguiente</span>
</a>

</div>