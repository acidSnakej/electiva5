<center><h3>Taekwondo</h3></center>
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
        <a  onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Los principios de taekwondo, Pasion, Disciplina, Perseverancia, Esfuerzo, Sacrificio , Amor" data-tittle="Tablero Ajedrez" data-toggle="modal" data-image-id="3" href="#">
            <img  class="img-responsive" src="img/tae1.jpg" alt="Taekwondo1" height="400px" width="100%">                
        </a>

        <div class="carousel-caption">
          ...
        </div>
    </div>
    
    <div class="item">
        <a  onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Kata de Taekwondo, es decir, movimientos marciales demostrando la disciplina y virtud" data-tittle="Taekwondo2" data-toggle="modal" data-image-id="3" href="#">
            <img class="img-responsive" src="img/teak.jpg" alt="Kata de movimentos marciales taekwondo" height="400px" width="100%" >
        </a>
    </div>

    <div class="item">
    <a onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Cinturones del arte marcial Taekwondo, en su diferente gamas de colores" data-tittle="Taekwondo3" data-toggle="modal" data-image-id="3" href="#">
            <img class= "img-responsive"  src="img/banner-1.jpg" alt="Cinturoes de Taekwondo"  height="400px" width="100%" >
    </a>
        <div class="carousel-caption">
        </div>

    </div>
    <div class="item">
    <a onclick="showDetails(this)" class="thumbnail" data-target="#image-gallery" data-caption="Dos artistas marciales en combate" data-tittle="Taekwondo4" data-toggle="modal" data-image-id="3" href="#">
        <img onclick="showDetails(this)"  src="img/tae.jpg" alt="Combate de artistas marciales Taekwondo" height="567px" width="100%" >
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