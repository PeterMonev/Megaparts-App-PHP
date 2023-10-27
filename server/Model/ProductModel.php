<?php
require '../Model/Database/config.php';

require 'config.php';

class ProductModel
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function getProducts()
    {
        $stament = $this->db->prepare("SELECT * FROM products");
        $stament->execute();
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProduct($productId)
    {
        $stament = $this->db->prepare("SELECT * FROM products Where productID = $productId");
        $stament->execute([':productID' => $productId]);
        return $stament->fetch(PDO::FETCH_ASSOC);
    }

    public function createProduct($name, $description, $price, $imageUrl)
    {
        $stament = $this->db->prepare("INSERT INTO products (name, description, price, imageUrl) VALUES (:name, :description, :price, imageUrl)");
        $stament->execute([':name' => $name, ':description' => $description, ':price' => $price, ':imageUrl' => $imageUrl]);
    }

    public function updateProduct($productID, $name, $description, $price, $imageURL)
    {
        $stament = $this->db->prepare("UPDATE products SET name = :name, description = :description, price = :price, imageURL = :imageURL WHERE productID = :productID");
        return $stament->execute([':productID' => $productID, ':name' => $name, ':description' => $description, ':price' => $price, ':imageURL' => $imageURL]);
    }

    public function deleteProduct($productID)
    {
        $stament = $this->db->prepare("DELETE FROM products WHERE productID = :productID");
        return $stament->execute([':productID' => $productID]);
    }
}
