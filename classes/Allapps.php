<?php

Class Allapps
{
    public static function getAll()
    {
        $oarrApp = DB::fetch("SELECT * FROM applicants");

        foreach($oarrApp as $oapp)
        {
            $oApps = new App($oapp["id"],$oapp["strName"],$oapp["strEmail"],$oapp["introduction"],$oapp["portfolio"],$oapp["resume"]);
            $oarroApp[] = $oApps;
        }        

        return $oarroApp;
        
    }
}