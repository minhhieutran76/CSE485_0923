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
                            <a href="login.php" class="d-inline text-decoration-none text-dark">TRANG CHỦ</a>
                            <a href="#" class="d-inline text-decoration-none text-dark mx-2">ĐĂNG NHẬP</a>
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
                $sql = "select * from users ;";                
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

                $row = $list_sql->fetch(PDO::FETCH_ASSOC);
                
                if(isset($GET_['error'])){
                    echo "Tài khoản hoặc mật khẩu không chính xác";
                }
                                                  

            ?>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
                                        <div class="form-group mt-3">
                                            <label for="name" class="mb-1">Tên:</label>
                                            <input type="text" class="form-control" name="name" placeholder="Nhập tên">
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="mb-1">Mật khẩu:</label>
                                            <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                                        </div>

                                        <div class="d-inline">
                                            <input class="d-inline mt-2" type="checkbox" id="checkbox" name="checkbox" value="1">
                                            <p class="d-inline">Remember Me</p>
                                        </div>

                                        <div>
                                            <button type="submit" style="margin-left: 365px" class="btn btn-warning mt-2">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
            <?php
                if(isset($_POST['name'])&isset($_POST['password'])){
                    $name = $_POST['name'];
                   
                    $passwordd = $_POST['password'];
                    $sql = "select * from users where usersname = '$name' and pass = '$passwordd' ;";                
                    $list_sql = $conn->prepare($sql);
                    $list_sql->execute();
                    

                   
                 
                    if($list_sql->rowCount()>0){
                        header('location:admin.php');
                    }
                    else{
                        echo "<p class='text-center'>Tài khoản hoặc mật khẩu không chính xác</p>";
                    }
                    
                }



                
            ?>

            <div class="container">
                <div class="row" style="margin-top: 25px">
                    <div class="col-md-12 floor">
                        <h4 class="text-center bg-secondary p-3">TLU'S MUSIC GARDEN</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>