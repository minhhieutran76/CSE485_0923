<?php 
    include "./models/Student.php";
    class StudentService{
        public function getAllStudent(){
            //Ket noi database
            try{
                $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");

                //Truy van du lieu
                $sql = "select * from Student";
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
}