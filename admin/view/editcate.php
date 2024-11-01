<?php
$cate = $data['cate'];
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Cập nhật danh mục</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="idcate" id="idcate" class="form-control" value="<?= $cate['id'] ?>">
                            <label for="">Tên danh mục</label>
                            <input type="text" name="title" id="title" class="form-control" value="<?= $cate['title'] ?>">
                            <input type="submit" value="Cập nhật danh mục" onclick="" name="editcate">
                        </form>
                    </div>
                </div>
            </div>