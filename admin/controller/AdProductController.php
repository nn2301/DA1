<?php

class AdProductcontroller
{
    public $data = [];
    public $product;
    public $category;

    public function __construct()
    {
        $this->product = new ProductModel();
        $this->category = new CategoryModel();
    }

    public function renderView($view, $data = null)
    {
        $view = 'view/' . $view . '.php';
        require_once $view;
    }

    public function viewPro()
    {
        $this->data['product'] = $this->product->getAllPro();
        $this->renderView('addpro', $this->data);
    }

    public function addPro()
    {
        if (isset($_POST['addpro'])) {
            $data = [];
            $data['title'] = $_POST['title'];
            $data['price'] = $_POST['price'];
            $data['idcate'] = $_POST['idcate'];
            $data['image'] = $_FILES['image']['name'];
            $file = 'img/' . $data['image'];
            move_uploaded_file($_FILES['image']['tmp_name'], $file);
            $this->product->insertPro($data);
            echo '<script>location.href="index.php?page=main";</script>';
        }
    }

    public function delPro()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $data = $this->product->getIdPro($id);
            $file = 'img/' . $data['image'];
            if (file_exists($file)) {
                unlink($file);
            }
            $this->product->deletePro($id);
            echo '<script>location.href="index.php?page=main";</script>';
        }
    }

    public function viewEdit()
    {
        if (isset($_GET['id']) && ($_GET['id'])) {
            $id = $_GET['id'];
            $this->data['listcate'] = $this->category->getCate();
            $this->data['pro_detail'] = $this->product->getIdPro($id);
            $this->renderView('editpro', $this->data);
        } else {
            echo "Không có dữ liệu";
        }
    }

    public function editPro()
    {
        if (isset($_POST['edit'])) {
            $data = [];
            $data['title'] = $_POST['title'];
            $data['price'] = $_POST['price'];
            $data['idcate'] = $_POST['idcate'];
            $data['image'] = $_FILES['image']['name'];
            $data['id'] = $_POST['idpro'];
            $data['image_old'] = $_POST['image_old'];
            if ($data['image'] == '') {
                $data['image'] = $data['image_old'];
            } else {
                $file = 'img/' . $data['image'];
                move_uploaded_file($_FILES['image']['tmp_name'], $file);
                $file_old = 'img/' . $data['image_old'];
                if (file_exists($file_old)) {
                    unlink($file_old);
                }
            }
            $this->product->updatePro($data);
            echo '<script>alert("Cập nhật thành công")</script>';
            echo '<script>location.href="index.php?page=main";</script>';
        }
    }
}
