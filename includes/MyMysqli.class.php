<?php

/**
 * Description of MyMysqli
 *
 * @author SUN
 */
class MyMysqli extends mysqli{
    
/**
 * 
 * @param type $query
 * @return mysqli_result
 */
    public function query($query) {
        return parent::query($query);
    }

}
