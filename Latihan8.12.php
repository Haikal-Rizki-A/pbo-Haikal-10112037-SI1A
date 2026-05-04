<?php

class employee {
    private $firstname;
    private $lastname;  
    private $age;

    public function __construct($firstname, $lastname, $age) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    public function getfirstname() {
        return $this->firstname;
    }

    public function getlastname() {
        return $this->lastname;
    }

    public function getage() {
        return $this->age;
    }
}
?>

<?php
$objemployeeone = new employee("John ", "Doe ", 30);
echo $objemployeeone->getfirstname();
echo $objemployeeone->getlastname();
echo $objemployeeone->getage() . " years old.". "<br>";


$objemployeetwo = new employee("Jane ", "Smith ", 25);
echo $objemployeetwo->getfirstname();
echo $objemployeetwo->getlastname();
echo $objemployeetwo->getage() . " years old.". "<br>";
?>

