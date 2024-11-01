<?php
class AddController
{
    public $data;
    public $categoty;
    public $products;
    public function __construct()
    {
        $this->categoty = new categoryModel();
        $this->products = new ProductModel();
    }

    public function renderView($data, $view)
    {
        extract($data);
        $view = './view/' . $view . '.php';
        require_once $view;
    }
    function Acategory()
    {
        $this->data['category'] = $this->categoty->getcate();
        $this->renderView($this->data, 'addpro');
    }
    function addPro()
    {
        if (isset($_POST['sub'])) {
            $data = [];
            $data['name'] = $_POST['name'];
            $data['view'] = $_POST['view'];
            $data['idcate'] = $_POST['idcate'];
            $data['image'] = $_FILES['image']['name'];
            $file = 'img/' . $data['image'] . '';
            move_uploaded_file($_FILES['image']['tmp-name'], $file);
            $this->products->insertPro($data);
        }
        echo '<script>location.href="index.php?page=categoty";</script>';
    }
}
