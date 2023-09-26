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
                        <div class="col-md-5 d-inline">
                            <img src="./image/logo1.png" style="width: 180px;" alt="">
                            <a href="#" class="d-inline text-decoration-none text-dark"><b>TRANG CHỦ</b></a>
                            <a href="login.php" class="d-inline text-decoration-none text-dark mx-2">ĐĂNG NHẬP</a>
                        </div>

                        <div class="col-md-3 d-inline p-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nội dung cần tìm">
                                <button style="float: right;" class="btn btn-outline-secondary d-inline ">Tìm</button>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col-md-12">
                <img src="./image/content.png" style="width: 100%; height: 400px;" alt="">
            </div>

            <h4 class="text-center text-primary p-2">TOP BÀI HÁT YÊU THÍCH</h4>

            <?php
            // Kết nối đến cơ sở dữ liệu

            $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Nevergon#3lose");
                                                    

            $sql = "select * from tacgia join baiviet on tacgia.ma_tgia = baiviet.ma_tgia;";
            $list_sql = $conn->prepare($sql);
            $list_sql->execute();

            

            // xử lý kết quả
                    while($row = $list_sql->fetch())
                    {
                        ?>
                                <div class="baihat col-md-3 d-inline">
                                    <img src="./image/<?= $row[2] ?>" alt="">
                                    <a class="text-decoration-none" href="detail.php?mabv=<?=$row[3]?>"><p class="text-center" ><?= $row[5]?></p></a>
                                </div>

                        <?php
                    }
                    ?>

        
        </div>
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