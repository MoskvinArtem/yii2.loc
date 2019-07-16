<?php

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller{

  public function actionIndex(){
    $vars = ['One', 'Punch', 'Man!'];
    return $this->render('index', ['vars' => $vars]);
  }

}
