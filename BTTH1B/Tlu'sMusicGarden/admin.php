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

            <?php
                // Kết nối đến cơ sở dữ liệu

                $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Nevergon#3lose");
                
                $sql1 = "select * from users";
                $sql2 = "select * from theloai";
                $sql3 = "select * from tacgia";
                $sql4 = "select * from baiviet";

                $list_sql1 = $conn->prepare($sql1);
                $list_sql1->execute();
                $countusers = $list_sql1->rowCount();

                $list_sql2 = $conn->prepare($sql2);
                $list_sql2->execute();
                $counttheloai = $list_sql2->rowCount();


                $list_sql3 = $conn->prepare($sql3);
                $list_sql3->execute();
                $counttagia = $list_sql3->rowCount();


                $list_sql4 = $conn->prepare($sql4);
                $list_sql4->execute();
                $countbaiviet = $list_sql4->rowCount();
            ?>

            <div class="d-flex justify-content-around">
                <div style="border: 1px solid black;" class="col-md-2 d-inline text-center py-3 px-3">
                    <p class="text-primary">Người dùng</p>
                    <p><?=$countusers?></p>
                </div>

                <div style="border: 1px solid black;" class="col-md-2 d-inline text-center py-3 px-3">
                    <p class="text-primary">Thể loại</p>
                    <p><?=$counttheloai?></p>
                </div>

                <div style="border: 1px solid black;" class="col-md-2 d-inline text-center py-3 px-3">
                    <p class="text-primary">Tác giả</p>
                    <p><?=$counttagia?></p>
                </div>

                <div style="border: 1px solid black;" class="col-md-2 d-inline text-center py-3 px-3">
                    <p class="text-primary">Bài viết</p>
                    <p><?=$countbaiviet?></p>
                </div>
            </div>
        
        <div>

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