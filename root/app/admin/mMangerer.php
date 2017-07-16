<?php
function getM()
{
    include_once (__DIR__."/../DataBase/DatabaseConnector.php");
    $dbc = \App\Connect();
    $sql = "SELECT * FROM `schijf` WHERE 1";
    $resuld = $dbc->query($sql)->rowCount();
    $sql = "SELECT * FROM `schijf` WHERE `id` =".$resuld;
    $resuld = $dbc->query($sql)->fetchAll();
    $min = $resuld[0]["min"];
    $max = $resuld[0]["max"];

    return $m = ['min'=>$min,'max'=>$max];
}
