<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row justify-content-between p-3">
                        <div class="col-md-6 d-inline">
                            <a href="#" class="d-inline text-decoration-none text-dark">Administration</a>
                            <a href="admin.php" class="d-inline text-decoration-none text-dark mx-2">Trang chủ</a>
                            <a href="indexBtap1B.php" class="d-inline text-decoration-none text-dark mx-2">Trang ngoài</a>
                            <a href="category.php" class="d-inline text-decoration-none text-dark mx-2">Thể loại</a>
                            <a href="#" class="d-inline text-decoration-none text-dark mx-2">Tác giả</a>
                            <a href="#" class="d-inline text-decoration-none text-dark mx-2">Bài viết</a>
                        </div>

                        
                </div>
            </div>

            <div class="col-md-2 m-3">
                <a href="add_category.php" type="button" class="btn btn-warning text-light">Thêm mới</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên thể loại</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Kết nối đến cơ sở dữ liệu

                        $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Nevergon#3lose");
                        
                        $sql = "select * from theloai;";
                        $list_sql = $conn->prepare($sql);
                        $list_sql->execute(); 

                    //foreach ($list_sql as $row)
                    while($row = $list_sql->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <tr>
                            <td><?=$row['ma_tloai']?></td>
                            <td><?=$row['ten_tloai']?></td>
                            <td><a href="edit_category.php?Id=<?=$row['ma_tloai']?>" class="bi bi-pencil-square"></a></td>
                            <td><a data-bs-toggle="modal" data-bs-target="#<?=$row['ma_tloai']?>"><i class="bi bi-trash3-fill"></i></a></td>

                            <div class="modal fade" id="<?=$row['ma_tloai']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận xóa</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn chắc chắn muốn xóa?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <a  type="button" class="btn btn-primary" href="delete_category.php?Id=<?=$row['ma_tloai']?>">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>



    <div class="container">
        <div class="row" style="margin-top: 25px">
            <div class="col-md-12 floor">
                <h4 class="text-center bg-secondary p-3">TLU'S MUSIC GARDEN</h4>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>