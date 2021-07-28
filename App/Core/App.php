<?php

namespace App\Core;

class App
{

    private $controller = "Home";
    private $action = "Index";
    private $params = [];

    function __construct()
    {
        $array = $this->UrlProcess();


        // xua ly Controller
        if (file_exists(CONT . DS . ucfirst($array[0]) . "Controller.php")) {
            $this->controller = ucfirst($array[0]);
            //xu ly xong thi xoa $array[0] la Home ra khoi mang
            unset($array[0]);
        }

        $this->controller = $this->controller . "Controller";

        // mac dinh luon luon la trang Home
        require_once(CONT . DS . $this->controller . ".php");

        $this->controller = new $this->controller;


        //xu ly Function/Action
        if (isset($array[1])) {
            // kt trong $this->controller co ton tai ham $array[1] k
            if (method_exists($this->controller, $array[1])) {
                $this->action = $array[1];
            }
            unset($array[1]);
        }

        //xu ly Params
        // kiem tra xem $array co ton tai thi gan gtri mang do array_values: nguoc lai rong
        $this->params = $array ? array_values($array) : [];

        //  tham so 1: ten lop, ham tham so t2 :params
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    function UrlProcess()
    {

        if (isset($_GET['url'])) {
            return explode("/", filter_var(trim($_GET['url'], "/")));
        } else {
            return [
                "Home",
                "Index"
            ];
        }
    }
}
