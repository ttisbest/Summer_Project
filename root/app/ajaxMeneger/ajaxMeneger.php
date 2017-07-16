<?php

include_once ("../DataBase/DatabaseConnector.php");
include_once ("../skins/skinrmd.php");

if (isset($_POST["request"]))
{
    if ($_POST["request"] == 1)
    {
        if (isset($_POST["username"]) && isset($_POST["trade_link"]))
        {
            $username = $_POST["username"];
            $trade_link = $_POST["trade_link"];

            $dbc = \App\Connect();

            $sql = "SELECT * FROM `customers` WHERE `username` =\"".$username."\"";
            $result = $dbc->query($sql)->rowCount();
            if ($result == 0)
            {
                $sql = "INSERT INTO `customers`(`username`, `tradelink`) VALUES (\"".$username."\",\"".$trade_link."\")";
                $dbc->query($sql);
                echo true;
            }
            else
            {
                $sql = "SELECT * FROM `customers` WHERE `username` = \"".$username."\" AND `tradelink` = \"".$trade_link ."\"";
                $result = $dbc->query($sql)->rowCount();
                if ($result == 0)
                {
                    $sql = "UPDATE `customers` SET `tradelink`= \"".$trade_link."\" WHERE `username` = \"".$username."\"";
                    $dbc->query($sql);
                    echo true;
                }
                else
                {
                    echo true;
                }
            }
        }
        echo false;
    }
    elseif ($_POST["request"] == 2)
    {
        $skin = getSkin();
        $sql = "SELECT `img` FROM `skins` WHERE `id` =".$skin;
        $resuld = \App\Connect()->query($sql)->fetchAll();
        echo $resuld[0]["img"];
    }
    elseif ($_POST["request"] == 3)
    {
        if (isset($_POST["winSkin"]))
        {
            $imgs="";
            for ($i = 1; $i < 11; $i++)
            {
                $sql = "SELECT `img` FROM `skins` WHERE `rank` = " . $i;
                $resuld = \App\Connect()->query($sql)->rowCount();
                $resuld--;
                $rdm1 = rand(0, $resuld);
                $rdm2 = rand(0, $resuld);
                $resuld = \App\Connect()->query($sql)->fetchAll();
                $imgs = $imgs . $resuld[$rdm1]["img"] . ";" . $resuld[$rdm2]["img"] . ";";
            }
            $sql = "SELECT `img` FROM `skins` WHERE `id` =".$_POST["winSkin"];
            $resuld = \App\Connect()->query($sql)->fetchAll();
            echo $imgs . $resuld[0]["img"];
        }
        echo false;
    }
    echo false;
}
echo false;