<?php
    require_once('connectOOP.php'); /*import connection to DB*/

    class


    Show extends Connection{  /*create class of "show"*/
        private $connection;
        private $sql;

        public function __construct()   /*constructor*/
        {

            $this->connection = $this->connect();

        }

        public function get_connect(){  /*get connection*/

            return $this->connection;
        }

        protected function send_query($sql){    /*method need to send queries*/

            $this->sql = $sql;
            $queryresult = $this->connection->query($sql);
            $productDB = $queryresult->fetch_all(MYSQLI_NUM);
            $queryresult->free_result();

            return $productDB;

        }


        public function select_table($table){   /*table selection*/

            $sqlquery = "SELECT * from {$table}";   /*sql code of show from DB*/

            return $this->send_query($sqlquery);
        }
     
    }

?>
