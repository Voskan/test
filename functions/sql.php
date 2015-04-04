<?php

function Sql_connect()
{
    mysql_connect('localhost', 'voskan', '19891213');
    mysql_select_db('test');
}

function Sql_query($sql)
{
    Sql_connect();

    $res = mysql_query($sql);

    $ret = [];
    while(false !== $row = mysql_fetch_assoc($res)){
        $ret[] = $row;
    }

    return $ret;
}

function Sql_exec($sql)
{
    Sql_connect();
    mysql_query($sql);
}

function Sql_queryOne($sql)
{
    Sql_connect();
    $res = mysql_query($sql);
    return mysql_fetch_assoc($res);
}