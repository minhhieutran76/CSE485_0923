<?php 
    include "./models/Class.php";
    class ClassService{
        public function getAllClass(){
            //Ket noi database
            try{
                $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");

                //Truy van du lieu
                $sql = "select * from Lop";
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

                //Xu ly ket qua tra ve
                $ListClass = [];
                while($row = $list_sql->fetch(PDO::FETCH_ASSOC)){
                    $Class = new Class_($row['id'], $row['tenLop']);
                    $ListClass[] = $Class;
                }
                return $ListClass;

            }catch(PDOException $e){
                //$conn = null
                //echo $e->getMessage();
                return $ListClass = [];
            }
        }

        public function delete_Class($Id){
            $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");
            $sql = "delete from Lop where id = $Id;";
            $list_sql = $conn->prepare($sql);
            $list_sql->execute();
        }


        public function add_Class($name){
            $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");
            $sql = "INSERT INTO Lop (tenLop) VALUES ('$name');";
            $list_sql = $conn->prepare($sql);
            $list_sql->execute();
        }

        public function idClass($Id){
            if(isset($_GET['id'])){
                $Id = $_GET['id'];
                $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");
                $sql = "select * from Lop where id = $Id;"; 
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

                $row = $list_sql->fetch(PDO::FETCH_ASSOC);
                return $row;
            }
        }

        public function edit_Class($name,$Id){
            $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");
            $sql = "UPDATE Lop SET tenLop = '$name'  WHERE id = $Id ;";
            $list_sql = $conn->prepare($sql);
            $list_sql->execute();
        }
            
    }
