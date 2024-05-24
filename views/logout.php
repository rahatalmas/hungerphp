<?php
@require '../models/database.php';
session_unset();
session_destroy();
header('location:../views/loginas.php');
?>