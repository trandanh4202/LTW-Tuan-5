<?php
    require_once('connectmysql.php');
    // contain attribute and method of a product
    class user
    {
        var $id = null;
        var $name = null;
        var $sdt = null;
        var $gmail = null;
        var $password = null;
        var $isadmin = null;

        function __construct()
        {
            if (func_num_args() == 6) {
                $this->id = func_get_arg(0);
                $this->name = func_get_arg(1);
                $this->sdt = func_get_arg(2);
                $this->gmail = func_get_arg(3);
                $this->password = func_get_arg(4);
                $this->isadmin = func_get_arg(5);
            }
            if (func_num_args() == 5) {
                $this->id = 0;
                $this->name = func_get_arg(0);
                $this->sdt = func_get_arg(1);
                $this->gmail = func_get_arg(2);
                $this->password = func_get_arg(3);
                $this->isadmin = func_get_arg(4);
            }
            if (func_num_args() == 4) {
                $this->id = 0;
                $this->name = func_get_arg(0);
                $this->sdt = func_get_arg(1);
                $this->gmail = func_get_arg(2);
                $this->password = func_get_arg(3);
                $this->isadmin = 0;
            }
        }


        function insert()
        {
            $db = new connect();
            $query = "insert into user values('" .$this->id ."', '" . $this->name . "', '" . $this->sdt . "', '" . $this->gmail . "', '" . $this->password . "', '" . $this->isadmin . "')";
            try {
                $db->execute($query);
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        
        function update() {
            $db = new connect();
            $query = "update user set name = '" . $this->name . "', sdt = '" . $this->sdt . "', gmail = '" . $this->gmail . "', password = '" . $this->password . "', isadmin = '" . $this->isadmin . "' where id = " . $this->id ;
            try {
                $db->execute($query);
            } catch (\Throwable $th) {
                throw $th;
            }
        }
    

       
        public static function delete($id) {
            $db = new connect();
            $query = "delete from user where id = '" .$id ." '";
            try {
                $db->execute($query);
            }
            catch (\Throwable $th) {
                throw $th;
            }
        }

        public static function getall() {
            $db = new connect();
            $query = "select * from user";
            try {
                return $db->getList($query);
            } 
            catch (\Throwable $th) {
                throw $th;
            }
        }

        public static function login($username, $password) {
            $db = new connect();
            $query = "SELECT * FROM user WHERE gmail = '" . $username . "' AND password = '" . $password . "'";
            try {
                $user = $db->getInstance($query);
        
                if ($user && $user['isadmin'] === 1) {
                    $user['role'] = 'admin';
                } else {
                    $user['role'] = 'user';
                }
        
                return $user;
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public static function searchByName($name) {
            $db = new connect();
            $query = "SELECT * FROM user WHERE name LIKE '".$name."'";
            try {
                return $db->getList($query);
            } catch (\Throwable $th) {
                throw $th;
            }
        }

    }
?>