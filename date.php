<?php

$date1 = new DateTime("27-08-2025");
$date2 = new DateTime("11-11-2025");

$diff = $date1->diff($date2);

echo "day for 27-08-2025 to 11-11-2025<br>";
echo "difference is :".$diff->days."days";

?>