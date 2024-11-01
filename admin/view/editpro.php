<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Cập nhật sản phẩm</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="index.php?page=editpro" method="post" enctype="multipart/form-data">
                            <?php
                            $cate = new CategoryModel;
                            $listcate = $cate->getCate();
                            $product = new ProductModel;
                            $pro_detail = $product->getIdPro($_GET['id']);
                            ?>
                            <label for="idcate">Danh mục sản phẩm</label>
                            <select name="idcate" id="idcate" class="form-control">
                                <?php
                                foreach ($listcate as $data) {
                                    echo '<option value="' . $data['id'] . '"' . ($pro_detail['idcate'] == $data['id'] ? ' selected' : '') . '>' . $data['title'] . '</option>';
                                }
                                ?>
                            </select>
                            <label for="title">Tên sản phẩm</label>
                            <input type="text" name="title" id="title" class="form-control" value="<?= $pro_detail['title'] ?>">
                            <label for="price">Giá sản phẩm</label>
                            <input type="number" name="price" id="price" class="form-control" value="<?= $pro_detail['price'] ?>">
                            <label for="image">Hình ảnh</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <div><img src="img/<?= $pro_detail['image'] ?>" height="300px" width="300px" alt=""></div>
                            <input type="hidden" name="image_old" value="<?= $pro_detail['image'] ?>">
                            <input type="hidden" name="idpro" value="<?= $pro_detail['id'] ?>">
                            <input type="submit" value="Cập nhật sản phẩm" name="edit" class="btn btn-info btn-fill pull-left">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>