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
}