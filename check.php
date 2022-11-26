<?php
require_once 'init.php';
if (!isLoggedIn()) {
    $_SESSION['logged_in'] = false;
}
?>