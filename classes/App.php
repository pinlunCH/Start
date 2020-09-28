<?php

Class App
{
    var $id = "";
    var $name = "";
    var $email = "";
    var $intro = "";
    var $pro = "";
    var $resume = "";
    

    public function __construct($id,$name,$email,$intro,$pro,$resume)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->intro = $intro;
        $this->pro = $pro;
        $this->resume = $resume;
    }
    public static function findById($id)
    {
        $arrApp = DB::fetch("SELECT * FROM applicants WHERE id ='".$id."'");
        $app = $arrApp[0];
        
        return new App($app["id"],$app["strName"],$app["strEmail"],$app["introduction"],$app["portfolio"],$app["resume"]);

    }
}


?>