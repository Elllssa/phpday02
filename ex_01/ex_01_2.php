<?php
function my_included_putstr($str){
    echo $str;
}
$chaine = "Bonjour, monde!";
my_included_putstr($chaine);