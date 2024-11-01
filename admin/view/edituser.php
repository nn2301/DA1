<?php
$user = $data['user'];
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Cập nhật người dùng</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="" method="post" enctype="multipart/form-data">
                            <label for="">Danh sách người dùng</label>
                            <label for="">Tên người dùng</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?= $user['name'] ?>">
                            <label for="">Địa chỉ</label>
                            <input type="text" name="address" id="address" class="form-control" value="<?= $user['address'] ?>">
                            <label for="">Email</label>
                            <input type="text" name="address" id="email" class="form-control" value="<?= $user['email'] ?>">
                            <label for="">Tên đăng nhập</label>
                            <input type="text" name="user" id="user" class="form-control" value="<?= $user['user'] ?>">
                            <label for="">Mặt khẩu</label>
                            <input type="password" name="password" id="pass" class="form-control" value="<?= $user['password'] ?>">
                            <label for="">Role</label>
                            <select name="role" id="role" class="form-control">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>
                            <input type="hidden" name="iduser" value="<?= $user['id'] ?>">
                            <input type="submit" value="Cập nhật người dùng" onclick="" name="edituser">
                        </form>

                    </div>

                </div>
            </div>