<?php

if(!empty($_GET['id']))
    $id = (int)$_GET['id'];
else
    header('Location: /');

require_once __DIR__.'/models/news.php';

$item = News_getOne($id);

if($item === false)
    header('Location: /');

include_once __DIR__.'/views/one_news.php';