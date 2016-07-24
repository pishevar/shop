<?php

class product {
 protected $n = 10;
 
 
 //adminCreate
public function adminCreateProduct($sku, $name, $description, $price, $quantity, $staus = 'visible'){
$query = "INSERT INTO product SET "
. "sku='$sku',name='$name',description='$description',price='$price',quantity='$quantity',status='$status'";
        
    DB::get()->query($query);
    return DB::get()->insert_id;
    
    }
    
    
    //like assignCategory
    public function adminAddCategory($productId,$categoryId){
       try {
            $query = "INSERT INTO products_categories SET "
                    . "product_id=$productId, category_id=$category_id ";

            Db::get()->query($query);
        } catch (Exception $e) {
            if ($e->getCode() == 1062) {
                return false;
            } else {
                throw $e;
            }
        }
        return true;
    }
    
    
    //adminUpdate
    public function adminUpdateProduct($id, $sku, $name, $description, $price, $quantity, $status = 'visible') {
        $query = "UPDATE product SET "
                . "sku='$sku',name='$name', description='$description', "
                . "price='$price', quantity='$quantity', status='$status'"
                . "     WHERE id=$id ";

        Db::get()->query($query);

        return Db::get()->affected_rows;
    }
//namayeshe list product
    public function adminGetList($f = 0) {
        $query = "SELECT * FROM product LIMIT $f, $this->n";
        $result = Db::get()->query($query);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
//list 
    public function adminGetCount() {
        $query = "SELECT COUNT(*) FROM product";
        $result = Db::get()->query($query);

        $c = $result->fetch_row();
        return $c[0];
    }

    public function adminGet($id) {
        $query = "SELECT * FROM product WHERE id=$id";
        $result = Db::get()->query($query);

        $product = $result->fetch_assoc();
        $product['categories'] = $this->adminGetProductCategories($id);

        return $product;
    }

    public function adminGetProductCategories($id) {
        $query = "SELECT category_id FROM products_categories  WHERE product_id=$id";
        $result = Db::get()->query($query);

        $pc = $result->fetch_all();
        if (count($pc) > 0) {
            foreach ($pc as $c) {
                $cc[] = $c[0];
            }
            $query = "SELECT name FROM product_category  WHERE id in(" . implode(", ", $cc) . ")";
            $result = Db::get()->query($query);

            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
    public function getList($f = 0, $filter = null, $order = null) {
        $query = "SELECT * FROM product WHERE status='visible' ";
        if ($filter !== null) {
            $query .= " AND ($filter) ";
        }

        if ($order !== null && is_array($order) && count($order)) {
            $query .= " ORDER BY " . implode(",", $order) . " ";
        }

        $query .= "LIMIT $f, $this->n";

        $result = Db::get()->query($query);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCount() {
        $query = "SELECT COUNT(*) FROM product WHERE status='visible' ";
        $result = Db::get()->query($query);

        $c = $result->fetch_row();
        return $c[0];
    }

    public function get($id) {
        $query = "SELECT * FROM product WHERE id=$id AND status='visible'";
        $result = Db::get()->query($query);

        $product = $result->fetch_assoc();
        $product['categories'] = $this->adminGetProductCategories($id);

        return $product;
    }

    public function incVisitCount($id) {
        $query = "UPDATE product SET visit_count=visit_count+1 WHERE id=$id";
        Db::get()->query($query);
    }


}
