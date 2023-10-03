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

                            <div class="filter">
                                <div class="row justify-content-between mt-5">
                                    <div class="col-md-2">
                                        <a href="add_user.php" class="btn btn-success mb-3">Add User</a>
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

                                    <button type="button" style="width: 80px; height: 38px;" class=" btn btn-warning col-md-2 mx-2">Delete</button>
                                    <button type="button" style="width: 80px; height: 38px;" class=" btn btn-warning col-md-2 mx-2">Add</button>

                                </div>
                                
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">registration_date</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            $perPage = 10; // Số lượng dòng trên mỗi trang
                                            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại
                                            $offset = ($currentPage - 1) * $perPage; //Số phần tử bỏ qua
    
    
                                            
                                            // Truy vấn dữ liệu từ bảng users
                                            $conn = new PDO("mysql:host=localhost;dbname=cse", 'root', 'Nevergon#3lose');
                                            $sql = "SELECT * FROM users LIMIT $perPage OFFSET $offset";
                                            $list_sql = $conn->prepare($sql);
                                            $list_sql->execute();
                                                while($row = $list_sql->fetch(PDO::FETCH_ASSOC)) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row['id'] . "</td>";
                                                    echo "<td>" . $row['username'] . "</td>";
                                                    echo "<td>" . $row['email'] . "</td>";
                                                    echo "<td>" . $row['registration_date'] . "</td>";
                                                    echo "<td><i class='bi bi-record-fill text-warning'></i></td>";
                                                    echo "<td><a href='#'><i class='bi bi-shield-shaded'></i></a></td>";
                                                    echo "<td><a href='edit.php?Id={$row['id']}'><i class='bi bi-pen'></i></a></td>";
                                                    echo "<td><a data-bs-toggle='modal' data-bs-target='#{$row['id']}'><i class='bi bi-trash3'></i></a></td>";
                                                    echo "</tr>";

                                                    ?>
                                                           <div class="modal fade" id="<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Bạn có chắc chắn muốn xóa?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <a href='delete.php?Id=<?=$row['id']?>' class="btn btn-primary" >Delete</a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                    <?php        
                                                    }
                                            ?>
                                            
                                        </tbody>

                                    
                                </table>

                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>

                                        <!-- Số trang và liên kết sẽ được tạo ra ở đây -->
                                        <?php
                                            $countSql = "SELECT COUNT(*) AS total FROM users";
                                            $countResult = $conn-> prepare($countSql);
                                            $countResult->execute();
                                            $row = $countResult->fetch(PDO::FETCH_ASSOC);
                                            $totalRecords = $row['total'];
                                             
                                            $sql = "SELECT * FROM users LIMIT $perPage OFFSET $offset";
                                            $users = $conn->prepare($sql);
                                            $users->execute();

                                            // Tính toán số trang và liên kết phân trang ở đây
                                            $totalPages = ceil($totalRecords / $perPage);
                                            for ($i = 1; $i <= $totalPages; $i++) {
                                                echo "<li class='page-item'><a class='page-link' href='?page=" . $i . "'>" . $i . "</a></li>";
                                            }
                                        ?>

                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </nav>

                            </div>
                        </div>

                        <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>