<?php

abstract class Database
{
    protected PDO $pdo;

    public function __construct()
    {
        $dbFile = dirname(__FILE__) . '/database.db';

        // Créer un fichier de base de données vide s'il n'existe pas
        if (!file_exists($dbFile)) {
            touch($dbFile);
        }

        // Connexion à la base de données SQLite
        $this->pdo = new PDO('sqlite:' . $dbFile);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
