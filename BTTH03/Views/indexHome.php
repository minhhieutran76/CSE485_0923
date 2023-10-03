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

                        <div class="filter">
                            <div class="row justify-content-between mt-5">
                                <div class="col-md-2">
                                    <a href="../Views/add_student.php" class="btn btn-success mb-3">Add User</a>
                                </div>

                                <div class="col-md-2">
                                    <i style="float: right;" class="bi bi-chevron-up bg-warning rounded-circle"></i>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" id="email" placeholder="Nhập email">
                                </div>

                                <div class="form-group col-md-3">
                                    <input type="number" class="form-control" id="number" placeholder="Nhập số">
                                </div>

                                <div class="form-group col-md-3">
                                    <select class="form-control" id="select">
                                        <?php
                                        for($i=1;$i<10;$i++)
                                        {
                                            echo "<option value='option1'>Lựa chọn " .$i. "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">id</th>
                                <th scope="col">tenSinhVien</th>
                                <th scope="col">email</th>
                                <th scope="col">ngaySinh</th>
                                <th scope="col">idLop</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    
                                    foreach($Listt as $li){
                                    ?>
                                    <tr>
                                        <th scope="row"><?=$li->getId()?></th>
                                        <td><?=$li->getTenSinhVien()?></td>
                                        <td><?=$li->getEmail()?></td>
                                        <td><?=$li->getNgaySinh()?></td>
                                        <td><?=$li->getIdLop()?></td>
                                        <td><a href="#"><i class="bi bi-pencil-square"></i></a></td>
                                        <td><a href="../Views/delete_student.php?Id=<?=$li->getId()?>"><i class="bi bi-trash3-fill"></i></a></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>

                            </tbody>
                        </table>

                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>