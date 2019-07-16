<?php
use app\assets\AppAsset;
use yii\helpers\Html;

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
    <div class="wrap">
      <div class="container">
        <ul class="nav nav-pills">
          <li role="presentation" class="active"><?= Html::a('Главная', '/web/'); ?></li>
          <li role="presentation"><?= Html::a('Статьи', ['/post/index']); ?></li>
          <li role="presentation"><?= Html::a('Статья', ['/post/show']); ?></li>
        </ul>
        <?= $content; ?>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
