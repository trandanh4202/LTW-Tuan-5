<?php 
    class connect {
        var $db = null;
        public function __construct() {
            $dsn = 'mysql:host=localhost;dbname=deadline';
            $user = 'root';
            $pass = '';
            $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));            
        }

        public function getInstance($select) {
            $results = $this->db->query($select);
            $result = $results->fetch();
            return $result;
        }

        public function getList($select) {
            $results = $this->db->query($select);
            return $results;
        }

        public function execute($query) {
            $results = $this->db->exec($query);
            return $results;
        }
    }
?>