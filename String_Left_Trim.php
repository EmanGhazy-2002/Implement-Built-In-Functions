<?php

function String_Left_Trim($str, $val = ' ') {
    $result = '';
    $stop = false;

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] !== $val || $stop) {
            $stop = true;
            $result .= $str[$i];
        }
    }
    return $result;
}

echo String_Left_Trim('   eman') . "<br>";
echo strlen(String_Left_Trim('   eman')) . "<br>";
echo String_Left_Trim('   eman ghazy') . "<br>";
