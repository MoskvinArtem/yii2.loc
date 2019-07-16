<?php

namespace app\controllers;

class PostController extends AppController{

  public $layout = 'basic';

  public function actionIndex(){
    return $this->render('index');
  }

  public function actionTest(){
    $vars = ['One','Punch','Man'];
    return $this->render('test', compact('vars'));
  }

  public function actionShow(){
    $this->layout = 'main';
    return $this->render('show');
  }

}
