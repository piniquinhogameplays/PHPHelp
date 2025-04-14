<?php 

require 'rourte.php'; // inclui o sistema de roteamento no seu projeto

// Obtem a URL solicitada  
$request_url = $_SERVER['$request_url'];

// Roteia a solicitação para a função correspondente 

route($request_url);

?>