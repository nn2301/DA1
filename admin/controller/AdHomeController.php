<?php
class AdHomeController
{
    private $category;
    private $product;
    private $data;
    function __construct()
    {
        $this->category = new CategoryModel();
        $this->product = new ProductModel();
    }
    public function renderViewAdmin($view, $data)
    {
        $view = 'view/' . $view . '.php';
        require_once $view;
    }

    function addpro()
    {
        $this->data['dsdm'] = $this->category->getCate();
        $this->renderViewAdmin('addpro', $this->data);
    }

    function home()
    {
        $this->data['dsdm'] = $this->category->getCate();
        $this->data['dssp'] = $this->product->getAllPro();
        $this->renderViewAdmin('main', $this->data);
    }
}
