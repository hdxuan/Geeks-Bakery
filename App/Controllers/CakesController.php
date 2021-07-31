<?php

use App\Core\Controller;

class CakesController extends Controller
{
    private $cakeModel;
    private $categoryModel;
    function __construct()
    {
        $this->cakeModel = $this->model('CakeModel');
        $this->categoryModel = $this->model('CategoryModel');
    }

    function searchKey()
    {
        $search = $_GET["keyword"];
        $cakes = $this->cakeModel->getByKeyword($search);

        $data['search'] = $search;
        $data['cakes'] = $cakes;

        $this->view("/cakes/search", $data);
    }

    function index()
    {
        // Show all cakes
        $cakes = $this->cakeModel->all();
        if (!$cakes) {
            $cakes = [];
        }
        $data['cakes'] =  $cakes;

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

        $this->view("/cakes/index", $data);
    }

    function Category()
    {
        $id = $_GET['id'];

        $detail = $this->categoryModel->showCategory($id);
        $data['detail'] = $detail;

        $categories = $this->categoryModel->all();
        $data['categories'] = $categories;

        $caketype = $this->categoryModel->eachTypeCategory($id);
        $data['caketype'] = $caketype;

        $this->view("/cakes/Detail", $data);
    }
}
