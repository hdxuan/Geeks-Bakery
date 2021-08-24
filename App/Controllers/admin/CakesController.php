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

        $this->view("/admin/cakes/index", $data);
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

        $this->view("/cakes/Categories", $data);
    }

    function Detail()
    {
        if (isset($_GET)) {
            $detail = $this->cakeModel->detailCake($_GET['id']);
            $data['detail'] = $detail;

            $this->view("/cakes/Detail", $data);
        } else {
            return " khong co banh";
        }
    }
}
