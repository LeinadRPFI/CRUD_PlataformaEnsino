<?php

    include 'Controller/CursoController.php';

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch($url){

        case '/':
            echo "página inicial";
        break;

        case '/curso':
            CursoController::index();
        break;

        case '/curso/form':
            CursoController::form();
        break;

        case '/curso/form/save':
            CursoController::save();
        break;

        case '/curso/delete':
            CursoController::delete();
        break;

        default:
            echo "Erro 404";
        break;
    }