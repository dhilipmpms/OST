<?php

function Number($n)
{
    $r = $n > 30? "Greater than 30":
        ($n>20? "Greater than 20":
        ($n >10 ? "greater than 10":
        "Enter a number greateer than 10"));
    
    echo $n.":".$r."<br>";
}

echo Number(5);
echo Number(40);
echo Number(20);
echo Number(25);
?>


