<?php
// Définir la variable $page pour indiquer la page affichée.
$page = 'teeshirts';
$teeshirtsJSON = file_get_contents("data/teeshirts.json");
$teeshirts = json_decode($teeshirtsJSON);
// Inclure la partie de haut de la page.
include('parties-communes/entete.php');
?>
<main class="page-produits page-teeshirts">
	<article class="amorce">
		<h1><?= $_->titrePage ?></h1>
	</article>
	
    <article class="principal">
	<?php
    foreach($teeshirts as $produit) {
	?>
			<div class="produit">

			<span class="image">
					<img src="images/produits/teeshirts/<?= $produit->id ?>.webp" alt="<?= $produit->nom ?>">
			</span>
			<span class="nom"><?= $produit->nom ?></span>
			<span class="prix"><?= $produit->prix ?></span>
		</div>
		
		<?php } ?>
    </article>
    
</main>
<?php include('parties-communes/pied2page.php'); ?>