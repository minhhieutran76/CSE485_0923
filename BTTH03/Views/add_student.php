<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../icons-1.11.1/font/bootstrap-icons.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul class="nav flex-column" style="margin-top: 240px;">
                    <?php
                    for($i=0; $i<8; $i++){
                    ?>
                        <li class="nav-item p-3">
                            <i class="bi bi-person-fill text-warning"></i>
                            <a href="#" class="text-decoration-none">Id</a>
                            <i class="bi bi-caret-right-fill text-warning"></i>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-11">
                        <div class="row justify-content-between p-3">
                            <div class="Dashboard col-md-4 p-2">
                                <i class="fas fa-bars fa-2x px-2"></i>
                                <h2 class="d-inline">Dashboard</h2>
                            </div>

                            <div class="Sreachh col-md-4 p-2">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Tìm Kiếm" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
                                    <div class="form-group mt-3">
                                        <span for="id" class="mb-1">ID:</span>
                                        <input type="id" class="form-control" name="id" placeholder="Nhập id">
                                    </div>

                                    <div class="form-group">
                                        <span for="name" class="mb-1">Tên:</span>
                                        <input type="text" class="form-control" name="name" placeholder="Nhập tên">
                                    </div>

                                    <div class="form-group">
                                        <span for="email" class="mb-1">Email:</span>
                                        <input type="email" class="form-control" name="email" placeholder="Nhập email">
                                    </div>

                                    <div class="form-group">
                                        <span for="name" class="mb-1">Ngày sinh:</span>
                                        <input type="text" class="form-control" name="date" placeholder="Nhập ngày sinh">
                                    </div>

                                    <div class="form-group">
                                        <span for="id" class="mb-1">ID lớp:</span>
                                        <input type="id" class="form-control" name="idLop" placeholder="Nhập id lớp">
                                    </div>

                                    <div style="float: right;">
                                        <button type="submit" class="btn btn-success mt-2 ">Thêm</button>
                                        <a class="btn btn-warning mt-2" href="../Views/indexHome.php">Quay lại</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <?php
                            if(isset($_POST['id'])&isset($_POST['name'])&isset($_POST['email'])& isset($_POST['date'])&isset($_POST['idLop']) )
                            {
                                $Id = $_POST['id'];
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $date = $_POST['date'];
                                $idLop = $_POST['idLop'];

                                // Kết nối đến cơ sở dữ liệu
                                $conn = new PDO("mysql:host=localhost;dbname=QuanLySinhVien", 'root', 'Nevergon#3lose');
                                
                                $sql = "INSERT INTO SinhVien (id, tenSinhVien, email, ngaySinh, idLop) VALUES ('$Id','$name','$email' ,'$date','$idLop');";
                                $list_sql = $conn->prepare($sql);
                                $list_sql->execute();

                                if ($list_sql->rowCount()>0) {
                                    echo "Cập nhật thành công!";
                                } else {
                                    echo "Lỗi: " . $list_sql->errorInfo();
                                }
                                

                            }
                        ?>

                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>