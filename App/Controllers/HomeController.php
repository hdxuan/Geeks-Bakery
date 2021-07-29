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

        // paging
        $definePage = 8;
        $numPage = $this->cakeModel->numPage();

        $pages = ceil($numPage / $definePage);
        $data['pages'] = $pages;

        $currentPage = 1;
        if (isset($_GET['page'])) {
            $currentPage = $_GET['page'];
        }

        $index = ($currentPage - 1) * $definePage;
        $paging = $this->cakeModel->paging($index, $definePage);
        $data['paging'] = $paging;


        $this->view("/home/index", $data);
    }
}
