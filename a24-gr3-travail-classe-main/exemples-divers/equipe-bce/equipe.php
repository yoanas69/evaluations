<?php
  // Lire et interpréter le fichier JSON contenant la liste
  // des membres de l'équipe de la haute direction
  $equipeJSON = file_get_contents("data/equipe.json");
  $equipe = json_decode($equipeJSON);

  // Test
  // print_r($equipe);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BCE : équipe de la haute direction</title>
  <style>
    main {
      width: 80vw;
      margin: 2rem auto;
      /* border: 1px solid red; */
    }

    section.equipe {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
    }

    section.equipe article.personne {
      width: 300px;
    }

    article.personne img {
      width: inherit;
      background-color: #ddd;
      border-radius: 0.5rem;
    }

  </style>
</head>
<body>

  <!-- main#equipe>section.equipe>article.personne>(img+h2+h4+p) -->
  <main>
    <h2>Équipe de la haute direction</h2>
    <section class="equipe">

      <?php foreach($equipe as $personne) { ?>
        <!-- Gabarit d'un membre de l'équipe -->
        <article class="personne">
          <img src="photos/<?= $personne->id ?>.png" alt="<?= $personne->nom ?>">
          <h2><?= $personne->nom ?></h2>
          <h4><?= $personne->poste ?></h4>
          <p><?= $personne->annee ?></p>
        </article>
      <?php } ?>
    </section>
  </main>
</body>
</html>