<?php
require_once __DIR__ . '/../classes/Db.php';

class News{

    public $id;
    public $title;
    public $description;
    public $text;
    public $date;

    public static function getAll(){
        $db = new Db();
        return $db->query("SELECT * FROM `news`", 'News');
    }
}