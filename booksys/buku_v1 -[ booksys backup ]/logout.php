<?php
session_start();
$_SESSION['USERNANE'] = "";
session_destroy();
echo"<script>document.location.href='index.php';</script>";
?>
