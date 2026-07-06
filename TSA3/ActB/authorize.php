<?php
session_start();

if (!isset($_SESSION["actb_user_id"])) {
    header("Location: login.php");
    exit;
}