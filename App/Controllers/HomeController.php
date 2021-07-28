<?php

use App\Core\Controller;

class HomeController extends Controller
{
    private $cakeModel;
    private $categoryModel;

    function __construct()
    {
        $this->cakeModel = $this->model('CakeModel');
        $this->categoryModel = $this->model('CategoryModel');
    }

    function Index()
    {
        $cakes = $this->cakeModel->all();
        if (!$cakes) {
            $cakes = [];
        }

        $data['cake'] = $cakes;
        $data['bestSellers'][] = $cakes[2];
        $data['bestSellers'][] = $cakes[5];
        $data['bestSellers'][] = $cakes[9];
        $data['bestSellers'][] = $cakes[1];
        $data['bestSellers'][] = $cakes[2];

        $data['categories'] = $this->categoryModel->all();

        // echo '<pre>';
        // print_r($data);
        // echo '<pre>';

        $this->view("/home/index", $data);
    }
}
