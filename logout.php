<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/25/2018
 * Time: 7:15 PM
 */

$cookie_name ="email";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time()+ 86400, "/");
header("Location: login.html");

?>