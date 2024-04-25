<?php
namespace App\trait;

trait season 
{
    public function GetSeason() {
        $SeasonDates = array('/12/21'=>'Winter',
                             '/09/21'=>'Autumn',
                             '/06/21'=>'Summer',
                             '/03/21'=>'Spring',
                             '/01/01'=>'Winter');
        foreach ($SeasonDates AS $key => $value) 
        {
            $SeasonDate = date("Y").$key;
            if (strtotime("now") > strtotime($SeasonDate)) 
            {
                return $value;
            }
        }
     }
}
?>