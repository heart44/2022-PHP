<?php
    class Fruit {
        private $name;
        private $price;
        private $color;

        //__construct(생성자) : 생성 뒤엔 호출 X, 은닉화된 멤버필드에 값 넣어서 사용
        function __construct($name, $price, $color) {    
            $this->name = $name;
            $this->price = $price;
            $this->color = $color;
        }

        public function print_fruit() {
            print "Name : " . $this->name . "<br>";
            print "Price : " . $this->price . "<br>";
            print "Color : " . $this->color . "<br>";
        }
    }

    $apple = new Fruit("Apple", 1000, "red");
    $banana = new Fruit("Banana", 2000, "yellow");

    $apple->print_fruit();
    print "<br>";
    $banana->print_fruit();

    //private 멤버필드에 값 넣는 방법(2) : 생성자(construct) 통해서, setter 메소드 통해서
    //private 멤버필드에 값 빼내는 방법(1) : getter 메소드 통해서