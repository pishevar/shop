<?php

/**
 * Description of MyMysqli
 *
 * @author SUN
 */
class MyMysqli extends mysqli {

    /**
     * 
     * @param type $query
     * @return mysqli_result
     */
    public function query($query) {
        $result = parent::query($query);
        
        if ($result === false) {
            if(DEBUG){
            echo "Db Error:" . $this->error . "<br>";
            echo "Db Error No:" . $this->errno . "<br>";
            echo "Query:" . $query . "<br>";
            
            $debugTrace=DEBUG_backtrace();
            echo "file:".$debugTrace[0]['file']."<br>";
            echo "line:".$debugTrace[0]['line']."<br>";
            var_dump($debugTrace);
            exit();
            }else{
                echo "An error occured";
                exit();
            }
        }
        return $result;
    }

}
