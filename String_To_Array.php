<?php

/*function String_Length($str)
{
    $count=0;
    while (!empty($str[$count])) $count++;

    return $count;
}*/
function String_to_Array($str)
{
    $result=[];
    for ($i=0;$i<strlen($str) /*String_Length($str)*/ ;$i++)
        $result[]=$str[$i];

    return $result;
}

echo "<pre>";
print_r(String_to_Array("Eman Ghazy"));
echo "</pre>";