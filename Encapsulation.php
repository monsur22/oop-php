<?php
class Student {
    private $firstname;
    private $gender;

    public function getFirstName() {
        return $this->firstname;
    }

    public function setFirstName($firstname) {
        $this->firstname = $firstname;
        echo("First name is set to ".$firstname);
        echo("<br>");
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        if ('Male' !== $gender and 'Female' !== $gender) {
            echo('Set gender as Male or Female for gender');
        }

        $this->gender = $gender;
        echo("Gender is set to ".$gender);
        echo("<br>");
    }

}

$student = new Student();
$student->setFirstName('Meena');
$student->setGender('Female');

//2nd example
class ATM {
    private $custid;
    private $atmpin;
    public function PinChange($custid,$atmpin) {
             ---------perform tasks-----
             }
    public function CheckBalance($custid,$atmpin){
             ---------perform tasks-----
             }
    public function miniStatement($custid) {
             ---------perform tasks-----
             }
    }
 $obj = new ATM();
 $obj ->CheckBalance(10005285637,1**3);
