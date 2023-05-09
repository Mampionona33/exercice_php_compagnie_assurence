<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
require "./models/conducteurModel.php";
require "./models/tarifModel.php";
create_table_conducteur();
create_table_tarif();
populate_tarif();

switch ($uri) {
    case "/":
        include_once "./view/coducteur.php";
        $title = home_page()[0];
        $content = home_page()[1];
        include_once "./template/template.php";
        break;
    case "/info":
        phpinfo();
        break;
    case "/create":
        if ($_POST) {
            var_dump($_POST);
        }
        include_once "./view/coducteur.php";
        $title = form_create()[0];
        $content = form_create()[1];
        include_once "./template/template.php";
        break;
    default:
        echo "404 not found";
        break;
}
