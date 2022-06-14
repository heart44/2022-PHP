<?php
    class Student {     
        private $studentId;     //private : 이 class 안에서만 접근 가능(캡슐화[은닉화])
        private $studentName;

        public function printStudent($id, $name) {
            print "ID : " . $id . "<br>";
            print "NAME : " . $name . "<br>";
        }
    }

    $obj = new Student;
    // $obj->studentId = 111;
    $obj->printStudent(20171234, "홍길동");