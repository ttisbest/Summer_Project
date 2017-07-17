<?php

include_once ("../DataBase/DatabaseConnector.php");
include_once ("../skins/skinrmd.php");

if (isset($_POST["request"]))
{
    if ($_POST["request"] == 1)
    {
        if (isset($_POST["username"]) && isset($_POST["trade-link"]))
        {
            $username = $_POST["username"];
            $trade_link = $_POST["trade-link"];

            $dbc = \App\Connect();

            $sql = "SELECT * FROM `customers` WHERE `username` =\"".$username."\"";
            $result = $dbc->query($sql)->rowCount();
            if ($result == 0)
            {
                $sql = "INSERT INTO `customers`(`username`, `tradelink`) VALUES (\"".$username."\",\"".$trade_link."\")";
                $dbc->query($sql);
                $sql = "SELECT * FROM `customers` WHERE `username` =\"".$username."\"";
                $result = $dbc->query($sql)->fetchAll();
                echo $result[0]["id"];
            }
            else
            {
                $sql = "SELECT * FROM `customers` WHERE `username` = \"".$username."\" AND `tradelink` = \"".$trade_link ."\"";
                $result = $dbc->query($sql)->rowCount();
                if ($result == 0)
                {
                    $result2 = $dbc->query($sql)->fetchAll();

                    $sql = "UPDATE `customers` SET `tradelink`= \"".$trade_link."\" WHERE `username` = \"".$username."\"";
                    $dbc->query($sql);
                    echo $result2[0]["id"];
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
        $sql = "SELECT `id`,`img` FROM `skins` WHERE `id` =".$skin;
        $resuld = \App\Connect()->query($sql)->fetchAll();
        echo $resuld[0]["img"].";".$resuld[0]["id"];
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
    elseif ($_POST["request"] == 4)
    {
        if (isset($_POST["id"]) && isset($_POST["user"]))
        {
            $sql = "INSERT INTO `sold_skins`(`username_id`, `skin_id`) VALUES (\"".$_POST["user"]."\",\"".$_POST["id"]."\");";
            \App\Connect()->query($sql);
            $sq2l = "SELECT `name`, `descripson` FROM `skins` WHERE `id` =".$_POST["id"];
                $result2 = \App\Connect()->query($sq2l)->fetchAll();
            echo $result2[0]["name"] + ";" + $result2[0]["descripson"];
        }
    }
    echo false;
}
echo false;