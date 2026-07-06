<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index_example3.php");
    exit;
}
