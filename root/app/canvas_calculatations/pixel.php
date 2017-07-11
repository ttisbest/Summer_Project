<?php
/**
 * Created by PhpStorm.
 * User: School
 * Date: 11-7-2017
 * Time: 01:49
 */

namespace dion;


class pixel
{
    private $x;
    private $y;
    private $y_Temp;
    private $color;

    function __construct($x, $y, $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->y_Temp = $y;
        $this->color = $color;
    }

    function printe()
    {
        $this->y_Temp++;
        echo "
        ctx.beginPath();
        ctx.moveTo(".$this->x.",".$this->y.");
        ctx.lineTo(".$this->x.",".$this->y_Temp.");
        ctx.strokeStyle = \"".$this->color."\";
        ctx.stroke();
        ctx.closePath();
        ";
    }
}