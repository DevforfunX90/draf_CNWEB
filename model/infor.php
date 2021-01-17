<?php
    class infor {
        //Db stuff
        private $conn;
        private $table = 'info';
        // db properties

        public $id;
        public $first_name;
        public $last_name;
        public $birthday;
        public $address;
        public $phone;
        public $position;
        public $gmail;
        public $skype;
        public $facebook;
        public $git;
        public $instargram;
        public $image;

        // constructor with db

        public function __construct($db) {
            $this->conn = $db ;
        }

        //get post

        public function read() {
            // creat query 
        $query = 'SELECT * FROM ' . $this->table ;
            

        // prepare statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;

        }
    }