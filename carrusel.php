<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3" class="active"></li>
</ol>
</ol>

<div class="carousel-inner" role="listbox">
    <div class="item active">
        <a  onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Grupo de jugadores de diferentes disciplinas" data-tittle="Grupo Jugadores" data-toggle="modal" data-image-id="3" href="#">
            <img  class="img-responsive" src="img/deport.png" alt="Jugadores de diferentes disciplinas de deportes" height="400px" width="100%">                
        </a>

        <div class="carousel-caption">
          ...
        </div>
    </div>
    
    <div class="item">
        <a  onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Grupo de deportistas callejeros" data-tittle="Motivacion al deporte callejero" data-toggle="modal" data-image-id="3" href="#">
            <img class="img-responsive" src="img/banner.png" alt=" Motivacion al deporte callejero" height="400px" width="100%" >
        </a>
    </div>

    <div class="item">
    <a onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Discipulo de taekwondo" data-tittle="Artista Marcial" data-toggle="modal" data-image-id="3" href="#">
            <img class= "img-responsive"  src="img/Taekwondo.jpg" alt="Discipulo de taekwondo" longdesc="http://localhost/PaginaDeportes/taekwondo.php#img/Taekwondo.jpg" height="400px" width="100%" >
    </a>
        <div class="carousel-caption">
        </div>

    </div>
    <div class="item">
    <a onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Jugadores de Baloncesto" data-tittle="Basketball" data-toggle="modal" data-image-id="3" href="#">
        <img onclick="showDetails(this)"  src="img/baloncesto.jpg" alt="Jugadores de baloncesto" height="567px" width="100%"  >
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