<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'project');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insert($id_product, $name_product, $id_type_product) {
            $result = mysqli_query($this->dbcon, "INSERT INTO product(id_product, name_product, id_type_product) VALUES('$id_product', '$name_product', '$id_type_product')");
            return $result;
       }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM product");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM product WHERE id_product = '$userid'");
            return $result;
        }

        public function update($name_product, $id_type_product, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE product SET  
			name_product='$name_product' , 
            id_type_product='$id_type_product'
			WHERE id_product='$userid'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM product WHERE id_product = '$userid'");
            return $deleterecord;
        }

    }
    

?>