<?php


Class User
{
    var $username = "";
    var $password = "";
    

    public function __construct($username,$password)
    {

        $this->username = $username;
        $this->password = $password;

    }
    public static function logining($username,$password)
    {
        $adb = new Adb();
        $con = $adb->con();
        $auser = Adb::fetch("SELECT * FROM users WHERE strUsername = '".mysqli_real_escape_string($con, $username)."' AND strPassword='".mysqli_real_escape_string($con, $password)."'");
      
        return $auser;

    }
    public static function ifLogin()
    {
        $adb = new Adb();
        $con = $adb->con();
        $seUser = Adb::fetch("SELECT * FROM users WHERE id = '".$_SESSION["userid"]."'");
      
        if(!$seUser)
        {
            header("location: index.php?error=true");
        }else{
            return $seUser;
        }
    }
    
}


?>