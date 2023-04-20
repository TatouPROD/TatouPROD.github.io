<?php

require_once __DIR__ . '/../models/avis.php';

$avis = new Avis();


if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['comment']) && isset($_GET['rating'])) {
    $comment = $_GET['comment'] ?? '';
    $rating = $_GET['rating'] ?? '';

    $avis->createAvis($comment, $rating);
    header("Location: /ProjetPW/index.php");
    exit();
}
?>

