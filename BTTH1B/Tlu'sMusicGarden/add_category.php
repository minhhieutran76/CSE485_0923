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
        </div>
    </div>

    <div class="container">
            <div class="row ">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <h3 class = "text-center">THÊM MỚI THỂ LOẠI</h3>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Tên thể loại</span>
                        <input type="text" class="form-control" name = 'Theloai'>
                    </div>

                    <div style="float: right;">
                        <a href="#"><button type="submit" class="btn btn-success mt-2 ">Thêm</button></a>
                        <a class="btn btn-warning mt-2" href="category.php ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>

        <?php
            if(isset($_GET['Theloai'])){
                $theloaii = $_GET['Theloai'];
                $conn = new PDO("mysql:host=localhost;dbname=BTTH01_CSE485", "root", "Nevergon#3lose");

                // Kiểm tra tên thể loại có tồn tại trong cơ sở dữ liệu hay không
                $checkQuery = "SELECT COUNT(*) FROM theloai WHERE ten_tloai = :theloai;";
                $checkStmt = $conn->prepare($checkQuery);
                $checkStmt->bindParam(':theloai', $theloaii);
                $checkStmt->execute();
                $count = $checkStmt->fetchColumn();

                if($count > 0){
                    echo "Tên thể loại đã tồn tại";
                } else {
                    // Thực hiện câu lệnh INSERT khi tên thể loại không trùng
                    $insertQuery = "INSERT INTO theloai (ten_tloai) VALUES (:theloai)";
                    $insertStmt = $conn->prepare($insertQuery);
                    $insertStmt->bindParam(':theloai', $theloaii);
                    $insertStmt->execute();
                    echo "Thêm thể loại thành công";
                }
            }
        ?>

    <div class="container">
        <div class="row" style="margin-top: 100px">
            <div class="col-md-12 floor">
                <h4 class="text-center bg-secondary p-3">TLU'S MUSIC GARDEN</h4>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>