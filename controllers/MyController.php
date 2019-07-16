<?php

namespace app\controllers;

class MyController extends AppController{

  public function actionIndex($id = null){

    //Передача id через строку поиска вида
    if(!$id) {$id = 'test';}

    //Передача переменных в вид через рендер
    $vars = ['One', 'Punch', 'Man!'];
    // return $this->render('index', ['vars' => $vars]);
    return $this->render('index', compact('vars', 'id'));
  }

  public function actionBlogPost(){
    return 'Blog Post';
  }

}
