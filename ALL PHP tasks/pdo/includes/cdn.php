<?php 
$pdo = new PDO(
    dsn: "mysql:host=localhost;dbname=collage_records",
    username: "root",
    password: "",
    options: [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);

?>