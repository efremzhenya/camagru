<?php

class dao{
	public static $conn;

    public function is_db_exists()
    {
        if ($this::$conn->exec("SHOW DATABASES LIKE 'camagru_db';"))
        {
            return true;
        }
        else return false;
    }

    public function __construct($dsn, $db_username, $db_password) {

        $this->connect($dsn, $db_username, $db_password);
    }

    public static function initWithConfig($isSetupMode = false) {
        require $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';
        $instance = new self($isSetupMode ? $dsn_setup : $dsn, $db_username, $db_password);
        return $instance;
    }


	private function connect($dsn, $username, $password)
	{
		try {
            $this::$conn = new PDO($dsn, $username, $password);
            $this::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            $this::$conn = null;
        }
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
