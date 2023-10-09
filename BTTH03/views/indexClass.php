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
    <h3 class="text-center mt-2">Quản lý danh sách lớp</h3>
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
                <a href="/views/add_Class.php" class="btn btn-success mb-3">Thêm lớp</a>
                <div class="row align-item-center">
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
                        <th scope="col">ID</th>
                        <th scope="col">Tên lớp</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($List as $list){
                            ?>
                            <tr>
                                <th scope="row"><?=$list->getId()?></th>
                                <td><?=$list->getTenLop()?></td>
                                <td><a href="/index.php?c=Class&f=idClass&id=<?=$list->getId()?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a data-bs-toggle="modal" data-bs-target="#id<?=$list->getId()?>"><i class="bi bi-trash3-fill"></i></a></td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="id<?=$list->getId()?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa lớp</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn có chắc chắn muốn xóa lớp có id: <?=$list->getId()?> ?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                    <a class="btn btn-primary" href="/index.php?c=Class&f=delete&id=<?=$list->getId()?>">Xóa</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>