<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center mt-2">Thêm sinh viên</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="row justify-content-between p-3">
                <div class="menu col-md-5 mt-3">
                    <a class="text-decoration-none text-dark px-3" href="/index.php?c=Class">Lớp</a>
                    <a class="text-decoration-none text-dark px-3" href="/index.php">Sinh viên</a>
                </div>

                <div class="Sreachh col-md-4 p-2">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" placeholder="Tìm Kiếm" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul class="nav flex-column mt-3">
                    <?php
                    for($i=0; $i<6; $i++){
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
                <div class="col-md-11">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Tên sinh viên:</span>
                                    <input type="text" class="form-control" name="name" placeholder="Nhập tên">
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Email:</span>
                                    <input type="email" class="form-control" name="email" placeholder="Nhập email">
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Ngày sinh:</span>
                                    <input type="date" class="form-control" name="ngaysinh" placeholder="Nhập ngày sinh">
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">ID Lớp:</span>
                                    <input type="text" class="form-control" name="idlop" placeholder="Nhập id lớp">
                                </div>

                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success mt-2 ">Thêm</button>
                                    <a class="btn btn-warning mt-2" href="/index.php">Quay lại</a>
                                </div>          
                            </form>
                        </div>
                    </div>
                </div>

                <?php                        
                    if(isset($_POST['name'])&isset($_POST['email'])&isset($_POST['ngaysinh'])&isset($_POST['idlop']))
                    {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $ngaysinh = $_POST['ngaysinh'];
                        $idlop = $_POST['idlop'];
                        // Kết nối đến cơ sở dữ liệu
                        $conn = new PDO("mysql:host=localhost;dbname=QuanLySinhVien", 'root', 'Nevergon#3lose');   
                        $sql = "INSERT INTO Student (tenSinhVien, email, ngaySinh, idLop) VALUES ('$name', '$email', '$ngaysinh', '$idlop');";
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>