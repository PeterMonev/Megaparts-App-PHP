<?php 
require_once ('./server/Model/ProductModel.php');

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function getAllProducts() {
        return $this->productModel->getProducts();
    }

    public function getProduct($productID) {
        return $this->productModel->getProduct($productID);
    }

    public function createProduct($data) {
        return $this->productModel->createProduct($data['name'], $data['description'], $data['price'], $data['imageURL']);
    }

    public function updateProduct($productID, $data) {
        return $this->productModel->updateProduct($productID, $data['name'], $data['description'], $data['price'], $data['imageURL']);
    }

    public function deleteProduct($productID) {
        return $this->productModel->deleteProduct($productID);
    }
}

?>