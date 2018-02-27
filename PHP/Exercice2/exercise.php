<?php
$password;
$salt;

$longueur = strlen($password);
var_dump($longueur);

$password1length = floor(strlen($password)/2) + (strlen($password) %2);
var_dump($password1length);
$password2length = ceil(strlen($password)/2);
var_dump($password2length);
$passwordfirstpart = substr($password, 0, $password1length);
var_dump($passwordfirstpart);

$passwordsecondpart = substr($password, $password2length);
var_dump($passwordsecondpart);

$saltedpassword = $passwordfirstpart.$salt.$passwordsecondpart;
var_dump($saltedpassword);

