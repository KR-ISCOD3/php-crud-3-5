<?php 

    require_once './config/database.php';

    class Students{
        private $conn;

        public function __construct()
        {
            $this->conn = Database::connection();
        }

        public function getAll(){
            return $this->conn->query("SELECT * FROM `students`")->fetch_all(MYSQLI_ASSOC);
        }

        public function getById($id){
            $stmt = $this->conn->prepare("SELECT * FROM `students` WHERE id = ?");
            $stmt->bind_param("i",$id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

        public function create($name,$gender,$tel){
            // INSERT INTO `students`(`name`, `gender`, `tel`) VALUES (?,?,?)
            $stmt = $this->conn->prepare("INSERT INTO `students`(`name`, `gender`, `tel`) VALUES (?,?,?)");
            // INSERT INTO `students`(`name`, `gender`, `tel`) VALUES ("s","s","s")
            $stmt->bind_param("sss",$name,$gender,$tel);
            return $stmt->execute();
        }

        public function update($id,$name,$gender,$tel){
            $stmt = $this->conn->prepare("UPDATE `students` SET `name`= ?,`gender`= ?,`tel`= ? WHERE `id` = ?");
            $stmt->bind_param("sssi",$name,$gender,$tel,$id);
            return $stmt->execute();
        }
    }


?>