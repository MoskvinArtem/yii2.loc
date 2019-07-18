<?php

namespace app\controllers;

use yii;
use app\models\TestForm;

class PostController extends AppController{

  //Свой шаблон для контроллера!
  public $layout = 'basic';

  //Отключение токенов для страниц
  public function beforeAction($action){
    if($action->id == 'index'){
      $this->enableCsrfValidation = false;
    }
    return parent::beforeAction($action);
  }

  // Главный Action Контроллера post
  public function actionIndex(){
    if( Yii::$app->request->isAjax ){
      debug(Yii::$app->request->post());
      return 'test';
    }

    $model = new TestForm();
    return $this->render('index', compact('model'));
  }

  // Action тест
  public function actionTest(){
    $vars = ['One','Punch','Man'];
    return $this->render('test', compact('vars'));
  }

  // Action show
  public function actionShow(){

    // Объявление параметров для вида show
    $this->view->title = 'Статья';
    $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
    $this->view->registerMetaTag(['name' => 'description', 'content' => 'Описание страницы...']);

    //Свой шаблон для экшона Show!
    //$this->layout = 'main';
    return $this->render('show');
  }

}
