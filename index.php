<?php 
    require_once 'app/controllers/StudentController.php';
    
    $controller = new StudentController();

    $page = $_GET['page'] ?? 'index';
    $id = $_GET['id'] ?? null;

    switch($page){
        case 'create':
            $controller->create();
            break;
        case 'edit':
            $controller->edit($id);
            break;
        case 'destroy':
            $controller->destroy($id);
            break;
        default:
            $controller->index();
            break;
    }

?>