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
                                <button style="float: right;" class="btn btn-outline-secondary d-inline">Tìm</button>
                            </div>
                        </div>
                </div>
            </div>

            <?php
                // Kết nối đến cơ sở dữ liệu
                $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Nevergon#3lose");
                                                        


                if(isset($_GET['mabv'])){
                    $mabv = $_GET['mabv'];
                    $sql = "select * from  baiviet join theloai on baiviet.ma_tloai = theloai.ma_tloai join tacgia on tacgia.ma_tgia = baiviet.ma_tgia where ma_bviet = $mabv;";
                    $list_sql = $conn->prepare($sql);
                    $list_sql->execute();
                    $row = $list_sql->fetch(PDO::FETCH_ASSOC);


                    $ten_bhat = $row['ten_bhat'];
                    $ten_tloai = $row['ten_tloai'];
                    $tomtat = $row['tomtat'];
                    $noidung = $row['noidung'];
                    $ten_tgia = $row['ten_tgia'];
                    $hinh_tgia = $row['hinh_tgia'];
                }
            ?>

<div class="container">
            <div class="row">
                <div class="img col-md-4">
                    <img src="./image/<?=$hinh_tgia?>" style="margin-left: 100px;" alt="">
                </div>

                <div class="noidung col-md-6">
                    <h3 class=" text-primary"> <?=$ten_bhat?></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="d-inline">Bài hát:</h6>
                            <p class="d-inline"><?=$ten_bhat?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <h6 class="d-inline">Thể loại:</h6>
                            <p class="d-inline"><?=$ten_tloai?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <h6 class="d-inline">Tóm tắt:</h6>
                            <p class="d-inline"><?=$tomtat?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <h6 class="d-inline">Nội dung:</h6>
                            <p class="d-inline"><?=$noidung?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <h6 class="d-inline">Tác giả:</h6>
                            <p class="d-inline"><?=$ten_tgia?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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