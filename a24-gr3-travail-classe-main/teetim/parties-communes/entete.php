<?php
	// Test : énumérer le contenu d'un dossier
	$contenuDossier = scandir('i18n');
	// print_r($contenuDossier);
	
	// Tableau des codes de langue disponibles sur le site
	$languesDispo = [];
	// Parcourir le contenu du dossier i18n pour récupérer 
	// les codes de langues disponibles

	// Solution 1 : avec une boucle traditionnelle
	// for($i=0; $i<count($contenuDossier); $i++) {
	// 	$fichier = $contenuDossier[$i];
	// 	if($fichier != '.' && $fichier != '..') {
	// 		$languesDispo[] = substr($fichier, 0, 2);
	// 		// array_push($languesDispo, substr($fichier, 0, 2));
	// 	}
	// }

	// Solution 2 : avec une boucle foreach (similaire à for...of en JS)
	foreach($contenuDossier as $fichier) {
		// AMÉLIORATIONS : filtrer positivement les fichiers dont le nom
		// a le modèle suivant : "LL.json" (où LL sont juste deux lettres)
		if($fichier != '.' && $fichier != '..' && $fichier != '.DS_Store') {
			$languesDispo[] = substr($fichier, 0, 2);
		}
	}

	// Test : afficher la structure de $languesDispo
	// print_r($languesDispo);

	// Test : jarre à cookies du browser
	// print_r($_COOKIE);
	// setcookie('ali', 'baba', time() + 365*24*3600);

	// Test : timestamp de maintenant
	// echo time();

	/******
	 * Déterminer la langue d'affichage du site
	******/
	// 1. Langue par défaut
	$langue = 'fr';

	// 2. Langue mémorisée dans un cookie (s'il y a lieu)
	if(isset($_COOKIE['choixLangue']) 
			&& in_array($_COOKIE['choixLangue'], $languesDispo)) {
		$langue = $_COOKIE['choixLangue'];
	}

	// 3. Langue si explicitement demandée par utilisateur
	if(isset($_GET['lan']) && in_array($_GET['lan'], $languesDispo)) {
		$langue = $_GET['lan'];

		// "Mémoriser cette info dans l'état"
		// DONC : stocker la valeur du code de langue choisie 
		// dans un témoin HTTP (cookie)
		setcookie('choixLangue', $langue, time() + 12*30*24*3600);
		// setcookie("test-cookie-expire-vite", "fgfdklgjd fk gldfgjkl dhfljgh djlfhg jdfhg jhdfjg hdjfhg jdfh gjdhf gjdhf gjdhf gjkhd fjgh dfjgh dfjgh djh fjdfh gjdfh gjdfh gjdfh gjdh fgjfhd gjdhf gjhd fgjh dfjgh dfjgh dfjgh djfgh dfjgh jfdh gjdfh gjdfh gjdfh gjdfh", time()+20);
	}

	// Étape 1 : Lire le contenu du fichier de textes dans une chaîne de caractères.
	$textesJSON = file_get_contents('i18n/'.$langue.'.json');
	// Test : imprimer cette variable à l'écran
	// echo $textesJSON;

	// Étape 2 : Convertir cette chaîne JSON en PHP
	$textes = json_decode($textesJSON);
	// echo $textes; // Erreur : seules les chaînes peuvent être "imprimées"...
	// print_r($textes);

	// Raccourcis pour les propriétés les plus utilisées
	$_ent = $textes->entete;
	$_pp = $textes->pp;

	// Raccourci pour TOUTES les pages spécifiques
	// Remarquez que ça suppose l'existence de la variable $page 
	// et que la valeur de cette variable est la même EXACTEMENT
	// que l'étiquette de la section correspondante dans le fichier JSON.
	$_ = $textes->$page;

	// Test : imprimer une valeur contenu dans l'objet $textes
	// echo $_ent->menuCasquettes;
?>
<!DOCTYPE html>
<html lang="<?= $langue ?>" dir="<?= $textes->directionTexte ?>">

<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;900&family=Noto+Serif:ital,wght@0,400;0,900;1,400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $_->metaTitre  ?></title>
	<meta name="description" content="<?= $_->metaDesc  ?>">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/png" href="images/favicon.png" />
</head>

<body>
	<div class="conteneur">
		<header>
			<nav class="barre-haut">
				<!-- Générer les liens de choix de langue dynamiquement -->
				<!-- Donc faire une boucle, mais sur quoi ??? -->
				<!-- Début de la boucle : -->

				<?php foreach($languesDispo as $codeLangue) { ?>
					<a 
						class="<?= $langue==$codeLangue ? 'actif' : '' ?>" 
						href="?lan=<?= $codeLangue ?>"
						title="فارسی"
					>
						<?= $codeLangue ?>
					</a>
				<?php } ?>
				<!-- Fin de la boucle -->
			</nav>
			<nav class="barre-logo">
				<label for="cc-btn-responsive" class="material-icons burger">menu</label>
				<a class="logo" href="index.php"><img src="images/logo.png" alt="<?= $_ent->altLogo ?>"></a>
				<a class="material-icons panier" href="panier.php">shopping_cart</a>
				<input class="recherche" type="search" name="motscles" placeholder="<?= $_ent->placeholderRecherche ?>">
			</nav>
			<input type="checkbox" id="cc-btn-responsive">
			<nav class="principale">
				<label for="cc-btn-responsive" class="menu-controle material-icons">close</label>
				<a href="teeshirts.php" class="<?= $page=='teeshirts' ? 'actif' : '' ?>"><?= $_ent->menuTeeshirts ?></a>
				<a href="casquettes.php"><?= $_ent->menuCasquettes ?></a>
				<a href="hoodies.php"><?= $_ent->menuHoodies ?></a>
				<span class="separateur"></span>
				<a href="aide.php"><?= $_ent->menuAide ?></a>
				<a href="apropos.php"><?= $_ent->menuNous ?></a>
			</nav>
		</header>