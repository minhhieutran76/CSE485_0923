<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>W3CMS</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <img src="./image/logo.png" style="height: 80px;" class="p-2" alt="">

                <ul class="nav flex-column">
                    <?php
                        for($i=0; $i<8; $i++){
                            ?>
                            <li class="nav-item p-3">
                                <i class="bi bi-person-fill text-warning"></i>
                                <a href="#" class="text-decoration-none">HieuHieu</a>
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
                            
                            <?php
                                if(isset($_GET['Id'])){
                                    $Id = $_GET['Id'];
                                

                                $conn = new PDO("mysql:host=localhost;dbname=cse", 'root', 'Nevergon#3lose');
                                $sql = "SELECT * FROM users where id = $Id";
                                $list_sql = $conn->prepare($sql);
                                $list_sql->execute();
                                $row = $list_sql->fetch(PDO::FETCH_ASSOC);
                                
                                }
                            ?>

                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
                                        <div class="form-group mt-3">
                                            <span for="id" class="mb-1">ID:</span>
                                            <input type="text" class="form-control" name="id" value="<?=$row['id']?>">
                                        </div>

                                        <div class="form-group">
                                            <span for="name" class="mb-1">Tên:</span>
                                            <input type="text" class="form-control" name="name" value="<?=$row['username']?>">
                                        </div>

                                        <div class="form-group">
                                            <span for="email" class="mb-1">Email:</span>
                                            <input type="email" class="form-control" name="email" value="<?=$row['email']?>">
                                        </div>

                                        <div class="form-group">
                                            <span for="password" class="mb-1">Mật khẩu:</span>
                                            <input type="password" class="form-control" name="password" value="<?=$row['password_hash']?>">
                                        </div>

                                        <div style="float: right;">
                                            <button type="submit" class="btn btn-success mt-2 ">Sửa</button>
                                            <a class="btn btn-warning mt-2" href="index.php">Quay lại</a>
                                        </div>

                                        
                                    </form>
                                </div>
                            </div>

                            <?php
                                if(isset($_POST['id'])& isset($_POST['name'])&isset($_POST['email'])&isset($_POST['password']) )
                                {   
                                    $Id = $_POST['id'];
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $passwordd = $_POST['password'];
    
                                    // Kết nối đến cơ sở dữ liệu
                                    $conn = new PDO("mysql:host=localhost;dbname=cse", 'root', 'Nevergon#3lose');
                                    
                                    $sql = "UPDATE users SET username = '$name', email = '$email', password_hash = '$passwordd'  WHERE id = '$Id';";
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>