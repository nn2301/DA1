<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Danh mục sản phẩm</h4>
                        <div>
                            <a href="index.php?page=addcate"><button type="button" class="btn btn-primary">
                                    Thêm danh mục
                                </button></a>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="" method="post" enctype="multipart/form-data">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th>Chức năng</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $listmovie = $data['danhMuc'];
                                    foreach ($listmovie as $movies) {
                                        extract($movies);
                                        echo '<tr>
                                            <td>' . $id . '</td>
                                        	<td><a href="">' . $title . '</a></td>
                                        	<td><a href="index.php?page=editcate&id=' . $id . '">Sửa</a> | <a href="index.php?page=delcate&id=' . $id . '">Xóa</a></td>
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