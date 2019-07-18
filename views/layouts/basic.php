<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
  <head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title)?></title>
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

        <!-- Подключение данных из вида в шаблон -->
        <?php if(isset($this->blocks['Block1'])){ ?>
          <?php echo $this->blocks['Block1'] ?>
        <?php } ?>

        <?= $content; ?>

      </div>
    </div>

    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
