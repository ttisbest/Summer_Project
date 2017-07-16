<?php
include_once (__DIR__."/../DataBase/DatabaseConnector.php");
$dbc = \App\Connect();

if ($_SERVER["REQUEST_METHOD"] = $_POST)
{
    if (isset($_POST["r1"]) && isset($_POST["r2"]))
    {
        if ($_POST["r1"] < $_POST["r2"])
        {
            $sql = "INSERT INTO `schijf`(`min`, `max`) VALUES (".$_POST["r1"].",".$_POST["r2"].")";
            $dbc->query($sql);
        }
    }
}
header("location: ../../public/adminpannel.php");