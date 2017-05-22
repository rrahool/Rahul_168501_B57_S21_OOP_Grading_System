<?php

namespace App;

class Course{
    public $banglaMark;
    public $englishMark;
    public $mathMark;
    public $ictMark;

    public function setDataCourse($postArray){
        if(array_key_exists("BanglaMark", $postArray))
            $this->banglaMark   = $postArray["BanglaMark"];

        if(array_key_exists("EnglishMark", $postArray))
            $this->englishMark  = $postArray["EnglishMark"];

        if(array_key_exists("MathMark", $postArray))
            $this->mathMark   = $postArray["MathMark"];

        if(array_key_exists("ICTMark", $postArray))
            $this->ictMark   = $postArray["ICTMark"];


    }

    public function getDataCourse(){
        $banglaMark     = $this->banglaMark;
        $englishMark    = $this->englishMark;
        $mathMark       = $this->mathMark;
        $ictMark        = $this->ictMark;

        $varList        = compact("banglaMark", "englishMark", "mathMark", "ictMark");

        return $varList;
    }

    public function mark2Grade($mark){
        if($mark >= 80)
            $grade = "A+";
        elseif($mark > 69 && $mark < 79)
            $grade = "A";
        elseif($mark > 59 && $mark < 69)
            $grade = "A-";
        elseif($mark >= 49 && $mark < 50)
            $grade = "B";
        elseif($mark >= 45 && $mark < 49)
            $grade = "C";
        elseif($mark >= 40 && $mark < 79)
            $grade = "D";
        elseif($mark < 40)
            $grade = "Fail";
        else
            return $grade;
    }
}