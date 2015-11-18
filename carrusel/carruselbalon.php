<center><h3>Baloncesto</h3></center>
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
        <a  onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Publicidad sobre la federacion NBA" data-tittle="Tablero Ajedrez" data-toggle="modal" data-image-id="3" href="#">
            <img  class="img-responsive" src="img/bask.jpg" alt="Federacion NBA" height="400px" width="100%">                
        </a>
        <div class="carousel-caption">
        </div>
    </div>
    
    <div class="item">
        <a  onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Torneo de la NBA 2013" data-tittle="Tablero ajedrez1" data-toggle="modal" data-image-id="3" href="#">
            <img class="img-responsive" src="img/bask2.jpg" alt=" Torneo NBA" height="400px" width="100%" >
        </a>
    </div>

    <div class="item">
    <a onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption=" Un jugador de baloncesto lanzando el balón" data-tittle="Artista Marcial" data-toggle="modal" data-image-id="3" href="#">
            <img class= "img-responsive"  src="img/bask1.jpg" alt="jugador baloncesto"  height="400px" width="100%" >
    </a>
        <div class="carousel-caption">
        </div>

    </div>
    <div class="item">
    <a onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Tres jugadores de baloncesto intentando encestar el balón" data-tittle="Tablero jugador ajedrez" data-toggle="modal" data-image-id="3" href="#">
        <img onclick="showDetails(this)"  src="img/bask3.jpg" alt="Jugadores de baloncesto" height="567px" width="100%" >
    </a>
        <div class="carousel-caption">
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