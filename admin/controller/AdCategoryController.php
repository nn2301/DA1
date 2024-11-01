<?php
class AdCategoryController
{
    public $data = [];
    public $category;
    public function __construct()
    {
        $this->category = new CategoryModel();
    }

    public function renderView($view, $data = null)
    {
        $view = 'view/' . $view . '.php';
        require_once $view;
    }

    public function viewCate()
    {
        $this->data['danhMuc'] = $this->category->getCate();
        $this->renderView('category', $this->data);
    }

    function viewEditCate()
    {
        if (isset($_GET['id']) && ($_GET['id'])) {
            $id = $_GET['id'];
            $this->data['cate'] = $this->category->getIdCate($id);
            $this->renderView('editcate', $this->data);
        } else {
            echo "no data";
        }
    }

    public function editCate()
    {
        if (isset($_POST['editcate'])) {
            $data = [];
            $data['id'] = $_POST['idcate'];
            $data['title'] = $_POST['title'];

            // Debugging
            var_dump($data);

            $result = $this->category->updateCate($data);

            if ($result) {
                echo '<script>alert("Cập nhật danh mục thành công")</script>';
            } else {
                echo '<script>alert("Cập nhật danh mục thất bại")</script>';
            }
            echo '<script>location.href="index.php?page=category";</script>';
        }
    }

    function viewAddCate()
    {
        $this->renderView('addcate');
    }

    function addCate()
    {
        if (isset($_POST['addcate'])) {
            $data = [];
            $data['title'] = $_POST['title'];

            $this->category->insertCate($data);
            echo '<script>location.href="index.php?page=category";</script>';
        }
    }


    function delCate()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $data = $this->category->getIdCate($id);
            $this->category->deleteCate($id);
            echo '<script>location.href="index.php?page=category";</script>';
        }
    }
}
