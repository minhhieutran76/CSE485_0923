<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

                <img style="height: 95px;" class="pl-0 pt-4 pr-4 pb-4" src="../img/pic1.png" alt="">
                
                <ul class="nav flex-column">
                    <?php
                        for($i = 1;$i<10;$i++)
                        {
                            ?>
                            <li class="nav-item p-3">
                                <i class="fa fa-user  d-inline text-warning"></i>
                                <a class="nav-link text-dark p-0  d-inline" href="#">UserUser</a>
                                <i class="fas fa-caret-right d-inline text-warning"></i>
                            </li>
                            <?php
                        }
                    ?>
                  
                </ul>

            </div>

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-11">
                        <div class="row justify-content-between p-4">
                            <div class="Dashboard d-inline col-md-4">
                                <i class="fas fa-bars d-inline fa-2x px-1"></i>
                                <h2 class="d-inline" >Dashboard</h2>
                            </div>

                            <div class="searchh d-inline col-md-3">
                            <div class="input-group mb-3 mt-1">
                                <span class="input-group-text" id="basic-addon1"> <i class="bi bi-search"></i> </span>
                                <input type="text" class="form-control" placeholder="Tìm Kiếm" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>



                        <div class="filter">
                            <div class="row justify-content-between p-3">
                                <div class="d-inline col-md-2">
                                    
                                    <p class="d-inline text-warning" >Add User</p>
                                </div>

                                <div class="d-inline col-md-2">
                                <i style="float: right;" class="bi bi-chevron-up bg-warning rounded-circle mr-2"></i>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <?php
                                // lấy dữ liệu qua id
                                if(isset($_GET['Id']))
                                {
                                    $id = $_GET['Id'];
                                   

                                    // Kết nối đến cơ sở dữ liệu
                                    $servername = "localhost";
                                    $database = "cse";
                                    $username = "root";
                                    $password = "123456";
                                    $conn = mysqli_connect($servername, $username, $password, $database);  
                                    
                                    $sql = "select * from users where id = '$id';";
                                    $data = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_assoc($data);

                                    $name = $row['username'];
                                    $email = $row['email'];
                                    $pass = $row['password_hash'];

                                }
                            ?>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
                                        <div class="form-group">
                                        <label for="name">ID:</label>
                                        <input type="text" class="form-control form-control-plaintext" name="id" placeholder="Nhập tên" value="<?= isset($id)? $id:''?>" readonly> 
                                        </div>
                                        <div class="form-group">
                                        <label for="name">Tên:</label>
                                        <input type="text" class="form-control" name="name" placeholder="Nhập tên" value="<?= isset($name)? $name:''?>"> 
                                        </div>
                                        <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email" value="<?= isset($email)?$email:'' ?>" > 
                                        </div>
                                        <div class="form-group">
                                        <label for="password">Mật khẩu:</label>
                                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" value=" <?= isset($pass)?$pass:'' ?>"> 
                                        </div>
                                        <button type="submit" class="btn btn-warning mt-2">Lưu</button>
                                        
                                    </form>
                                </div>
                            </div>


                            <?php
                        
                                if(isset($_POST['name'])&isset($_POST['email'])&isset($_POST['password'])&isset($_POST['id']))
                                {

                                    // Kết nối đến cơ sở dữ liệu
                                    $servername = "localhost";
                                    $database = "cse";
                                    $username = "root";
                                    $password = "123456";
                                    $conn = mysqli_connect($servername, $username, $password, $database);                                     

                                    $name = htmlspecialchars($_POST['name']);
                                    $email = htmlspecialchars($_POST['email']);
                                    $passwordd = htmlspecialchars($_POST['password']);
                                    $id = htmlspecialchars($_POST['id']);

                                    $sql = "UPDATE users SET username = '$name', email = '$email', password_hash = '$passwordd'  WHERE id = '$id';";

                                    if (mysqli_query($conn, $sql)) {
                                        echo "Cập nhật thành công!";
                                    } else {
                                        echo "Lỗi: " . mysqli_error($conn);
                                    }
                                    

                                }


                                
                            ?>
                        </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>