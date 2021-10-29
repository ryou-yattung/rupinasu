<?php
    // $mysqli = @new mysqli('localhost', 'root', 'ecc2200138', 'test');
    $con = mysqli_connect('localhost', 'yattung', 'eccMyAdmin', 'yattung');
    $con ->set_charset('utf8');

    if ($con->connect_errno) {
        error_log('Connection error: ' . $con->connect_errno);
    }