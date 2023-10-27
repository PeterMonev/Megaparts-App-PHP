<?php 
require '../Model/Database/config.php';

require 'config.php';

class ProductModel {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
    }


}

?>