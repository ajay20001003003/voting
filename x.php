<?php

$password = "Hello";

$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;

var_dump(password_verify("Hello", $hash));

?>