<?php

class NewsController {

    public function actionAll(){
        $items = News::getAll();

        $view = new View();
        $view->items = $items;
        $view->display('news/all');
    }

    public function actionOne(){
        $id = (int)$_GET['id'];
        if(empty($id))
            header('Location: /');

        $item = News::getOne($id);

        $view = new View();
        $view->item = $item;
        $view->display('news/one');
    }
}