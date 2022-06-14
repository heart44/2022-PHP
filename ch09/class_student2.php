<?php
    class Student {     
        public $studentId;
        public $studentName;

        public function printStudent() {
            print "ID : " . $this->studentId . "<br>";
            print "NAME : " . $this->studentName . "<br>";
        }
    }

    $obj = new Student;
    $obj->studentId = 20171234;    
    $obj->studentName = "홍길동";

    $obj->printStudent();