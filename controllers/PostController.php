<?php

namespace app\controllers;

class PostController extends AppController{

  //Свой шаблон для контроллера!
  public $layout = 'basic';

  public function actionIndex(){
    if( Yii::$app->request->isAjax ){
      debug($_GET);
      return 'test';
    }
    return $this->render('index');
  }

  public function actionTest(){
    $vars = ['One','Punch','Man'];
    return $this->render('test', compact('vars'));
  }

  public function actionShow(){
    //Свой шаблон для экшона!
    //$this->layout = 'main';
    return $this->render('show');
  }

}
