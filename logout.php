<?php
session_start();
unset ($_SESSION["status"]);
unset ($_SESSION["user_name"]);
echo"<script>window.location.href = 'index.php';</script>";
?>