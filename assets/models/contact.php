<?php

require_once 'Database.php';

class Contact extends Database
{
    public function __construct()
    {
        parent::__construct();
        $this->initTable();
    }

    private function initTable()
    {
        $this->pdo->query('CREATE TABLE IF NOT EXISTS contact(
    comment VARCHAR(1500),
    email VARCHAR(40)
)');
    }
 
    private function checkComment(string $comment): bool
    {
        return $comment !== '' && strlen($comment) <= 1500;
    }

    private function checkEmail(string $email): bool
    {
        return $email !== '';
    }

    public function createContact(string $comment, string $email)
    {
        if ($this->checkComment($comment) && $this->checkEmail($email)) {
            $stmt = $this->pdo->prepare("INSERT INTO contact (`comment`, `email`) VALUES (:comment, :email)");
            $stmt->bindValue(':comment', htmlspecialchars($comment));
            $stmt->bindValue(':email', htmlspecialchars($email));
            $stmt->execute();
        }
    }
    

}
