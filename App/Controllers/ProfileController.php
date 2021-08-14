<?php

use App\Core\Controller;

class ProfileController extends Controller
{
    private $userModel;

    function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    function index()
    {
        $this->view("/profile/Profile");
    }
}
