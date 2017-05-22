<?php

namespace App;

class Student{
    public $name;
    public $studentid;

    public function setDataStudent($postArray){
        if(array_key_exists("Name", $postArray))
            $this->name = $postArray["Name"];
        if(array_key_exists("StudentID",$postArray))
            $this->studentid = $postArray["StudentID"];
    }

    public function getDataStudent(){
        $name       = $this->name;
        $studentid  = $this->studentid;

        $varList = compact("name","studentid");

        return $varList;
    }

}