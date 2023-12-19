<?php
    require_once('connectmysql.php');
    // contain attribute and method of a product
    class product
    {
        var $id = null;
        var $name = null;
        var $price = null;
        var $img = null;
        var $description = null;

        function __construct()
        {
            if (func_num_args() == 5) {
                $this->id = func_get_arg(0);
                $this->name = func_get_arg(1);
                $this->price = func_get_arg(2);
                $this->img = func_get_arg(3);
                $this->description = func_get_arg(4);

            }
            if (func_num_args() == 4) {
                $this->id = 0;
                $this->name = func_get_arg(0);
                $this->price = func_get_arg(1);
                $this->img = func_get_arg(2);
                $this->description = func_get_arg(3);
            }
        }


        function insert()
        {
            $db = new connect();
            $query = "insert into product values('" .$this->id ."', '" . $this->name . "', '" . $this->price . "', '" . $this->img . "', '" . $this->description . "')";
            try {
                $db->execute($query);
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        function update() {
            $db = new connect();
            $query = "update product set name = '" . $this->name . "', price = '" . $this->price . "', img = '" . $this->img . "', description = '" . $this->description . "' where id = " . $this->id ;
            try {
                $db->execute($query);
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        public static function delete($id) {
            $db = new connect();
            $query = "delete from product where id = '" .$id . "'";
            try {
                $db->execute($query);
            }
            catch (\Throwable $th) {
                throw $th;
            }
        }

        public static function getall() {
            $db = new connect();
            $query = "SELECT * FROM product";
            try {
                $result = $db->getList($query);
                return $result; // Trả về dữ liệu sản phẩm từ cơ sở dữ liệu
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        
        function test() {
            $db = new connect();
            $query = "select * from product";
        }
    }
?>