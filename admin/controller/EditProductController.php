<?php
include_once '../app/model/ProductModel.php';
include_once '../app/model/CategoryModel.php';

class EditProductController
{
    private $productModel;
    private $categoryModel;
    public $data = [];

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
    }

    public function renderView($view, $data = null)
    {
        $view = 'view/' . $view . '.php';
        require_once $view;
    }

    public function viewEdit()
    {
        if (isset($_GET['id'])) {
            $idpro = $_GET['id'];

            $this->data['pro_detail'] = $this->productModel->getIdPro($idpro);

            $this->data['listcate'] = $this->categoryModel->getCate();

            $this->renderView('editpro', $this->data);
        } else {
            echo "Không có dữ liệu";
        }
    }


    public function delPro()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $data = $this->productModel->getIdPro($id);
            $file = 'img/' . $data['image'];
            if (file_exists($file)) {
                unlink($file);
            }
            $this->productModel->deletePro($id);
            echo '<script>location.href="index.php?page=main";</script>';
        }
    }
}
