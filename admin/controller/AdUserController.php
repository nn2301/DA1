<?php
class AdUserController
{
    public $data = [];
    public $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function renderView($view, $data = null)
    {
        $view = 'view/' . $view . '.php';
        require_once $view;
    }

    public function viewUser()
    {
        $this->data['danhSach'] = $this->user->getAllUser();
        $this->renderView('user', $this->data);
    }

    function addUser()
    {
        if (isset($_POST['adduser'])) {
            $data = [];
            $data['name'] = $_POST['name'];
            $data['address'] = $_POST['address'];
            $data['email'] = $_POST['email'];
            $data['user'] = $_POST['user'];
            $data['password'] = $_POST['password'];
            $data['role'] = $_POST['role'];
            $this->user->insertUser($data);
            echo '<script>location.href="index.php?page=user";</script>';
        } else {
            $this->renderView('adduser');
        }
    }

    function delUser()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $this->user->deleteUser($id);
            echo '<script>location.href="index.php?page=user";</script>';
        }
    }

    function viewEditUser()
    {
        if (isset($_GET['id']) && ($_GET['id'])) {
            $id = $_GET['id'];
            $this->data['user'] = $this->user->getIdUser($id);
            $this->renderView('edituser', $this->data);
        } else {
            echo "no data";
        }
    }

    function editUser()
    {
        if (isset($_POST['edituser'])) {
            $data = [];
            $data['name'] = $_POST['name'];
            $data['address'] = $_POST['address'];
            $data['email'] = $_POST['email'];
            $data['user'] = $_POST['user'];
            $data['password'] = $_POST['password'];
            $data['role'] = $_POST['role'];
            $data['id'] = $_POST['iduser'];
            $this->user->updateUser($data);
            echo '<script>alert("Cập nhật thành công")</script>';
            echo '<script>location.href="index.php?page=user";</script>';
        }
    }
}
