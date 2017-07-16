<?php

// winning skin == $lucky_skin_id

function getSkin()
{
    $all_tiers = 0;
    $start_tiers= 0;

    $tier1 = 0;
    $tier2 = 0;
    $tier3 = 0;
    $tier4 = 0;
    $tier5 = 0;
    $tier6 = 0;
    $tier7 = 0;
    $tier8 = 0;
    $tier9 = 0;
    $tier10 = 0;

    include_once (__DIR__."/../admin/mMangerer.php");
    include_once (__DIR__."/../DataBase/DatabaseConnector.php");

    $j = 1;
    $return = getM();
    $min = $return['min'];
    $max = $return['max'];

    for ($i = $min; $i < $max; $i++)
    {
        if ($j ==1)
        {
            $tier1 = tier1($i);
            $start_tiers = ['t1'=>$tier1];
        }
        elseif ($j == 2)
        {
            $tier2 = tier2($i);
            $start_tiers = ['t1'=>$tier1,'t2'=>$tier2];
        }
        elseif ($j == 3)
        {
            $tier3 = tier3($i);
            $start_tiers = ['t1'=>$tier1,'t2'=>$tier2,'t3'=>$tier3];
        }
        elseif ($j == 4)
        {
            $tier4 = tier4($i);
        }
        elseif ($j == 5)
        {
            $tier5 = tier5($i);
        }
        elseif ($j == 6)
        {
            $tier6 = tier6($i);
            $all_tiers = ['t6'=>$tier6];
        }
        elseif ($j == 7)
        {
            $tier7 = tier7($i);
            $all_tiers = ['t6'=>$tier6,'t7'=>$tier7];
        }
        elseif ($j == 8)
        {
            $tier8 = tier8($i);
            $all_tiers = ['t6'=>$tier6,'t7'=>$tier7,'t8'=>$tier8];
        }
        elseif ($j == 9)
        {
            $tier9 = tier9($i);
            $all_tiers = ['t6'=>$tier6,'t7'=>$tier7,'t8'=>$tier8,'t9'=>$tier9];
        }
        elseif ($j == 10)
        {
            $tier10 = tier10($i);
            $all_tiers = ['t6'=>$tier6,'t7'=>$tier7,'t8'=>$tier8,'t9'=>$tier9,'t10'=>$tier10];
        }
        $j++;
    }
    $j = 0;

    $lucky_number = rand(1,10000);
    $lucky_skin_id = 0;

    if ($all_tiers == 0)
    {
        foreach ((array)$all_tiers as $tier)
        {
            foreach ((array)$tier as $skin)
            {
                if ($skin['number'] == $lucky_number)
                {
                    $lucky_skin_id = $skin['id'];
                }
            }
        }
    }
    if ($lucky_skin_id == 0)
    {
        $tln = substr($lucky_number, -4);

        foreach ((array)$start_tiers as $tier)
        {
            foreach ($tier as $skin)
            {
                if ($skin['number'] == $tln)
                {
                    $lucky_skin_id = $skin['id'];
                }
            }
        }
    }
    if ($lucky_skin_id == 0)
    {
        $dln = substr($lucky_number, -3);

        foreach ((array)$start_tiers as $tier)
        {
            foreach ($tier as $skin)
            {
                if ($skin['number'] == $dln)
                {
                    $lucky_skin_id = $skin['id'];
                }
            }
        }
    }

    if ($lucky_skin_id == 0)
    {
        $last_lucky_number = substr($lucky_number, -1);

        foreach ((array)$start_tiers as $tier)
        {
            foreach ($tier as $skin)
            {
                if ($skin['number'] == $last_lucky_number)
                {
                    $lucky_skin_id = $skin['id'];
                }
            }
        }
    }

    return $lucky_skin_id;
}


