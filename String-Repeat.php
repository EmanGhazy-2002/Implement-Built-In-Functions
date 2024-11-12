<?php


function String_Repeat($str,$repeat=2,$space=true)
{
  $result="";
  $separatour=$space?" ":"";
  for ($i=0; $i<$repeat;$i++){
      $result .=$str.$separatour;
  }
  return $result;
}


echo String_Repeat("eman")."<br>";
echo String_Repeat("eman",3)."<br>";
echo String_Repeat("eman",3,true)."<br>";