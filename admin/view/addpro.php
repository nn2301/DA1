<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thêm sản phẩm</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="index.php?page=addpro" method="post" enctype="multipart/form-data">
                            <label for="">Danh mục sản phẩm</label>
                            <select name="idcate" id="cate" class="form-control" required>
                                <?php
                                $listcate = $data['dsdm'];
                                $kq = '';
                                foreach ($listcate as $item) {
                                    extract($item);
                                    $kq .= '<option value="' . $id . '">' . $title . '</option>';
                                };
                                echo $kq;
                                ?>
                            </select>


                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                            <label for="">Giá sản phẩm</label>
                            <input type="text" name="price" id="price" class="form-control" required>
                            <label for="">Hình ảnh</label>
                            <input type="file" name="image" id="image" class="form-control" required>
                            <input type="submit" value="Thêm sản phẩm" onclick="" name="addpro">
                        </form>

                    </div>

                </div>
            </div>