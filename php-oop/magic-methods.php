<?php

class Student
{
    public $id;
    public $lastName;
    public $firstName;
    public $dob;

    //construct an object with constructor
    function _construct($id, $lastName, $firstName, $dob)
    {
        $this->id = $id;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->dob = $dob;
    }

    public function get_name(){
        return $this->lastName;
    }
    //construct an object with constructor
}


//creating instance by using constructor

// $student1=new Student();

//echo $student1->id; this is will not work because we
// have defined function with parametarized constructor

//instead we can use this:

$student1 = new Student(1, "Smith", "John", "01/01/2000");

//that constructow then will construct an instance with given parameters

echo $student1->id;
echo $student1->get_name();

//creating instance by using constructor

// echo "hello";
// converting object to string

function toString($student)
{
    return $student->id . " " . $student->lastName . " " . $student->firstName . " " . $student->dob;
}

echo toString($student1);
// converting object to string

?>