<!-- Hero Banner -->
<?php
$images_arry = array(array("image1.jpg", "Siéntete seguro en todo momento", "Contrata tu seguro y comienza tu protección hoy mismo"), array("image1.jpg", "Grupo Promass", "Seguridad ante todo"));
?>
<div class="container my-5 py-5">
	<div id="indicadores" class="carousel slide" data-ride="carousel">
		<?php
		if (count($images_arry) > 1) {
			$i = 0;
		?>
		<ol class="carousel-indicators">
			<?php 
			foreach ($images_arry as $image){
			?>
			<li data-target="#indicadores" data-slide-to="<?=$i?>" class="<?=($i==0)?"active":""?>"></li>
			<?php
			$i++;
			}
			?>
		</ol>
		<?php
		}
		?>
		<div class="carousel-inner">
			<?php
			$isFirst = true;
			foreach ($images_arry as $image) {
			?>
			<div class="carousel-item <?=($isFirst)?"active":""?>" style="background-image: url('assets/images/<?=$image[0]?>');">
				<div class="carousel-caption">
					<h1 class="text-white font-weight-bold text-left"><?=$image[1]?></h1>   
					<p class="text-white text-left"><?=$image[2]?></p>
				</div> 
			</div>
			<?php
				$isFirst = false;
			}
			?>
		</div>
		<a class="carousel-control-prev" href="#indicadores" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#indicadores" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Siguiente</span>
		</a>
	</div>
</div>
<!-- Fin de Hero Banner -->

<!-- 3 Columnas con texto -->
<div class="container my-5 py-5">
	<div class="row">
		<div class="col-lg-4 my-3">
			<h1 class="font-weight-bold text-center">Subtítulo 1</h1>
			<p class="text-center">Lorem ipsum.</p>
		</div>
		<div class="col-lg-4 my-3">
			<h1 class="font-weight-bold text-center">Subtítulo 2</h1>
			<p class="text-center">Lorem ipsum.</p>
		</div>
		<div class="col-lg-4 my-3">
			<h1 class="font-weight-bold text-center">Subtítulo 3</h1>
			<p class="text-center">Lorem ipsum.</p>
		</div>
	</div>
</div>
<!-- Fin de 3 Columnas con texto -->

<!-- Imagen de anchura total con texto encima -->
<div class="jumbotron jumbotron-fluid my-5 jumbutron-promass">
	<div class="container text-center text-white my-5 pt-5">
		<h1 class="font-weight-bold">Subtítulo 4</h1>
		<p>Lorem ipsum dolor amet.</p>
	</div>
</div>
<!-- Fin de Imagen de anchura total con texto encima -->

<!-- 2 Columnas con texto y círculo Golden -->
<div class="container my-5 py-5">
	<div class="row my-3">
		<div class="offset-lg-2">
		</div>
		<div class="col-lg-4 my-3">
			<div class="media p-3">
				<span class="badge badge-golden text-white rounded-circle py-4 px-4 font-weight-bold mr-2">1</span>
				<div class="media-body ml-2">
					<h1 class="font-weight-bold">Subtítulo 5</h1>
					<p>Lorem ipsum.</p>   
				</div>
			</div>
		</div>
		<div class="col-lg-4 my-3">
			<div class="media p-3">
				<span class="badge badge-golden text-white rounded-circle py-4 px-4 font-weight-bold mr-2">2</span>
				<div class="media-body ml-2">
					<h1 class="font-weight-bold">Subtítulo 6</h1>
					<p>Lorem ipsum.</p>   
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Fin de 2 Columnas con texto y círculo Golden -->

<!-- Datos de contacto -->
<div class="container-fluid pt-5 pb-4 bg-grayLight">
	<div class="row mx-3">
		<div class="offset-md-4">
		</div>
		<div class="col-md-2 my-3">
			<h1 class="font-weight-bold">Sitio</h1>
			<ul class="pl-0">
				<li class="mb-3">Inicio</li>
				<li class="mb-3">Nosotros</li>
				<li>Preguntas frecuentes</li>
			</ul>
		</div>
		<div class="col-md-2 my-3">
			<h1 class="font-weight-bold">Contacto</h1>
			<p>01 2345 5678</p>
			<p>mail@gmail.com</p>
		</div>
	</div>
</div>
<!-- Fin datos de contacto -->

<!-- Termina tu código aquí -->