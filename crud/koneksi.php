<?php
$host = "sql204.epizy.com"; 
$username = "epiz_31167060"; 
$password = "0oGGebgXdP"; 
$database = " epiz_31167060_db_mahasiswa"; 
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>