<?php

//class_Library 
class Person
{
    public $name;
    public $address;
    public $phoneNumber; //phone_number
    public $email;

    function __construct($name, $address, $phoneNumber, $email)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }
}

//Student is a child class of Person
class Student extends Person
{



    //added lines below 

    function __construct($name, $address, $phoneNumber, $email)
    {
        Person::__construct($name, $address, $phoneNumber, $email);
    }

    //Overrided Function
    public function getName()
    {

        echo "Class Name: " . get_class() . "<br/>" . "Student Name: " . $this->name . "<br/><br/>";
    }
}

//Employee is a child class of Person
class Employee extends Person
{
    public $office;
    public $salary;
    public $date_hired;

    //Added Lines

    function __construct($name, $address, $phoneNumber, $email, $office, $salary)
    {
        Person::__construct($name, $address, $phoneNumber, $email);
        $this->office = $office;
        $this->salary = $salary;
    }

    public function setDateHired($day, $month, $year)
    {
        $this->date_hired = new MyDate($day, $month, $year);
    }


    //Overrided Function
    public function getName()
    {


        echo "Class Name: " . get_class() . "<br/>" . "Employee Name: " . $this->name . "<br/><br/>";
    }
}

//Faculty is a child class of Employee

class Faculty extends Employee
{
    public $office_hours;
    public $rank;

    //Added Lines

    function __construct($name, $address, $phoneNumber, $email, $office, $salary, $office_hours, $rank)
    {
        Employee::__construct($name, $address, $phoneNumber, $email, $office, $salary);
        $this->office_hours = $office_hours;
        $this->rank = $rank;
    }

    public function setDateHired($day, $month, $year)
    {
        $this->date_hired = new MyDate($day, $month, $year);
    }
    //Overrided Function
    public function getName()
    {


        echo "Class Name: " . get_class() . "<br/>" . "Faculty Employee Name: " . $this->name . "<br/><br/>";
    }
}

//Staff is a child class of Employee
class Staff extends Employee
{
    public $title;

    //Added Lines
    function __construct($name, $address, $phoneNumber, $email, $office, $salary, $title)
    {
        Employee::__construct($name, $address, $phoneNumber, $email, $office, $salary);
        $this->title = $title;
    }

    public function setDateHired($day, $month, $year)
    {
        $this->date_hired = new MyDate($day, $month, $year);
    }

    //Overrided function
    public function getName()
    {


        echo "Class Name: " . get_class() . "<br/>" . "Staff Employee Name: " . $this->name . "<br/><br/>";
    }
}


class MyDate
{
    public $year;
    public $month;
    public $day;


    function __construct($day, $month, $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function DisplayDate()
    {
        echo "{$this->day}/{$this->month}/{$this->year}";
    }
}
