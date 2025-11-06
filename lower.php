<?php

function isLower($str)
{
    return ctype_lower($str);
}
echo isLower("helLo")?"all lowercase ":"not all lowecase";

?>