<?php

/*
 Create a class Person with firstname,lastname and age private properties.

    a. Add a constructor to initialise the properties.
    b. Add a toString magic methods to print fullnames
    c. Create a method checkAge to see if the person is allowed to get a national identity
    d. Create instance/Object of the class

*/

class Person
{
    private $firstName;
    private $lastName;
    private $dob;

    function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function printFullName()
    {
        echo $this->firstName . " " . $this->lastName;
    }

    public function checkAge()
    {
        $age = date("Y") - $this->age;

        if ($age >= 17) {
            echo "You are allowed to take id";
        } else {
            echo "You are a child";
        }
    }
}
$person1 = new Person("John", "Smith", "1990");
$person1->printFullName();
echo "<br>";
$person1->checkAge();

