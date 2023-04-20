<?php

require_once __DIR__ . '/../models/contact.php';

$contact = new Contact();


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comment']) && isset($_POST['email'])) {
    $comment = $_POST['comment'] ?? '';
    $email = $_POST['email'] ?? '';

    $contact->createContact($comment, $email);
    header("Location: /ProjetPW/index.php");
    exit();
}
?>

