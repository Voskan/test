<?php

function Sql_connect(){
    mysql_connect('localhost', 'voskan', '19891213');
    mysql_select_db('test');
}

function Sql_query($sql){
    Sql_connect();
    $res = mysql_query($sql);

    $return = [];
    while(false !== $row = mysql_fetch_assoc($res)){
        $return[] = $row;
    }

    return $return;
}

function Sql_getOne($sql){
    Sql_connect();

    $res = mysql_query($sql);
    $row = mysql_fetch_assoc($res);

    if(empty($row))
        return false;

    return $row;
}

function Sql_exec($sql){
    Sql_connect();
    mysql_query($sql);
}