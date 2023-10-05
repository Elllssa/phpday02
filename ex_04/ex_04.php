<?php
function my_password_hash($password){
    $salt = uniqid();
    $hash = md5($password . $salt);
    $result = array("hash"=>$hash, "salt"=>$salt);
    return $result;
}
function my_password_verify( $password, $salt, $hash) {
    $hashedPasswordVerify = md5($password . $salt);
    return $hashedPasswordVerify === $hash;
    
}