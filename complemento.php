<?php
session_start();
$usr = $_SESSION['user_log'];
    echo json_encode($usr);
?>