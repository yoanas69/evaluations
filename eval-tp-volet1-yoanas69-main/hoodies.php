<?php 
    // Indiquer la page
    $page = "hoodies";
    include("parties-communes/entete.php"); 
    ?>
        <main class="page-produits page-hoodies">
            <article class="amorce">
                <h1><?= $_->nosHoodies ?></h1>
            </article>
            <article class="principal">
                <?= $_->aVenir ?>
            </article>
        </main>
<?php include("parties-communes/pied2page.php"); ?>
