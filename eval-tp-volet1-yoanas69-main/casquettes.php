<?php 
    // Indiquer la page
    $page = "casquettes";
    include("parties-communes/entete.php"); 
?>
        <main class="page-produits page-casquettes">
            <article class="amorce">
                <h1><?= $_->titre ?></h1>
            </article>
            <article class="principal">
                <?= $_->aVenir ?>
            </article>
        </main>
<?php include("parties-communes/pied2page.php"); ?>
