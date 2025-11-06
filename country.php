<?php

$countries = [
        "india"=>"new dhwlhi",
        "usa"=>"washington dc",
        "japan"=>"tokyo",
        "france"=>"paris"
];

ksort($countries);

foreach($countries as $country => $capital)
{
    echo "<center>country : $country - capital:$capital <br><br></center>";
}
?>