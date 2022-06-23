<?php

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch($url){

        case '/ProjetoIntegrador/App/':
            echo "página inicial";
            break;

        case '/ProjetoIntegrador/App/cursos':
            echo "listagem de cursos";
            break;

        case '/ProjetoIntegrador/App/cursos/form':
            echo "form para adicionar cursos";
            break;

        default:
            echo "Erro 404";
            break;
    }