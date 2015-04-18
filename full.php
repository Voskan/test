<?php

if(!empty($_GET['id']))
    $id = (int)$_GET['id'];
else
    header('Location: /');

require_once __DIR__ . '/models/News.php';

$item = News::getOne($id);

include_once __DIR__.'/views/one_news.php';