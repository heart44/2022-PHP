<?php
    //Access Modifier
    //접근제어 지시자(접근 제어자, 접근 지시어) 
    //java : private, default, protected, public
    //php : private, protected, public
    class Student {     //class명은 대문자로 시작해야함
        public $studentId;
        public $studentName;

        public function printStudent($id, $name) {
            print "ID : " . $id . "<br>";
            print "NAME : " . $name . "<br>";
        }
    }

    $obj = new Student;
    $obj->studentId = 20171234;    //php에서는 ' . ' 대신 ' -> ' 사용
    $obj->studentName = "홍길동";

    $obj->printStudent($obj->studentId, $obj->studentName);