<?php
    class Database
    {
        private $connection = null;

        public function __construct() {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db_name = "beer-craft-db";

            // Create connection
            $this->connection = new mysqli($servername, $username, $password, $db_name);

            // Check connection
            if ($this->connection->connect_error) {
                throw new Exception("Connection failed: " . $this->connection->connect_error);
            }
            $this->connection->set_charset("utf8");
            return true;
        }

        public function __destruct(){
            if(!is_null($this->connection)){
                $this->connection->close();
            }
        }

        public function select($query){
            $result = $this->connection->query($query);
            $returnData = [];

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $returnData[] = $row;
                }

                return [
                    'status'=>true,
                    'data'=>$returnData
                ];
            } else {
                return [
                    'status'=>false,
                    'data'=>null
                ];
            }
        }

        public function insert($query){
            // $result = $this->connection->query($query);
            // $results = [];
            return $this->makeCUD("Error while inserting:",$query);
            
        }
        public function update($query){
            // $result = $this->connection->query($query);
            // $results = [];

            return $this->makeCUD("Error while updating:",$query);
            
        }
        public function delete($query){
            // $result = $this->connection->query($query);
            // $results = [];

            return $this->makeCUD("Error while deleting:",$query);
            
        }
        //create = insert ; update = update; delete = delete
        private function makeCUD($errorMessage, $query)
        {
            if ($this->connection->query($query) === TRUE) {
                return ['status' => true];
            } else {
                throw new Exception($errorMessage. " " . $this->connection->error);
            }
        }
    }
?>
    