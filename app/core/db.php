<?php
class DB {
    private $user = "alex";
    private $pass = "asd";
    private $dbh;

    public function __construct() {
        $this ->dbh = new PDO("mysql:host=localhost;dbname=words", $this->user, $this->pass);
    }

    public function getAllData($table) {
        return $this->dbh->query("SELECT * FROM $table");
    }

    public function addWord($word, $translation, $category_id)
    {
        $this->dbh->query("INSERT INTO words ('word', 'translation', 'category_id') VALUES ($word, $translation, $category_id)");
    }
}