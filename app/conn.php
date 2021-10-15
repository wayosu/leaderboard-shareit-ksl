<?php
    $mysqli = new mysqli("localhost", "root", "", "db_leaderboard_shareit");

    if ($mysqli->connect_error) {
        die('Koneksi bermasalah ' . $mysqli->connect_error);
    }
?>