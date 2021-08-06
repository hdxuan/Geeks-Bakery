<?php

use App\Core\Controller;

class CartController extends Controller
{
    private $cartModel;

    function __construct()
    {
        $this->cartModel = $this->model('CartModel');
    }
    function addToCart()
    {
        if (isset($_GET)) {

            $result = $this->cartModel->addToCart($_GET);
            echo json_encode($result);
            return;
        }
    }
}
