<?php

if(!empty($_GET['id']))
{
    require_once __DIR__ . '/models/news.php';

    $id = (int)$_GET['id'];
    $n = News_getOne($id);

    require_once __DIR__ . '/views/news.php';

}else
{
    header('Location: /');
}