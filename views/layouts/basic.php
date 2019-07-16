<?php
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <title>Hello, world!</title>
    <?php $this->head() ?>
  </head>
  <body>
    <?php $this->beginBody() ?>
    <h1>Hello, world!</h1>

    <?= $content; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
