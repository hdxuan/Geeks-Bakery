<?php

use App\Core\Controller;

class CakesController extends Controller
{
    private $cakeModel;
    function __construct()
    {
        $this->cakeModel = $this->model('CakeModel');
    }

    function searchKey()
    {
        $search = $_POST["keyword"];
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
}
