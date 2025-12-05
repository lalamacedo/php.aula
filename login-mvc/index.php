<?php
require_once __DIR__ . '/controllers/LoginController.php';

if (!isset($_SESSION)) {
    session_start();
}

$controller = new LoginController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'logar':
        $controller->logar();
        break;

    case 'painel':
        $controller->painel();
        break;

    default:
        $controller->index();
        break;
}
