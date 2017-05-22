<?php

require_once "../../vendor/autoload.php";

$objStudent = new \App\Student();
$objCourse  = new \App\Course();

$objStudent->setDataStudent($_POST);
$objCourse->setDataCourse($_POST);

$studentInfoArray    = $objStudent->getDataStudent();
$courseInfoArray     = $objCourse->getDataCourse();

if(filesize("result.txt") == 0){
    file_put_contents("result.txt","Student Result Sheet\n");
}

$name       = $studentInfoArray['name'];
$studentid  = $studentInfoArray['studentid'];

$banglaMark = $courseInfoArray['banglaMark'];
$englishMark = $courseInfoArray['englishMark'];
$mathMark = $courseInfoArray['mathMark'];
$ictMark = $courseInfoArray['ictMark'];

$upperPart = <<<BITM
**************************
Name:       $name
Student ID: $studentid
**************************
Subject     Mark    Grade
==========================

BITM;

file_put_contents("result.txt",$upperPart,FILE_APPEND);

file_put_contents("result.txt","Bangla      ".$banglaMark.printSpaces($banglaMark).$objCourse->mark2Grade($banglaMark)."\n",FILE_APPEND);

file_put_contents("result.txt","English      ".$englishMark.printSpaces($englishMark).$objCourse->mark2Grade($englishMark)."\n",FILE_APPEND);

file_put_contents("result.txt","Math      ".$mathMark.printSpaces($mathMark).$objCourse->mark2Grade($mathMark)."\n",FILE_APPEND);

file_put_contents("result.txt","ICT      ".$ictMark.printSpaces($ictMark).$objCourse->mark2Grade($ictMark)."\n",FILE_APPEND);

file_put_contents("result.txt","=========================="."\n",FILE_APPEND);

function printSpaces($mark){
    $space = "";

    for($i=1;$i<=12-strlen($mark);$i++){
        $space.=" ";
    }
}