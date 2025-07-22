<?php 

    require_once 'app/models/Students.php';

    class StudentController{
        private $model;

        public function __construct()
        {
            $this->model = new Students();
        }

        public function index(){
            $students = $this->model->getAll();
            $tittle = "Student List";
            $view = "app/views/index.php";
            include "app/views/layout.php";
        }

        public function create(){

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $tel = $_POST['tel'];

                $this->model->create($name,$gender,$tel);
                header("Location: index.php");
            }else{
                // echo 'Fail Request';
                $tittle = "Student List";
                $view = "app/views/create.php";
                include "app/views/layout.php";
            }
           
        }

        public function edit($id){

            if($_SERVER['REQUEST_METHOD'] === "POST"){
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $tel = $_POST['tel'];

                $this->model->update($id, $name,$gender,$tel);
                header ("Location: index.php");
            }else{
                $student = $this->model->getById($id);
                $tittle = "Student List";
                $view = "app/views/edit.php";
                include "app/views/layout.php";
            }

           
        }
        public function destroy($id){
            $this->model->delete($id);
            header ("Location: index.php");
        }
    }

?>