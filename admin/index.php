<?php
// session_start();
require_once('../app/model/database.php');
require_once('../app/model/CategoryModel.php');
require_once('../app/model/ProductModel.php');
require_once('../app/model/UserModel.php');
require_once('./controller/AdCategoryController.php');
require_once('./controller/AdProductController.php');
require_once('./controller/AdHomeController.php');
require_once('./controller/AdUserController.php');
require_once('../app/controller/HomeController.php');
require_once('view/header.php');
$data = new Database();
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'detail':
            $detail = new AdProductController();
            break;
        case 'category':
            $viewcate = new AdCategoryController();
            $viewcate->viewCate();
            break;
        case 'addcate':
            $viewadd = new AdCategoryController();
            $viewadd->viewAddCate();
            $addcate = new AdCategoryController();
            $addcate->addCate();
            break;
        case 'delcate':
            $delcate = new AdCategoryController();
            $delcate->delCate();
            break;
        case 'editcate':
            $viewedit = new AdCategoryController();
            $viewedit->viewEditCate();
            $editcate = new AdCategoryController();
            $editcate->editCate();
            break;
        case 'addpro':
            $addpro = new AdHomeController();
            $addpro->addpro();
            $addPro = new AdProductcontroller();
            $addPro->addPro();
            break;
        case 'editpro':
            require_once('view/editpro.php');
            $viewedit = new AdProductcontroller();
            $viewedit->viewEdit();
            $editpro = new AdProductcontroller();
            $editpro->editPro();
            break;
        case 'delpro':
            $delpro = new AdProductcontroller();
            $delpro->delPro();
            break;
        case 'user':
            $viewuser = new AdUserController();
            $viewuser->viewUser();
            break;
        case 'adduser':
            $adduser = new AdUserController();
            $adduser->addUser();
            break;
        case 'deluser':
            $deluser = new AdUserController();
            $deluser->delUser();
            break;
        case 'edituser':
            $viewedit = new AdUserController();
            $viewedit->viewEditUser();
            $edituser = new AdUserController();
            $edituser->editUser();
            break;
        default:
            $home = new AdHomeController();
            $home->home();
            break;
    }
} else {
    $home = new AdHomeController();
    $home->home();
}
require_once('view/footer.php');
