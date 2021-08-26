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



    function index()
    {
        // Show all cakes
        $cakes = $this->cakeModel->all();
        if (!$cakes) {
            $cakes = [];
        }
        $data['cakes'] =  $cakes;

        $categories = $this->categoryModel->all();
        $data['categories'] = $categories;

        $this->view("/admin/cakes/index", $data);
    }

    function create()
    {
        $categories = $this->categoryModel->all();
        $data['categories'] = $categories;

        $this->view("/admin/cakes/create", $data);
    }

    function store()
    {
        if (!isset($_POST)) {
            header("Location: " . DOCUMENT_ROOT . "/admin");
        } else {
        }
    }
}
