<?php

require_once __DIR__ . '/models/news.php';

if(!empty($_POST)){
    $data = [];

    if(!empty($_POST['title'])){
        $data['title'] = htmlentities(trim($_POST['title']));
    }

    if(!empty($_POST['title'])){
        $data['description'] = htmlentities(trim($_POST['description']));
    }

    if(!empty($_POST['text'])){
        $data['text'] = trim($_POST['text']);
    }

    if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['text'])){
        $data['date'] = date('Y-m-d');
        News_insert($data);
        header('Location: /');
    }
}

require_once __DIR__ . '/views/add.php';