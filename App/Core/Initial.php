<?php

// Define App Directories
defined('ROOT') ?: define('ROOT', dirname(dirname(__DIR__)));

defined('DS') ?: define('DS', DIRECTORY_SEPARATOR);

defined('APP') ?: define('APP', ROOT . DS . 'App');
defined('CONF') ?: define('CONF', APP . DS . 'Configs');
defined('CONT') ?: define('CONT', APP . DS . 'Controllers');
defined('CORE') ?: define('CORE', APP . DS . 'Core');
defined('MODEL') ?: define('MODEL', APP . DS . 'Models');
defined('VIEW') ?: define('VIEW', APP . DS . 'Views');



// databases constant-- k thay đổi
$database = require(CONF . DS . 'database.php');

defined('DB_HOSTNAME') ?: define('DB_HOSTNAME', $database['db_hostname']);
defined('DB_USERNAME') ?: define('DB_USERNAME', $database['db_username']);
defined('DB_PASSWORD') ?: define('DB_PASSWORD', $database['db_password']);
defined('DB_NAME') ?: define('DB_NAME', $database['db_name']);

// require file 

require_once(CORE . DS . "App.php");
require_once(CORE . DS . "Controller.php");
require_once(CORE . DS . "Database.php");

//navigation constant
$site = require(CONF . DS . 'site.php');
defined('SITE') ?: define('SITE', $site);

defined('DOCUMENT_ROOT') ?:  define('DOCUMENT_ROOT', SITE['document Root']);
defined('PUBLIC_URL') ?: define('PUBLIC_URL', DOCUMENT_ROOT . '/public');
defined('IMAGES_URL') ?:  define('IMAGES_URL', PUBLIC_URL .  '/img');


defined('IMAGES_CAKES_URL') ?:  define('IMAGES_CAKES_URL', PUBLIC_URL . '/img/cakes');

defined('ICONS_URL') ?:  define('ICONS_URL', PUBLIC_URL . '/img/icons');
defined('IMAGES_CATEGORY_URL') ?:  define('IMAGES_CATEGORY_URL', PUBLIC_URL . '/img/categories');