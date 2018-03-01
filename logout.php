<?php
session_start();
unset($_SESSION['u']);
session_destroy();
header("Location: index.html");
exit;
?>