<?php

/* @var $this yii\web\View */

//Объявление параметров вида Show (в контроллере тоже есть)
//$this->title = 'Статья';
// $this->params['breadcrumbs'][] = $this->title;
?>

<!-- Подключение данных из вида(экшона) в шаблон -->
<?php $this->beginBlock('Block1'); ?>
  <h1>Заголовок страницы</h1>
<?php $this->endBlock(); ?>

<h1>Show action</h1>



<button class="btn btn-succes" id="btn">Click me...?!</button>

<!-- Подключение своих JS в Action -->
<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']); ?>
<?php //$this->registerJs("$('.container').append('<p>SHOW TWO!</p>');"); ?>

<!-- Подключение своих CSS в Action -->
<?php //$this->registerCss('.container{background: #ccc;}'); ?>

<!-- Подключение ajax-запроса в JS -->
<?php
$js = <<<JS
  $('#btn').on('click', function(){
    $.ajax({
      url: 'index.php?r=post/index',
      data: {test: '321'},
      type: 'POST',
      success: function(res){
        console.log(res);
      },
      error: function(){
        alert('Error!');
      }
    });
  });
JS;
$this->registerJs($js);
 ?>
