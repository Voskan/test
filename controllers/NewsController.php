<?php
require_once __DIR__ . '/../models/News.php';

class NewsController {

    public function actionAll(){
        $items = News::getAll();

        include __DIR__ . '/../views/news/all.php';
    }

    public function actionOne(){
        echo 'actionOne'; exit;

        $id = (int)$_GET['id'];
        $item = News::getOne();

        include __DIR__ . '/../views/news/one.php';
    }
}