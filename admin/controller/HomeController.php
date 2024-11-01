<?php
class AddHomeController
{
    public $data;
    public $products;
    public function __construct()
    {
        $this->products = new ProductModel();
    }
    public function renderView($data, $view)
    {
        extract($data);
        $view = './view/' . $view . '.php';
        require_once $view;
    }
    public function viewDetail()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            $id = 0;
        }
        $spct = $this->products->getIdPro($id);
        if (is_array($spct)) {
            $this->data['spct'] = $spct;
            $this->renderView($this->data['spct'], 'detail');
        } else {
            echo 'khong tim thay san pham:';
        }
    }

    function Aproducts()
    {
        $this->data['products'] = $this->products->getproducts();
        $this->renderView($this->data, 'home');
    }
}
