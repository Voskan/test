<?php

require_once __DIR__ . '/../functions/sql.php';

function News_getAll()
{
    $sql = "SELECT * FROM `news` ORDER BY `date` DESC";
    return Sql_query($sql);
}

function News_insert($data)
{
    $sql = "
        INSERT INTO `news`
        (title, description, text, date)
        VALUES('".$data['title']."', '".$data['description']."', '".$data['text']."', '".$data['date']."')
        ";

    Sql_exec($sql);
}

function News_getOne($id)
{
    $sql = "SELECT * FROM `news` WHERE `id` = '$id' LIMIT 1";
    return Sql_queryOne($sql);
}