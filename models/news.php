<?php

class News extends AbstractModel{

    public $id;
    public $title;
    public $description;
    public $text;

    protected static $table = 'news';
    protected static $class = 'News';

    public static function add($data){
        $db = new DB();
        $db->exec("INSERT INTO `news` (title, description, text, date)
                    VALUES('".$data['title']."', '".$data['description']."', '".$data['text']."', '".$data['date']."')");
    }
}