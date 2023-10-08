<?php
    include "./services/ClassService.php";
    class ClassController{
        public function index(){
            // Goi du lieu tu ClassService
            $ClassService = new ClassService();
            $List = $ClassService->getAllClass();

            // Render du lieu lay duoc ra HomePage
            include "./views/indexClass.php";
        }

        public function delete(){
            $Id = $_GET['id'];
            $Del = new ClassService();
            $Del->delete_Class($Id);
            header('location:/index.php?c=Class');
        }

        public function add(){
            if(isset($_POST['name'])){
                $name = $_POST['name'];
                $Add = new ClassService();
                $Add->add_Class($name);
                header('location:/index.php?c=Class');
            }
        }

        public function idClass(){
            if(isset($_GET['id'])){
                $Id = $_GET['id'];
                $Edit = new ClassService();
                $row = $Edit->idClass($Id);
                include "./views/edit_Class.php";
            }
        }

        public function edit(){
            if(isset($_POST['id'])&isset($_POST['name'])){
                $Id = $_POST['id'];
                $name = $_POST['name'];
                $Edit = new ClassService();
                $Edit->edit_Class($name,$Id);
                header('location:/index.php?c=Class');
            }
        }

    }
?>