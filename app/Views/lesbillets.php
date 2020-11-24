
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="<?= base_url("CSS/style.css") ?>">
    <title>Mon Blog - les billets</title>
  </head>

  <body>








 <h1><?php echo $titre ; ?></h1>




    <?php foreach ($lesBillets as $billet): ?>
      <header>
        <a href="<?= "leBillet/" . $billet['id'] ?>">
            <h2><?= $billet['titre'] ?></h2> </a>
      </header>

      <time><?= $billet['datecreation'] ?></time><p>
        <hr/>

      <?php endforeach; ?>





  </body>
</html>
