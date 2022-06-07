
<?php

//a class of student
class Student{

    public $id;
    public $lastName;
    public $firstName;
    public $dob;

    public function speak(){
        echo "hi". "". $this->firstName;
    }
    
    public function fullName(){
        return $this->lastName . " " . $this->firstName;
    }

}
//a class of student

// instances of student class
// $student1 = new Student(1, "Smith", "John", "01/01/2000");

//creating instance by using constructor

$student1 = new Student();
$student1->id = 1;
$student1->lastName = "Smith";
$student1->firstName = "John";
$student1->dob = "01/01/2000";

//creating instance by using constructor
// $student1.fullName() this will not work!;

echo $student1->fullName();

// echo "hello". $this->lastName;  this will not work because this is used in object context

// instances of student class
?>