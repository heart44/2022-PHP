<?php
    class People {
        protected $name;
        protected $age;

        function printPeople() {
            print "Name : " . $this->name . "<br>";
            print "Age : " . $this->age . "<br>";
        }
    }

    class Student extends People {  //상속
        private $studentId;

        function __construct($name, $age, $studentId) {
            $this->name = $name;
            $this->age = $age;
            $this->studentId = $studentId;
        }

        function printStudent() {   
            print "- Student - <br>";
            // $this->printPeople();
            parent::printPeople();      //오버라이딩 : 상속받은게 맘에 안들어서 새롭게 재정의 해서 쓰겠따
            print "Id : " . $this->studentId . "<br>";
        }

        function printPeople() {
            print "Student에 있는 print People<br>";
        }
    }

    $stu1 = new Student("홍길동", 23, 1010);
    $stu1->printPeople();
    print "-----------------<br>";
    $stu1->printStudent();

    class Professor extends People {
        private $office_No;

        function __construct($name, $age, $office_No) {
            $this->name = $name;
            $this->age = $age;
            $this->office_No = $office_No;
        }

        function printProfessor() {
            print "- Professor - <br>";
            $this->printPeople();
            print "No : " . $this->office_No . "<br>";
        }
    }