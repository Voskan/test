<?php

class DB{

    public function __construct(){
        mysql_connect('localhost', 'voskan', '19891213');
        mysql_select_db('test');
    }

    public function queryAll($sql, $class = 'stdClass'){
        $res = mysql_query($sql);

        if(false === $res)
            return false;

        $return = [];
        while($row = mysql_fetch_object($res, $class)){
            $return[] = $row;
        }
        return $return;
    }

    public function queryOne($sql, $class = 'stdClass'){
        return $this->queryAll($sql, $class)[0];
    }

    public function exec($sql){
        mysql_query($sql);
    }
}