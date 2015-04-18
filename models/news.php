<?php
require_once __DIR__.'/../classes/DB.php';

class News{

    public $id;
    public $title;
    public $description;
    public $text;

    public static function getAll(){
        $db = new DB();
        return $db->query('SELECT * FROM `news` ORDER BY `date` DESC', 'News');
    }

    public static function getOne($id){
        $db = new DB();
        return $db->getOne("SELECT * FROM `news` WHERE `id`='$id' LIMIT 1");
    }

    public static function add($data){
        $db = new DB();
        $db->exec("INSERT INTO `news` (title, description, text, date)
                    VALUES('".$data['title']."', '".$data['description']."', '".$data['text']."', '".$data['date']."')");
    }
}