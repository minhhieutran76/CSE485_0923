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
    }
?>