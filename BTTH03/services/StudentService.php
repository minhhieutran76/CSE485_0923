<?php 
    include "./models/Student.php";
    class StudentService{
        public function getAllStudent(){
            //Ket noi database
            try{
                $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");

                //Truy van du lieu
                $sql = "select * from SinhVien";
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

                //Xu ly ket qua tra ve
                $ListStudent = [];
                while($row = $list_sql->fetch(PDO::FETCH_ASSOC)){
                    $Student = new Student($row['id'], $row['tenSinhVien'], $row['email'], $row['ngaySinh'], $row['idLop']);
                    $ListStudent[] = $Student;
                }
                return $ListStudent;

            }catch(PDOException $e){
                //$conn = null
                //echo $e->getMessage();
                return $ListStudent = [];
            }
        }

        public function delete_Student($Id){
            $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");
            $sql = "delete from SinhVien where id = $Id;";
            $list_sql = $conn->prepare($sql);
            $list_sql->execute();
        }

        public function add_Student($name, $email, $ngaysinh, $idlop){
            $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");
            $sql = "INSERT INTO SinhVien (tenSinhVien, email, ngaySinh, idLop) VALUES ('$name', '$email', '$ngaysinh', '$idlop');";
            $list_sql = $conn->prepare($sql);
            $list_sql->execute();
        }

        public function idStudent($Id){
            if(isset($_GET['id'])){
                $Id = $_GET['id'];
                $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");
                $sql = "select * from SinhVien where id = $Id;"; 
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

                $row = $list_sql->fetch(PDO::FETCH_ASSOC);
                return $row;
            }
        }

        public function edit_Student($name, $email, $ngaysinh, $idlop, $Id){
            $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");
            $sql = "UPDATE SinhVien SET tenSinhVien = '$name', email = '$email', ngaySinh = '$ngaysinh', idLop = '$idlop'  WHERE id = $Id ;";
            $list_sql = $conn->prepare($sql);
            $list_sql->execute();
        }
    }