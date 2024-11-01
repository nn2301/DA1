<?php
class AeditProController
{
    public $data;
    public $category;
    public $products;
    public $updatepro;

    public function __construct()
    {
        $this->category = new CategoryModel();
        $this->products = new ProductModel();
        $this->updatepro = new Updatepro();
    }

    public function renderView($data, $view)
    {
        extract($data);
        $view = './view/' . $view . '.php';
        require_once $view;
    }

    function editPro()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $this->data['categoty'] = $this->category->getcate();
            $this->data['product'] = $this->products->getIdPro($id);

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [];
                $data['idcate'] = $_POST['idcate'];
                $data['title'] = $_POST['title'];
                $data['price'] = $_POST['price'];
                $data['id'] = $id;

                // Xử lý hình ảnh mới nếu có
                if (!empty($_FILES['image']['name'])) {
                    $data['image'] = $_FILES['image']['name'];
                    $file = '../public/upload/images/' . $data['image'];
                    move_uploaded_file($_FILES['image']['tmp_name'], $file);

                    // Xóa hình ảnh cũ
                    if (file_exists('../public/upload/images/' . $this->data['product']['image'])) {
                        unlink('../public/upload/images/' . $this->data['product']['image']);
                    }
                } else {
                    $data['image'] = $this->data['product']['image'];
                }

                $this->updatepro->updatePro($data);
                echo '<script>location.href="index.php?page=categoty";</script>';
            } else {
                $this->renderView($this->data, 'editpro');
            }
        }
    }
}
