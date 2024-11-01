<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Danh sách người dùng</h4>
                        <div>
                            <a href="index.php?page=adduser"><button type="button" class="btn btn-primary">
                                    Thêm người dùng
                                </button></a>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="" method="post" enctype="multipart/form-data">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Tên người dùng</th>
                                    <th>Địa chỉ</th>
                                    <th>Email</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Mật khẩu</th>
                                    <th>Role</th>
                                    <th>Chức năng</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $listuser = $data['danhSach'];
                                    foreach ($listuser as $item) {
                                        extract($item);
                                        echo '<tr>
                                            <td>' . $id . '</td>
                                            <td>' . $name . '</td>
                                            <td>' . $address . '</td>
                                            <td>' . $email . '</td>
                                            <td>' . $user . '</td>
                                            <td>' . $password . '</td>
                                            <td>' . $role . '</td>
                                        	<td><a href="index.php?page=edituser&id=' . $id . '">Sửa</a> | <a href="index.php?page=deluser&id=' . $id . '">Xóa</a></td>
                                        </tr>';
                                    };
                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <ul class="pagination-list">
                        <li class="pagination-item">
                            <a href="" class="pagination-link">
                                <i class="fa-solid fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">1</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">2</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">3</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">...</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">10</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>