function tier1($level)
{
    $sql = "SELECT `id`FROM `skins` WHERE `rank` = ".$level;
    $resuld = \App\Connect()->query($sql)->rowCount();
    $resuld--;
    $rdm1 = rand ( 0 , $resuld );
    $rdm2 = rand ( 0 , $resuld );
    $rdm3 = rand ( 0 , $resuld );
    $rdm4 = rand ( 0 , $resuld );
    $resuld = \App\Connect()->query($sql)->fetchAll();

    $tier1 = [
        'skin1'=>['id'=>$resuld[$rdm1]["id"],'number'=>7],
        'skin2'=>['id'=>$resuld[$rdm2]["id"],'number'=>5],
        'skin3'=>['id'=>$resuld[$rdm3]["id"],'number'=>2],
        'skin4'=>['id'=>$resuld[$rdm4]["id"],'number'=>0]
    ];
    return $tier1;
}
function tier2($level)
{
    $sql = "SELECT * FROM `skins` WHERE `rank` = ".$level;
    $resuld = \App\Connect()->query($sql)->rowCount();
    $resuld--;
    $rdm1 = rand ( 0 , $resuld );
    $rdm2 = rand ( 0 , $resuld );
    $rdm3 = rand ( 0 , $resuld );
    $resuld = \App\Connect()->query($sql)->fetchAll();

    $tier2 = [
        'skin1'=>['id'=>$resuld[$rdm1]["id"],'number'=>4],
        'skin2'=>['id'=>$resuld[$rdm2]["id"],'number'=>8],
        'skin3'=>['id'=>$resuld[$rdm3]["id"],'number'=>1]
    ];
    return $tier2;
}
function tier3($level)
{
    $sql = "SELECT * FROM `skins` WHERE `rank` = ".$level;
    $resuld = \App\Connect()->query($sql)->rowCount();
    $resuld--;
    $rdm1 = rand ( 0 , $resuld );
    $rdm2 = rand ( 0 , $resuld );
    $rdm3 = rand ( 0 , $resuld );
    $resuld = \App\Connect()->query($sql)->fetchAll();

    $tier3 = [
        'skin1'=>['id'=>$resuld[$rdm1]["id"],'number'=>3],
        'skin2'=>['id'=>$resuld[$rdm2]["id"],'number'=>6],
        'skin3'=>['id'=>$resuld[$rdm3]["id"],'number'=>9]
    ];
    return $tier3;
}
function tier4($level)
{
    $sql = "SELECT * FROM `skins` WHERE `rank` = ".$level;
    $resuld = \App\Connect()->query($sql)->rowCount();
    $resuld--;
    $rdm1 = rand ( 0 , $resuld );
    $rdm2 = rand ( 0 , $resuld );
    $rdm3 = rand ( 0 , $resuld );
    $rdm4 = rand ( 0 , $resuld );
    $rdm5 = rand ( 0 , $resuld );
    $rdm6 = rand ( 0 , $resuld );
    $rdm7 = rand ( 0 , $resuld );
    $resuld = \App\Connect()->query($sql)->fetchAll();

    return $tier4 = [
        'skin1'=>['id'=>$resuld[$rdm1]["id"],'number'=>rand(0,1000)],
        'skin2'=>['id'=>$resuld[$rdm2]["id"],'number'=>rand(0,1000)],
        'skin3'=>['id'=>$resuld[$rdm3]["id"],'number'=>rand(0,1000)],
        'skin4'=>['id'=>$resuld[$rdm4]["id"],'number'=>rand(0,1000)],
        'skin5'=>['id'=>$resuld[$rdm5]["id"],'number'=>rand(0,1000)],
        'skin6'=>['id'=>$resuld[$rdm6]["id"],'number'=>rand(0,1000)],
        'skin7'=>['id'=>$resuld[$rdm7]["id"],'number'=>rand(0,1000)],
    ];
}
function tier5($level)
{
    $sql = "SELECT * FROM `skins` WHERE `rank` = ".$level;
    $resuld = \App\Connect()->query($sql)->rowCount();
    $resuld--;
    $rdm1 = rand ( 0 , $resuld );
    $rdm2 = rand ( 0 , $resuld );
    $rdm3 = rand ( 0 , $resuld );
    $rdm4 = rand ( 0 , $resuld );
    $rdm5 = rand ( 0 , $resuld );
    $rdm6 = rand ( 0 , $resuld );
    $resuld = \App\Connect()->query($sql)->fetchAll();

    return $tier5 = [
        'skin1'=>['id'=>$resuld[$rdm1]["id"],'number'=>rand(0,10000)],
        'skin2'=>['id'=>$resuld[$rdm2]["id"],'number'=>rand(0,10000)],
        'skin3'=>['id'=>$resuld[$rdm3]["id"],'number'=>rand(0,10000)],
        'skin4'=>['id'=>$resuld[$rdm4]["id"],'number'=>rand(0,10000)],
        'skin5'=>['id'=>$resuld[$rdm5]["id"],'number'=>rand(0,10000)],
        'skin6'=>['id'=>$resuld[$rdm6]["id"],'number'=>rand(0,10000)],
    ];
}
function tier6($level)
{
    $sql = "SELECT * FROM `skins` WHERE `rank` = ".$level;
    $resuld = \App\Connect()->query($sql)->rowCount();
    $resuld--;
    $rdm1 = rand ( 0 , $resuld );
    $rdm2 = rand ( 0 , $resuld );
    $rdm3 = rand ( 0 , $resuld );
    $rdm4 = rand ( 0 , $resuld );
    $rdm5 = rand ( 0 , $resuld );
    $resuld = \App\Connect()->query($sql)->fetchAll();

    return $tier6 = [
        'skin1'=>['id'=>$resuld[$rdm1]["id"],'number'=>rand(0,100000)],
        'skin2'=>['id'=>$resuld[$rdm2]["id"],'number'=>rand(0,100000)],
        'skin3'=>['id'=>$resuld[$rdm3]["id"],'number'=>rand(0,100000)],
        'skin4'=>['id'=>$resuld[$rdm4]["id"],'number'=>rand(0,100000)],
        'skin5'=>['id'=>$resuld[$rdm5]["id"],'number'=>rand(0,100000)],
    ];
}
function tier7($level)
{
    $sql = "SELECT * FROM `skins` WHERE `rank` = ".$level;
    $resuld = \App\Connect()->query($sql)->rowCount();
    $resuld--;
    $rdm1 = rand ( 0 , $resuld );
    $rdm2 = rand ( 0 , $resuld );
    $rdm3 = rand ( 0 , $resuld );
    $rdm4 = rand ( 0 , $resuld );
    $resuld = \App\Connect()->query($sql)->fetchAll();

    return $tier7 = [
        'skin1'=>['id'=>$resuld[$rdm1]["id"],'number'=>rand(0,100000)],
        'skin2'=>['id'=>$resuld[$rdm2]["id"],'number'=>rand(0,100000)],
        'skin3'=>['id'=>$resuld[$rdm3]["id"],'number'=>rand(0,100000)],
        'skin4'=>['id'=>$resuld[$rdm4]["id"],'number'=>rand(0,100000)],
    ];
}
function tier8($level)
{
    $sql = "SELECT * FROM `skins` WHERE `rank` = ".$level;
    $resuld = \App\Connect()->query($sql)->rowCount();
    $resuld--;
    $rdm1 = rand ( 0 , $resuld );
    $rdm2 = rand ( 0 , $resuld );
    $rdm3 = rand ( 0 , $resuld );
    $resuld = \App\Connect()->query($sql)->fetchAll();

    return $tier8 = [
        'skin1'=>['id'=>$resuld[$rdm1]["id"],'number'=>rand(0,100000)],
        'skin2'=>['id'=>$resuld[$rdm2]["id"],'number'=>rand(0,100000)],
        'skin3'=>['id'=>$resuld[$rdm3]["id"],'number'=>rand(0,100000)],
    ];
}
function tier9($level)
{
    $sql = "SELECT * FROM `skins` WHERE `rank` = ".$level;
    $resuld = \App\Connect()->query($sql)->rowCount();
    $resuld--;
    $rdm1 = rand ( 0 , $resuld );
    $rdm2 = rand ( 0 , $resuld );
    $resuld = \App\Connect()->query($sql)->fetchAll();

    return $tier9 = [
        'skin1'=>['id'=>$resuld[$rdm1]["id"],'number'=>rand(0,100000)],
        'skin2'=>['id'=>$resuld[$rdm2]["id"],'number'=>rand(0,100000)],
    ];
}
function tier10($level)
{
    $sql = "SELECT * FROM `skins` WHERE `rank` = ".$level;
    $resuld = \App\Connect()->query($sql)->rowCount();
    $resuld--;
    $rdm1 = rand ( 0 , $resuld );
    $resuld = \App\Connect()->query($sql)->fetchAll();

    return $tier10 = [
        'skin1'=>['id'=>$resuld[$rdm1]["id"],'number'=>rand(0,100000)],
    ];
}