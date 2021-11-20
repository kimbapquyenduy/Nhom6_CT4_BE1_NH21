 <?php
    class Product extends Db
    {
        public function getAllProducts()
        {
            $sql = self::$connection->prepare("SELECT * FROM products");
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
        public function getProductByManu($manu_id)
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ?");
            $sql->bind_param("i", $manu_id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        // "SELECT * 
        //     FROM products,manufactures,protypes
        //     WHERE products.manu_id=manufactures.manu_id
        //     AND products.type_id=protypes.type_id LIMIT ?,?"
        public function get3AppleProduct($slide, $perslide)
        {
            $sql = self::$connection->prepare("SELECT * FROM products,protypes WHERE manu_id = 1 and products.type_id=protypes.type_id LIMIT ?,?");
            $firstslide = ($slide - 1) * $perslide;
            $sql->bind_param("ii", $firstslide, $perslide);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getAppleProduct()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id=1");


            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getHotProduct()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE feature=1");


            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function get3HotProduct($slide, $perslide)
        {
            $sql = self::$connection->prepare("SELECT * FROM products,protypes WHERE feature=1  and products.type_id=protypes.type_id LIMIT ?,?");
            $firstslide = ($slide - 1) * $perslide;
            $sql->bind_param("ii", $firstslide, $perslide);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }

        public function get3XiaomiProduct($slide, $perslide)
        {
            $sql = self::$connection->prepare("SELECT * FROM products,protypes WHERE manu_id=3  and products.type_id=protypes.type_id LIMIT ?,?");
            $firstslide = ($slide - 1) * $perslide;
            $sql->bind_param("ii", $firstslide, $perslide);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }

        public function getXiaomiProduct()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id=3");


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
            $flag = 0;
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
