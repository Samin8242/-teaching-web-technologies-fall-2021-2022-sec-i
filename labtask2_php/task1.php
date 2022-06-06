<?php

function AreaRectangle( $length, $width)
{
    $area = $length * $width;
    return $area;
}
 
function PerimeterRectangle( $length, $width)
{
    $perimeter = 2 * ($length + $width);
    return $perimeter;
}

$length = 3;
$width = 4;
echo("Area of Rectangle is = " );
echo (AreaRectangle($length, $width)); echo "<br>";
echo( "Perimeter of Rectangle is = ");
echo(PerimeterRectangle($length, $width));


?>