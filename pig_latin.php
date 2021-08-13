<?php 
$string = "The quick brown fox";

function toPigLatin($str) {
    $res = '';
    foreach (explode(' ', $str) as $word)
        $res .= substr($word, 1) . $word[0] . "ay" . " ";
    return ucfirst(strtolower($res));
}

echo toPigLatin($string);
?>