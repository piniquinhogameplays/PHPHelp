<?php 

include 'controllers/HomeController.php';
include 'controllers/SobreController.php';
include 'controllers/ProdutoController.php';

// Definir a rota 
$rota = $_GET['rota'] ?? 'home';

switch ($rota) {
    casa 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    casa 'sobre':
        $controller = new SobreController();
        $controller->index();
        break;
        
    casa 'produto':
        $controller = new ProdutoController();
        $controller->mostrar($_GET['id'] ?? null);
        break;
    
    default:
        echo '</h1>404 - Pagina não encontrada</h1>'
        break;    
}
?>