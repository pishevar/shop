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
            if (DEBUG) {
                $debugTrace = DEBUG_backtrace();
                $errorMessage = "Db Error:" . $this->error . "\n" .
                        "Db ErrorNo:" . $this->errno . "\n" .
                        "Query:" . $query . "\n" .
                        "file:" . $debugTrace[0]['file'] . "\n" .
                        "line:" . $debugTrace[0]['line'] . "\n";
            } else {
                $errorMessage = "به دليل بروز خطا دوباره امتحان کنيد";
            }
            throw new Exception($errorMessage, $this->errno);
        }
        return $result;
    }

}
