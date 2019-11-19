<?php
session_start();
unset($_SESSION['sess_client']);
session_destroy();
header('Location: authen.php');
?>