<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url("CSS/style.css") ?>">
    <title></title>
  </head>
  <body>
    <h1><?php echo $titre ; ?></h1>
    <p><?= $leBillet['id'] ; ?></p>
    <p><?= $leBillet['datecreation'] ; ?></p>
    <p><?= $leBillet['contenu'] ; ?></p>


  </body>
</html>
