<?php


Class Db{

    var $host = "";
    var $username = "";
    var $password = "";
    var $dbname = "";
    
    public function __construct()
    {
        $dbIf = file_exists("../../dbconfig.ini");
        $dbIfad = file_exists("../../../dbconfig.ini");

        if($dbIf)
        {
            $afficalydb = parse_ini_file("../../dbconfig.ini");
            $this->host = $afficalydb["servername"];
            $this->username = $afficalydb["username"];
            $this->password = $afficalydb["password"];
            $this->dbname = $afficalydb["dbname"];

        }else if($dbIfad){
            $tofficalydb = parse_ini_file("../../../dbconfig.ini");
            $this->host = $tofficalydb["servername"];
            $this->username = $tofficalydb["username"];
            $this->password = $tofficalydb["password"];
            $this->dbname = $tofficalydb["dbname"];
        }
    }
    public function con()
    {
        $mySqli = new mysqli($this->host,$this->username,$this->password,$this->dbname);
        return $mySqli;  
    }
    public static function execute($sql)
    {
        $oDb = new Db();
        $con = $oDb->con();

        $stmt = $con->prepare("$sql");
        $stmt->bind_param("sssss", $aName, $aEmail,$atext,$aLink,$aReu);

        $aName = $_POST["name"];
        $aEmail = $_POST["email"];
        $atext = $_POST["intro"];
        $aLink = $_POST["link"];
        $aReu = $_FILES["upfile"]["name"];
        $stmt->execute();
    }
    public static function fetch($sql)
    {
        $oDB = new Db();
        $con = $oDB->con();
        $results = mysqli_query($con,$sql);
        while( $row = mysqli_fetch_assoc($results))
        {
            $data[] = $row;
        }
        return $data;
    }
    

}

// INSERT INTO `applicants` (`id`, `strName`, `strEmail`, `introduction`, `portfolio`, `resume`) VALUES (NULL, 'test', 'test', 'test', 'test', 'test');