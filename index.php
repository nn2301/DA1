<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="author" content="Untree.co" />
<meta name="description" content="" />
<meta name="keywords" content="bootstrap, bootstrap4" />
<link rel="shortcut icon" href="./public/upload/images/favicon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Riosogood</title>

<?php include "./app/view/header.php" ?>

<?php
require_once('./app/controller/HomeController.php');
require_once('./app/controller/UserController.php');
require_once('./app/controller/ProductController.php');
require_once('./app/controller/ServicesController.php');
require_once('./app/controller/ShopController.php');
require_once('./app/controller/CartController.php');
require_once('./app/controller/AboutController.php');
require_once('./app/controller/CateshopController.php');
require_once('./app/model/UserModel.php');
require_once('./app/model/categoryModel.php');
require_once('./app/model/database.php');
require_once('./app/model/productModel.php');
?>

<?php
if (isset($_GET['act'])) {
    $page = $_GET['act'];

    switch ($page) {
        case 'signin':
            $login = new UserController();
            $login->signinUser();
            break;
        case 'register':
            $signin = new UserController();
            $signin->addUser();
            break;
        case 'shop':
            $shop = new ShopController();
            $shop->getAll();
            break;
            break;
        case 'cart':
            $cart = new CartController();
            $cart->viewCart();
            break;
        case 'about':
            $about = new AboutController();
            $about->viewAbout();
            break;
        case 'blog':
            $blog = new BlogController();
            $blog->viewBlog();
            break;
        case 'services':
            $services = new ServicesController();
            $services->viewServices();
            break;
        case 'detail':
            $product = new ProductController();
            $product->viewDetail();
            break;
        case 'cateshop':
            $cateshop = new CateShopController();
            $cateshop->viewCateShop();
            break;
        default:
            $home = new HomeController();
            $home->getHome();
            break;
    }
} else {
    $home = new HomeController();
    $home->getHome();
}

require_once('./app/view/footer.php');
?>