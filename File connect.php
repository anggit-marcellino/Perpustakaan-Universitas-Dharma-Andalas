<?php


session_start();
$db = new mysqli("localhost", "root", "", "db_crud");
if($db->errno > 0) {
    echo "Koneksi gagal";
    exit;

}