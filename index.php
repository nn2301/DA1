<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaukeFurniture</title>
</head>

<body>

    <?php
    require_once './views/header.php';
    require_once './autoload.php';
    require_once './views/home.php';

    // // Lấy tham số 'act' và đảm bảo an toàn XSS
    // $page = htmlspecialchars($_GET['act'] ?? 'home');

    // // Mảng ánh xạ các trang đến các controller và phương thức tương ứng
    // $controllers = [
    //     'signin' => [UserController::class, 'signinUser'],
    //     'register' => [UserController::class, 'addUser'],
    //     'shop' => [ShopController::class, 'getAll'],
    //     'cart' => [CartController::class, 'viewCart'],
    //     'about' => [AboutController::class, 'viewAbout'],
    //     'blog' => [BlogController::class, 'viewBlog'],
    //     'services' => [ServicesController::class, 'viewServices'],
    //     'detail' => [ProductController::class, 'viewDetail'],
    //     'cateshop' => [CateShopController::class, 'viewCateShop'],
    //     'home' => [HomeController::class, 'getHome'],
    // ];

    // // Lấy controller và phương thức dựa trên `act`, nếu không có thì dùng `home`
    // $action = $controllers[$page] ?? $controllers['home'];
    // [$controller, $method] = $action;
    // $instance = new $controller();
    // $instance->$method();

    require_once './views/footer.php';
    ?>

</body>

</html>