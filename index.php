<?php
$url = rtrim(@$_GET['url'], '/');
$url = explode('/', $url);
require "controllers/{$url[0]}.php";
$controller = new $url[0]();

if (isset($url[1])){
    if (isset($url[2])){
        $controller->{$url[1]}($url[2]);
    } else{
        $controller->{$url[1]}();
    }
}
?>