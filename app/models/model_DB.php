<?php
class model_DB extends Controller {
    protected $db;
    protected $items = [];

    public function __construct() {
        $this->db = new DB();
    }
    public function getAllData()
    {
        $data = $this->db->getAllData("category");

        while ($row = $data->fetch(PDO::FETCH_ASSOC)){
            $this->items[Controller::$i]["name"] = $row["name"];
            Controller::$i++;
        }
        Controller::$i = 0;
        return $this->items;
    }
}