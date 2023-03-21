<?php
include 'functions.php';

if (
    isset($_POST, $_POST['uName'], $_POST['uPass'])
    && !empty($_POST['uName']) && !empty($_POST['uPass'])
) {
    checkCredentials($_POST['uName'], $_POST['uPass']);
} else {
    header('location: login-form.php');
    exit;
}
