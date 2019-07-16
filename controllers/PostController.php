<?php

namespace app\controllers;

class PostController extends AppController{

  public function actionTest(){
    $vars = ['One','Punch','Man'];
    return $this->render('test', compact('vars'));
  }

}
