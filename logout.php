<?php

session_start();

session_unset(); //free all session
session_destroy();

setcookie("login","",time()-1);//for delete the cookie //destroy the cookie 
header('location: /gymproject');
?>