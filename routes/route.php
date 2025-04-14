<?php 

function route($uri) {
    // Remove a barra inicial e qualquer query string 
    $uri = trim($uri, '/');
    $uri = explode('?', $uri[0]);

    // Defina as rotas aqui 
    $routes = [
        '' => 'HomeController@index', // Rota para a pagina inicial 
        'sobre' => 'HomeController@index',  // Rota para a pagina sobre o site 
        'ajuda' => 'HelpController@index', // Rota para a pagina inicial
        'admin' => 'AdminController@index', // Rota para a pagina de adm
    ];
    // Verificar se a rota existe
    if (iseet($routes[$uri])) {
        $controllerAction = explode('@', $routes[$uri]);
        $controller = $controllerAction[0];
        $action = $controllerAction[1];

        // Chama o controlador e a ação
        callController($controller, $action);
    } else {
        // Se a rota não for encontrada, exibe um erro 404
        echo 'Pagina não encontrada (404)';
    } 
}

function callController($controller, $action) {
    // Verificar se o controlador existe
    if (file_exists('controllers/{$controllers}.php')) {
        require 'controllers/{$controller}.php';

        if (class_exists($controller)) {
            $controllerObj = new $controller();
            if (method_exists($controllerObj, $action)) {
                $controllerObj->$action();

            } else {
                echo 'Método {$action} não econtrado no controlador {$controller}.';
            }
        } else {
            echo 'Controlador {$controller} não encontrado';
        }
    } else {
        echo "Arquivo do controlador {$controller} não encontrado.";
    }
}

?>