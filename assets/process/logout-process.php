<?php
session_start();
unset($_SESSION['userName']);
unset($_SESSION['id']);
session_destroy();
echo 1;
?>