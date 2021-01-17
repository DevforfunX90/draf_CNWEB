<?php
    class infor {
        //Db stuff
        private $conn;
        private $table = 'testimonials';
        // db properties


        // public $id;
        public $id_testimonials;
        public $name;
        public $note;
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