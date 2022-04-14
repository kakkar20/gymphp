<?php

session_start();

session_unset(); //free all session
session_destroy();

header('location: /gymproject');
?>