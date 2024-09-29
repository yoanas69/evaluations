<?php 
	// Définir la variable $page pour indiquer la page affichée.
	$page = 'accueil';

	// Inclure la partie de haut de la page.
	include('parties-communes/entete.php');  
?>
<main class="page-accueil">
	<article class="amorce">
		<h1><?= $_->amorceTitre ?></h1>
		<h2><?= $_->amorceSousTitre ?></h2>
		<h4><?= $_->amorceSousTitre2 ?></h4>
	</article>
	<article class="principal">
		<p>
			<?= $_->para1 ?>
		</p>
		<p>
			<?= $_->para2 ?>
		</p>
	</article>
</main>
<?php include('parties-communes/pied2page.php'); ?>