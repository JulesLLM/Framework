<?php
// squelette commun à l'ensemble des pages web
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($data['title'])) echo $data['title']; ?> - Framework</title>
    <?php if (isset($data['description'])) { ?>
      <meta name="description" content="<?= $data['description'] ?>">
    <?php } ?>
     <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <?php include '_navbar.php'; ?>
    <main>
      <?php require $templatePath ?>
    </main>
    <?php include '_footer.php'; ?>
    <script src="js/app.js"></script>
    test
  </body>
</html>