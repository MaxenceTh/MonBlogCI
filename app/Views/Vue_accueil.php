<?php
////////////////////////////////////////////////////////////////
// Affichage à l'utilisateur
////////////////////////////////////////////////////////////////
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="<?= base_url("CSS/style.css") ?>">

    <title></title>
  </head>
  <body>





    <h1>Un titre</h1>



    <h1 class="titreBillet"><?= $titre ;  ?></h1>
    <p>
        <?= $description ; ?>
    </p>
    <p>
      <?= $chemin ; ?>

    </p>

    <p>
        <?= $url; ?>
    </p>
    </div>




    <?php echo anchor('Blog/apropos','A propos'); ?>
    <?php echo anchor('Blog/page2','Page2') ?>
    <?php echo anchor('Blog/lesBillets','lesBillets') ?>






  </body>
</html>
