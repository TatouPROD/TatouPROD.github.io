<?php

require_once 'Database.php';

class Avis extends Database
{
    public function __construct()
    {
        parent::__construct();
        $this->initTable();
    }

    private function initTable()
    {
        $this->pdo->query('CREATE TABLE IF NOT EXISTS avis(
    commentaire VARCHAR(170),
    rating INTEGER
)');
    }
 
    private function checkComment(string $comment): bool
    {
        return $comment !== '' && strlen($comment) <= 170;
    }

    private function checkRating(string $rating): bool
    {
        return $rating <=5 && $rating >=0;
    }

    public function createAvis(string $comment, string $rating)
    {
        if ($this->checkComment($comment) && $this->checkRating($rating)) {
            $stmt = $this->pdo->prepare("INSERT INTO avis (`commentaire`, `rating`) VALUES (:comment, :rating)");
            $stmt->bindValue(':comment', htmlspecialchars($comment));
            $stmt->bindValue(':rating', htmlspecialchars($rating));
            $stmt->execute();
        }
    }
    

    public function getAvis()
    {
        return $this->pdo->query('SELECT * FROM avis')
                         ->fetchAll();
    }

    public function getGoodAvis()
    {
        return $this->pdo->query('SELECT * FROM avis WHERE rating>=4')
                         ->fetchAll();
    }


}
