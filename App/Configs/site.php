<?php

// đổi cổng localhost
$defaultPort = "8888";

// config sidebar navigation option
$documentRoot = "http://" . $_SERVER['SERVER_NAME'] . ":$defaultPort/Geeks-Bakery";

return [
    'document Root' => $documentRoot
];
