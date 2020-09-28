<?php


Class Adb{

    var $host = "";
    var $username = "";
    var $password = "";
    var $dbname = "";
    
    public function __construct()
    {
        $dbIf = parse_ini_file("../../../dbconfig.ini");
        $this->host = $dbIf["servername"];
        $this->username = $dbIf["username"];
        $this->password = $dbIf["password"];
        $this->dbname = $dbIf["dbname"];
    }
    public function con()
    {
        $mySqli = new mysqli($this->host,$this->username,$this->password,$this->dbname);
        return $mySqli;  
    }

    public static function fetch($sql)
    {
        $oDB = new Db();
        $con = $oDB->con();
        $results = $con->query($sql);

        while ($row = $results->fetch_assoc()){
            return $row;
        }
        $results -> free();

    }
    

}

// INSERT INTO `applicants` (`id`, `strName`, `strEmail`, `introduction`, `portfolio`, `resume`) VALUES (NULL, 'test', 'test', 'test', 'test', 'test');