<?php

function String_Length($str)
{
    $count=0;
    while (!empty($str[$count])) $count++;

    return $count;
}

echo String_Length("eman")."<br>";
echo String_Length("eman ghazy")."<br>";