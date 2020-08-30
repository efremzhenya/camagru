<?php

class dao
{
    public static $connection;
    public static $PDOErrorCode;

    private static function connect($dsn, $username, $password)
	{
		try {
            $connection = new PDO($dsn, $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $PDOErrorCode = null;
        }
        catch (PDOException $e)
        {
            PDOErrorCode = $e->getCode();
            $connection = null;
        }
    }

    public static function is_db_exists()
    {
        if ($connection->exec("SHOW DATABASES LIKE 'camagru_db';"))
        {
            return true;
        }
        else return false;
    }

    public static function init($isSetupMode = false) {
        require $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';
        dao::connect(($isSetupMode ? $dsn_setup : $dsn), $db_username, $db_password);
    }


    // public function select( $table , $where='' , $other='' ){
    //    if ($where != '' ){  // condition was wrong
    //      $where = 'where ' . $where; // Added space
    //    }
    //    $sql = "SELECT * FROM  ".$table." " .$where. " " .$other;
    //    $sele = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    //    // echo $sele; // don't use echo statement because - Object of class mysqli_result could not be converted to string
    //    return $sele;
    // }
   }
?>
