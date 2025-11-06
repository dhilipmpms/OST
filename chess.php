<?php

echo "<table border=1 cellspacing'0'>";

for($row=1;$row<=8;$row++)
{
    echo "<tr>";
    for($col=1;$col<=8;$col++)
    {
        $color = ($row+$col)%2==0?"White":"blach";
        echo "<td height='40' width='40' bgcolor='$color'>";
    }
    echo "</tr>";
}
echo "</table>";

?>