<?php
require_once '../models/SlidesModel.php';
require_once '../models/ProductsModel.php';


class HomeController {
    private $slidesModel;
    private $productsModel;

    public function __construct($db) {
        $this->slidesModel = new SlidesModel($db);
        $this->productsModel = new ProductsModel($db);
    }

    public function index() {
        $slides = $this->slidesModel->getAllSlidesHome();
        $products = $this->productsModel->getProductsNewHome();
        include '../views/home_user.php';
    }
}
?>