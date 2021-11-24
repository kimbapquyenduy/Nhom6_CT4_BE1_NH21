 <?php
    class Product extends Db
    {
        public function getAllProducts()
        {
            $sql = self::$connection->prepare("SELECT * 
            FROM products,manufactures,protypes
            WHERE products.manu_id=manufactures.manu_id
            AND products.type_id=protypes.type_id");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getProductById($id)
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
            $sql->bind_param("i", $id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }

        public function addProduct($name, $manu_id, $type_id, $price, $image, $desc)
        {
            $sql = self::$connection->prepare("INSERT 
        INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `descripsion`) 
        VALUES (?,?,?,?,?,?)");
            $sql->bind_param("siiiss", $name, $manu_id, $type_id, $price, $image, $desc);

            return $sql->execute(); //return an object
        }
        public function delProduct($id)
        {
            $sql = self::$connection->prepare("DELETE FROM `products` WHERE id=? ");
            $sql->bind_param("i", $id);

            return $sql->execute(); //return an object
        }

        public function getProductByManu($manu_id)
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ?");
            $sql->bind_param("i", $manu_id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function get3ProductsByManu($manu_id, $page, $perPage)
        {
            // Tính số thứ tự trang bắt đầu
            $firstLink = ($page - 1) * $perPage;
            $sql = self::$connection->prepare("SELECT * FROM products
            WHERE manu_id = ?  LIMIT ?,?");
            $sql->bind_param("iii", $manu_id, $firstLink, $perPage);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        //phan trang
        function paginate($url, $total, $perPage)
        {

            $totalLinks = ceil($total / $perPage);
            $link = "";
            for ($j = 1; $j <= $totalLinks; $j++) {

                $curpage = isset($_GET['page']) ? $_GET['page'] : 1;
                // var_dump($link);

                if (strcmp($curpage, $j) == 0) {

                    $link = $link . "<li class='active'> $j </li>";
                } else {
                    $link = $link . "<li><a href='$url&page=$j'> $j </a></li>";
                }
            }

            return $link;
        }
        function paginate2($url, $total, $perPage)
        {

            $totalLinks = ceil($total / $perPage);
            $link = "";
            for ($j = 1; $j <= $totalLinks; $j++) {

                $curpage = isset($_GET['page']) ? $_GET['page'] : 1;
                // var_dump($link);

                if (strcmp($curpage, $j) == 0) {

                    $link = $link .  "<li class='page-item active'><a class='page-link'> $j </a></li>";
                } else {
                    $link = $link . "<li class='page-item '><a class='page-link'  href='$url?page=$j'> $j </a></li>";
                }
            }

            return $link;
        }
        public function get6Products($page, $perPage)
        {
            // Tính số thứ tự trang bắt đầu
            $firstLink = ($page - 1) * $perPage;
            $sql = self::$connection->prepare("SELECT * 
            FROM products,manufactures,protypes
            WHERE products.manu_id=manufactures.manu_id
            AND products.type_id=protypes.type_id LIMIT ?,?");
            $sql->bind_param("ii", $firstLink, $perPage);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }

        public function getProductByPro($type_id)
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ?");
            $sql->bind_param("i", $type_id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getNewProducts()
        {
            $sql = self::$connection->prepare("SELECT * FROM products ORDER BY created_at DESC LIMIT 10 ");


            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array



        }
        public function search($keyword)
        {
            $sql = self::$connection->prepare("SELECT * FROM products 
        WHERE `name` LIKE ?");
            $keyword = "%$keyword%";
            $sql->bind_param("s", $keyword);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function search3pro($keyword, $page, $perPage)
        {
            // Tính số thứ tự trang bắt đầu
            $firstLink = ($page - 1) * $perPage;
            $keyword = "%$keyword%";
            $sql = self::$connection->prepare("SELECT * FROM products
            WHERE `name` LIKE ?  LIMIT ?,?");

            $sql->bind_param("sii", $keyword, $firstLink, $perPage);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
