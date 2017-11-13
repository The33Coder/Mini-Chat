<?php
try {
    $db =  new PDO('mysql:host=localhost:8889;dbname=openclass;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
