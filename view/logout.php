<?php
session_start();
unset($_SESSION);
session_destroy();
//header("Location: ../../");
echo 'supossed to be logged out';
?>