<?php
class ProductsModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllProducts() {
        $stmt = $this->db->prepare("SELECT * FROM pruduct");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductsNewHome() {
        $stmt = $this->db->prepare("
        SELECT product.name_product, product.price, product.discount, images_product.main_image
        FROM product
        JOIN images_product
        ON product.id = images_product.id_product
        WHERE product.new_product=1 
        ORDER BY product.id  
        DESC LIMIT 8
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
