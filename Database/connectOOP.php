<?php

    abstract class Connection { /*abstract class of connection*/

        protected $host;    /*initilizing fields*/
        protected $user;
        protected $pass;
        protected $database;

        private function setvar() { /*to connect our DB*/
            //For Local Host
            $this->host = 'localhost';
            $this->user ='root';
            $this->pass = 'root';
            $this->database = 'project';

            // For Remote Host
            // $this->host = 'eu-cdbr-west-01.cleardb.com';
            // $this->user = 'b791ecf6946e63';
            // $this->pass = 'fbcf8801';
            // $this->database = 'heroku_11219bb6d274632'
        }

        
        public function connect() { /*connect method*/
            $this->setvar();

            $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->database);  

            if (mysqli_connect_error()) {     /*checking for errors(connection)*/           
                return null;

            } else {
                return $this->conn;
            }
        }
    }
?>
