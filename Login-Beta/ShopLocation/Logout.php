<?php
session_start();
session_destroy();
header('Location: ../SLlogin.php');
exit;
?>
