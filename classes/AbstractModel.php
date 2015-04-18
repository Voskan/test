<?php

abstract class AbstractModel {

    protected static $table;
    protected static $class;

    public static function getAll(){
        $db = new DB();
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->queryAll($sql, static::$class);
    }

    public static function getOne($id){
        $db = new DB();
        $sql = "SELECT * FROM ".static::$table." WHERE `id`='$id' LIMIT 1";
        return $db->queryOne($sql, static::$class);
    }
}