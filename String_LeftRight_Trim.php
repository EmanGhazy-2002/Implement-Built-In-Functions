<?php


function String_Left_Trim($str, $val = ' ')
{
    $result = '';
    $stop = false;

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] !== $val || $stop) {
            $stop = true; // Stop skipping once we find the first non-$val character
            $result .= $str[$i];
        }
    }
    return $result;
}



function String_Right_Trim($str, $val = ' ')
{
    $result = '';
    $stop = false;

    for ($i =strlen($str)-1; $i >=0 ; $i--) {
        if ($str[$i] !== $val || $stop) {
            $stop = true;
            $result = $str[$i] . $result;
        }
    }
    return $result;
}

function Trim_Both($str,$val=' '){
    return String_Right_Trim(String_Left_Trim($str,$val),$val);
}


echo String_Right_Trim('   eman  ') . "<br>";
echo strlen(String_Right_Trim('   eman  ')) . "<br>";

echo String_Left_Trim('   eman  ') . "<br>";
echo strlen(String_Left_Trim('   eman  ')) . "<br>";

echo Trim_Both('   eman  ') . "<br>";
echo strlen(Trim_Both('   eman  ')) . "<br>";
