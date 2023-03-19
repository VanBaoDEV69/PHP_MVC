<?php 
require_once '../config/database.php'; // Khai báo file database.php để định nghĩa biến $db
include '../views/layout/user/header.php'; 

require_once '../controllers/HomeController.php';

$controller = new HomeController($db);
$controller->index();

// switch ($action) {
//     case 'index':
//         $controller->index();
//         break;
//     case 'create':
//         $controller->create();
//         break;
//     case 'show':
//         $id = isset($_GET['id']) ? $_GET['id'] : null;
//         $controller->show($id);
//         break;
//     case 'edit':
//         $id = isset($_GET['id']) ? $_GET['id'] : null;
//         $controller->edit($id);
//         break;
//     case 'delete':
//         $id = isset($_GET['id']) ? $_GET['id'] : null;
//         $controller->delete($id);
//         break;
//     default:
//         $controller->index();
//         break;
// }

include '../views/layout/user/footer.php'; 

?>



