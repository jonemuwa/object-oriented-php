<!DOCTYPE html>

<html>

<head>
    <title>Course Work</title>
    <meta charset="UTF-8">
    <?php include("class_lib.php"); ?>
    <style>
        body {
            /* margin:19px 258px; */
            background: white;
            width: 60%;
            height: 90vh;
            /* border:1px solid red; */
            padding: 12px;
            text-align: left;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 2px 15px;
            border-radius: 15px;
            margin: auto;


        }

        .style {
            color: blue;
            font-size: 30px;
            background: whitesmoke;
            height: 72vh;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;

        }

        .header {
            padding: 10px;
            height: 85px;
            background: green;
            border-radius: 15px;


        }

        h1 {
            font-size: 40px;
            color: white;
            text-align: center;
            letter-spacing: 2px;
            font-variant: small-caps;

        }
    </style>

</head>

<body>
    <div class="header">
        <h1>Object Oriented Programming In PHP</h1>
    </div>
    </hr>
    <div class="style">
        <?php
        //Creating Object of  Class Person
        $person1 =  new Person("Muwanguzi John", "Kikoni", "0703642715", "muwanguzijohn15@gmail.com");
        //invoking getName() of Class Person
        echo "<p style='color:blue; font-size:30px;'>" . $person1->getName() . "<br/></br/>" . "</p>";

        //2 Creating Object of  Class Student
        $student1  = new Student("Mpagi Richard", "Kasubi", "+256756260448", "mpagi12@gmail.com");
        //invoking getName() of Class Student
        $student1->getName();

        //Creating Object of  Class Employee
        $employee1 = new Employee("Mutyaba Rodgers", "Nsambya", "+256742751956", "mutyabarodger25@gmail.com", "Academic Registrar", "2000000");
        $employee1->setDateHired("19", "05", "2000");
        //invoking getName() of Class Employee
        $employee1->getName();

        //Creating Object of Class Faculty
        $faculty1 = new Faculty("Musoke Peace", "Kawempe", "+256705316226", "musokepeace123@gmail.com", "Information Security", "1900000", "10:00AM to 5:00PM", "Hea +d of Department");
        $faculty1->setDateHired("13", "08", "2017");
        //invoking getName() of Class Faculty
        $faculty1->getName();

        //Creating Object of Class Staff
        $staff1 = new  Staff("Jjemba Lawrence", "Kibuuli", "+26785765283", "jjembalawrence288@mail.com", "Dean of Students", "2100000", "16/11/2020", "Associate Professor");
      $staff1->setDateHired("17", "03", "2018");
        //invoking getName() of Class Staff
        $staff1->getName();

        ?>


    </div>
</body>

</html>