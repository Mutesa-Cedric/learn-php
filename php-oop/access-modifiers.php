<?php
class Student{

private $id;
private $lastName;
private $firstName;
private $dob;

//setter
function setLastName($lastName){
    $this->lastName = $lastName;
}

// getter
function getLastName(){
    return $this->lastName;
}


}


$student1=new Student();
$student1->setLastName("Smith");
echo $student1-> getLastName()

?>