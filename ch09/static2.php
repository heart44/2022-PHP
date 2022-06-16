<?php
    class Computer {
        public static $brand;   //객체마다 다른 값을 가졌으면 하면 static 붙이면 안됨
        public $price;

        function __construct() {
            $this->init();
        }

        function init() {
            self::$brand = "2";
        }

        static function setBrand($brand) {  //static 멤버필드 값 변경하고 싶을 때
            self::$brand = $brand;
        }

        function myPrint() {
            print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 " . $this->price . "입니다. <br>";
        }

        static function myStaticPrint() {
            print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 " . /*$this->price .*/ "입니다. <br>";
        } //static이 붙은 함수가 멤버필드 값을 사용하고 싶다면, static이 붙은 멤버필드만 사용 가능
    }

    Computer::$brand = "LG";
    
    $c = new Computer;
    $c->price = 10000;

    $c2 = new Computer;
    $c2->price = 20000;

    $c->myPrint();
    $c2->myPrint();
    
    Computer::$brand = "Samsung";
    $c->myPrint();
    $c2->myPrint();