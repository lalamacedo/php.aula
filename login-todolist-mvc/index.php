<?php
require_once __DIR__ . '/config/database.php';

$route = $_GET['route'] ?? 'login';

switch ($route) {

    case 'login':
        require_once __DIR__ . '/controllers/LoginTodoListController.php';
        (new LoginTodoListController())->login($mysqli);
        break;

    case 'tarefas':
        require_once __DIR__ . '/controllers/TarefaController.php';
        (new TarefaController($mysqli))->index();
        break;

    case 'criar':
        require_once __DIR__ . '/controllers/TarefaController.php';
        (new TarefaController($mysqli))->criar();
        break;

    case 'excluir':
        require_once __DIR__ . '/controllers/TarefaController.php';
        (new TarefaController($mysqli))->excluir();
        break;

    case 'editar':
        require_once __DIR__ . '/controllers/TarefaController.php';
        (new TarefaController($mysqli))->editar();
        break;

    case 'atualizar':
        require_once __DIR__ . '/controllers/TarefaController.php';
        (new TarefaController($mysqli))->atualizar();
        break;
}
