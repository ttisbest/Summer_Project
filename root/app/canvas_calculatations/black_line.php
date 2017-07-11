<?php
function printeblack($x)
{
    $x = $x;
    $x2 = $x + 5;
    $y =50;
    $temp = 0;
    for ($i = 0; $i < 400; $i++)
    {
        if ($i < 75)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#000\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 4)
            {
                $temp = 0;
                $x--;
                $x2 = $x + 5;
            }
        }
        elseif ($i < 150)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#000\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 8)
            {
                $temp = 0;
                $x--;
                $x2 = $x + 5;
            }
        }
        else if ($i < 250)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#000\";
            ctx.stroke();
            ctx.closePath();
            ";
        }
        elseif ($i < 325)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#000\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 8)
            {
                $temp = 0;
                $x++;
                $x2 = $x + 5;
            }
        }
        else
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#000\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 4)
            {
                $temp = 0;
                $x++;
                $x2 = $x + 5;
            }
        }
         $y++;
    };
}

function printewhite($x)
{
    $x = $x;
    $x2 = $x + 5;
    $y =50;
    $temp = 0;
    for ($i = 0; $i < 400; $i++)
    {
        if ($i < 75)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#fff\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 4)
            {
                $temp = 0;
                $x--;
                $x2 = $x + 5;
            }
        }
        elseif ($i < 150)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#fff\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 8)
            {
                $temp = 0;
                $x--;
                $x2 = $x + 5;
            }
        }
        else if ($i < 250)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#fff\";
            ctx.stroke();
            ctx.closePath();
            ";
        }
        elseif ($i < 325)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#ff\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 8)
            {
                $temp = 0;
                $x++;
                $x2 = $x + 5;
            }
        }
        else
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#fff\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 4)
            {
                $temp = 0;
                $x++;
                $x2 = $x + 5;
            }
        }
        $y++;
    };
}




function printeblack2($x)
{
    $x = $x;
    $x2 = $x + 5;
    $y =50;
    $temp = 0;
    for ($i = 0; $i < 400; $i++)
    {
        if ($i < 75)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#000\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 4)
            {
                $temp = 0;
                $x++;
                $x2 = $x + 5;
            }
        }
        elseif ($i < 150)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#000\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 8)
            {
                $temp = 0;
                $x++;
                $x2 = $x + 5;
            }
        }
        else if ($i < 250)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#000\";
            ctx.stroke();
            ctx.closePath();
            ";
        }
        elseif ($i < 325)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#000\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 8)
            {
                $temp = 0;
                $x--;
                $x2 = $x + 5;
            }
        }
        else
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#000\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 4)
            {
                $temp = 0;
                $x--;
                $x2 = $x + 5;
            }
        }
        $y++;
    };
}

function printewhite2($x)
{
    $x = $x;
    $x2 = $x + 5;
    $y =50;
    $temp = 0;
    for ($i = 0; $i < 400; $i++)
    {
        if ($i < 75)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#fff\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 4)
            {
                $temp = 0;
                $x++;
                $x2 = $x + 5;
            }
        }
        elseif ($i < 150)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#fff\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 8)
            {
                $temp = 0;
                $x++;
                $x2 = $x + 5;
            }
        }
        else if ($i < 250)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#fff\";
            ctx.stroke();
            ctx.closePath();
            ";
        }
        elseif ($i < 325)
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#ff\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 8)
            {
                $temp = 0;
                $x--;
                $x2 = $x + 5;
            }
        }
        else
        {
            echo "
            ctx.beginPath();
            ctx.moveTo(".$x.",".$y.");
            ctx.lineTo(".$x2.",".$y.");
            ctx.strokeStyle = \"#fff\";
            ctx.stroke();
            ctx.closePath();
            ";
            $temp++;
            if ($temp == 4)
            {
                $temp = 0;
                $x--;
                $x2 = $x + 5;
            }
        }
        $y++;
    };
}