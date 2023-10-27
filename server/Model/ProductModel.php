<?php
require '../Model/Database/config.php';
require_once '../config.php';

class ProductModel {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function getProducts() {
        $stmt = $this->db->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProduct($productID) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE productID = :productID");
        $stmt->execute([':productID' => $productID]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createProduct($name, $description, $price, $imageURL) {
        $stmt = $this->db->prepare("INSERT INTO products (name, description, price, imageURL) VALUES (:name, :description, :price, :imageURL)");
        return $stmt->execute([':name' => $name, ':description' => $description, ':price' => $price, ':imageURL' => $imageURL]);
    }

    public function updateProduct($productID, $name, $description, $price, $imageURL) {
        $stmt = $this->db->prepare("UPDATE products SET name = :name, description = :description, price = :price, imageURL = :imageURL WHERE productID = :productID");
        return $stmt->execute([':productID' => $productID, ':name' => $name, ':description' => $description, ':price' => $price, ':imageURL' => $imageURL]);
    }

    public function deleteProduct($productID) {
        $stmt = $this->db->prepare("DELETE FROM products WHERE productID = :productID");
        return $stmt->execute([':productID' => $productID]);
    }
}

?>