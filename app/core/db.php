<?php
class DB {
    private $user = "alex";
    private $pass = "12345";
    private $dbh;

    public function __construct() {
        $this ->dbh = new PDO("mysql:host=localhost;dbname=\"learnwords\"", $this->user, $this->pass);
    }

    public function getAllData($table) {
        return $this->dbh->query("SELECT * FROM $table");
    }
}