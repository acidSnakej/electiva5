<center><h3>Ajedrez</h3></center>
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
        <a  onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Tablero de ajedrez, con fichas de peones color negras y blancas" data-tittle="Tablero Ajedrez" data-toggle="modal" data-image-id="3" href="#">
            <img  class="img-responsive" src="img/ajedrez1.jpg" alt="tablero de ajedrez con fichas" height="400px" width="100%">                
        </a>

        <div class="carousel-caption">
          ...
        </div>
    </div>
    
    <div class="item">
        <a  onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Tablero de ajedrez, con fichas variadas, perspectiva area" data-tittle="Tablero ajedrez1" data-toggle="modal" data-image-id="3" href="#">
            <img class="img-responsive" src="img/ajedrez.jpg" alt=" tablero ajedrez 1" height="400px" width="100%" >
        </a>
    </div>

    <div class="item">
    <a onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Juego de computadora inspirado en ajedrez, Warhammer 40000" data-tittle="Artista Marcial" data-toggle="modal" data-image-id="3" href="#">
            <img class= "img-responsive"  src="img/ajedrez3.jpg" alt="juego de ajedrez"  height="400px" width="100%" >
    </a>
        <div class="carousel-caption">
        </div>

    </div>
    <div class="item">
    <a onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Mano del jugador moviendo fichas en tablero de ajedrez" data-tittle="Tablero jugador ajedrez" data-toggle="modal" data-image-id="3" href="#">
        <img onclick="showDetails(this)"  src="img/ajedrez2.png" alt="Jugadores de baloncesto" height="567px" width="100%" >
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