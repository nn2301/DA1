<?php
class AddProducts
{
    public $data;
    public $products;
    public function __construct()
    {

        $this->products = new ProductModel();
    }

    function addPro()
    {
        if (isset($_POST['sub'])) {
            $data = [];
            $data['idcate'] = $_POST['idcate'];
            $data['title'] = $_POST['title'];
            $data['price'] = $_POST['price'];
            $data['image'] = $_FILES['image']['name'];
            $file = '../public/upload/images/' . $data['image'];
            move_uploaded_file($_FILES['image']['tmp_name'], $file);

            $this->products->insertPro($data);
        }
        echo '<script>location.href="index.php?page=categoty";</script>';
    }
    function delPro()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $data = $this->products->getIdPro($id);
            if ($data && isset($data['image'])) {
                $file = '../public/upload/products/' . $data['image'];
                if (file_exists($file)) {
                    unlink($file);
                } else {
                    echo "File does not exist.";
                }
            }
            $this->products->deletePro($id);
        }
        echo '<script>location.href="index.php?page=categoty";</script>';
    }
}
