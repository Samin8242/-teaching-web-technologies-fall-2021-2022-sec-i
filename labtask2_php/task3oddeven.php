<?php
function evenodd($n)
{
    if($n%2==0)
    {
        echo " Even";
    }
    else
    echo "Odd";
}

$n = 10;
echo ("The number is =");
echo(evenodd($n));

?>