<?php

namespace App;

session_start();

require_once "Config/portefolio.ini.php";

/**********************************
 * AUTOLOADER
 *********************************/

// L'autoloader va chercher et inclure les fichiers classes en cas de nécessité
function autoloader($class)
{
    $class = str_replace("App\\", "", $class);
    $class = str_replace("\\", "/", $class);

    if(file_exists($class . ".class.php"))
        include $class . ".class.php";
}

// Appel l'autoloader si une classe est requis
spl_autoload_register("App\autoloader");

/**********************************
 * CONTROLLER
 *********************************/

$uri        = $_SERVER["REQUEST_URI"];
$offset     = strpos($uri, '?');

if ($offset)
    $uri = substr($uri, 0, $offset);

$_SESSION["uri"] = $uri;

if(!file_exists(__ROAD_FILE__)){
    die("Le fichier " . __ROAD_FILE__ . " n'existe pas");
}

$road = json_decode(file_get_contents(__ROAD_FILE__), true);

if(empty($road[$uri]) || empty($road[$uri]["controller"]) || empty($road[$uri]["action"]))
    if($uri != "/404")
        header("Location: 404");
    else
        die();

$controller         = ucfirst(strtolower($road[$uri]["controller"]));
$action             = strtolower($road[$uri]["action"]);
$controllerFile     = "Controller/" . $controller . ".controller.php";

if(!file_exists($controllerFile))
    die("Le controller " . $controllerFile . " n'existe pas");

include $controllerFile;

$controller = "App\\Controller\\".$controller;
if( !class_exists($controller))
    die("La classe ".$controller." n'existe pas");

$objectController = new $controller();

if(!method_exists($objectController, $action))
    die("L'action " . $action . " n'existe pas");

$objectController->$action();