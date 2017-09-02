<?php
    require_once 'vendor/autoload.php';

    Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('html');
$twig = new Twig_Environment($loader);
$html = $twig->loadTemplate('index.html');
$title = "HELLO TWIG";
$h1 = "HELLO TWIG";

echo $html->render(array(
    'title' => $title,
    'h1' => $h1
));
?>