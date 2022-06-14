<?php
    class Student2 {     
        private $studentId; 
        private $studentName;

        //getters : 파라미터 안받음
        public function getStudentId() {
            return $this->studentId;
        }
        public function getStudentName() {
            return $this->studentName;
        }

        //setters : 파라미터 받아야함
        public function setStudentId($studentId) {
            $this->studentId = $studentId;
            return $this;
        }
        public function setStudentName($studentName) {
            $this->studentName = $studentName;
            return $this;
        }

        public function printStudent() {
            print "ID : " . $this->studentId . "<br>";
            print "NAME : " . $this->studentName . "<br>";
        }        
    }

    $obj = new Student2;
    $obj->setStudentId(1234567);    //return 되는 값은 obj랑 같음
    $obj->setStudentName('김가나');
    $obj->printStudent();