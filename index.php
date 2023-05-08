<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch ($uri) {
    case "/":
        echo "home";
        break;
    case "/info":
        phpinfo();
        break;
    case "/create":
        include_once "./view/coducteur.php";
        $title = form_create()[0];
        $content = form_create()[1];
        include_once "./template/template.php";
        break;
    default:
        echo "404 not found";
        break;
}
