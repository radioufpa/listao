<!doctype html>
<html lang="pt-br">

<head>

	<?php 

	$page_name = 'Listão Vestibular UFPA';
	$page_description = 'A Rádio Web UFPA disponibiliza os áudios do listão de aprovados no vestibular da UFPA.';
	$page_tags = 'audio vestibular ufpa, listao vestibular ufpa';

	include '_includes/listao_vestibular_ufpa.php'; 
	include '../_includes/head.php';
	

	?>

</head>

<body>

	<?php 
	include '../_includes/header.php'; 
	include '../_includes/share.php'; 
	?>


    <section class="full-screen img-vestibular">

    	<div class="full-screen-container background-2">

	        <h1>Listão dos Aprovados Vestibular <strong>UFPA</strong></h1>

	        <a href="#content" id="scroll-button" class="color-1"></a>

		</div>

    </section>


	<section id="content" class="full-screen">

		<div class="full-screen-container">

			<h2 class="text-1">Escolha o Ano:</h2>

			<div class="tile">

				<div class="quad-tile">
					<figure class="img-aprovados-2"></figure>
					<a href="#content" target="_blank">
						<h4>2017 (em breve)</h4>
					</a>
				</div>

				<div class="quad-tile">
					<figure class="img-aprovados-1"></figure>
					<a href="2016">
						<h4>2016</h4>
					</a>
				</div>

				<div class="quad-tile">
					<figure class="img-aprovados-3"></figure>
					<a href="2015">
						<h4>2015</h4>
					</a>
				</div>

				<!-- <div class="tile quad-tile">
					<figure class="img-aprovados-2"></figure>
					<a href="2014">
						<h4>2014</h4>
					</a>
				</div> -->
			</div>

		</div>

    </section>

</body>


	<?php include '../_includes/footer.php'; ?>
		
		
<!-- Scripts -->
<script src="http://radio.ufpa.br/_scripts/functions.js" type="text/javascript"></script>
<script src="http://radio.ufpa.br/_scripts/menu.js" type="text/javascript"></script>
<script src="http://radio.ufpa.br/_scripts/header.js" type="text/javascript"></script>
<script src="http://radio.ufpa.br/_scripts/scroll.js" type="text/javascript"></script>

<!-- Google Analytics -->
<?php include_once("analyticstracking.php") ?>

</body>
</html>