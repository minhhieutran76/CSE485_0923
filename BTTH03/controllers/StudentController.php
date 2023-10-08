<?php
    include "./services/StudentService.php";
    class StudentController{
        public function index(){
            // Goi du lieu tu ClassService
            $StudentService = new StudentService();
            $Listt = $StudentService->getAllStudent();

            // Render du lieu lay duoc ra HomePage
            include "./views/indexStudent.php";
        }

        public function delete(){
            $Id = $_GET['id'];
            $Del = new StudentService();
            $Del->delete_Student($Id);
            header('location:/index.php');
        }

        public function add(){
            if(isset($_POST['name'])&isset($_POST['email'])&isset($_POST['ngaysinh'])&isset($_POST['idlop'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $ngaysinh = $_POST['ngaysinh'];
                $idlop = $_POST['idlop'];
                $Add = new StudentService();
                $Add->add_Student($name, $email, $ngaysinh, $idlop);
                header('location:/index.php');
            }
        }

        public function idStudent(){
            if(isset($_GET['id'])){
                $Id = $_GET['id'];
                $Edit = new StudentService();
                $row = $Edit->idStudent($Id);
                include "./views/edit_Student.php";
            }
        }

        public function edit(){
            if(isset($_POST['id'])&isset($_POST['name'])&isset($_POST['email'])&isset($_POST['ngaysinh'])&isset($_POST['idlop'])){
                $Id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $ngaysinh = $_POST['ngaysinh'];
                $idlop = $_POST['idlop'];
                $Edit = new StudentService();
                $Edit->edit_Student($name, $email, $ngaysinh, $idlop, $Id);
                header('location:/index.php');
            }
        }
    }
?>