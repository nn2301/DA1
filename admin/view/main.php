<?php
$products = isset($data['dssp']) ? $data['dssp'] : [];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Các sản phẩm</h4>
                    <div>
                        <a href="index.php?page=addpro"><button type="button" class="btn btn-primary">
                                Thêm sản phẩm
                            </button></a>
                    </div>
                </div>
                <div class="content table-responsive table-full-width">
                    <form action="" method="post" enctype="multipart/form-data">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Chức năng</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($products as $product) {
                                    echo '
                                    <tr>
                                        <td>' . $product['id'] . '</td>
                                        <td>' . $product['title'] . '</td>
                                        <td>' . $product['price'] . '</td>
                                        <td><img width="100px" height="100px" src="../public/upload/images/' . $product['image'] . '" class="img-fluid product-thumbnail" alt""></td>
                                        <td>
                                            <a href="index.php?page=editpro&id=' . $product['id'] . '">Sửa</a> |
                                            <a href="index.php?page=delpro&id=' . $product['id'] . '">Xóa</a>
                                        </td>
                                    </tr>
                                    ';
                                }
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
    </div>
</div>