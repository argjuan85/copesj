<?php

function changeWord(string $string, string $word) 
{
    $array = explode(" ", $string);
   
    foreach ($array as $key=>$wordarray)
    {
        if ($wordarray == $word)
        {
            $array[$key] =  strtoupper($word);
        }
    }
 $result=  implode(" ", $array);
 return($result);
}