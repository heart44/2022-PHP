<?php
    class Fruit {
        private $name;
        private $price;
        private $color;

        //__construct(생성자) : 생성 뒤엔 호출 X, 은닉화된 멤버필드에 값 넣어서 사용
        function __construct($name=null, $price=null, $color=null) {    
            $this->name = $name;
            $this->price = $price;
            $this->color = $color;
        }
        //오버로딩 : 똑같은 이름의 함수를 여러개 만들 수 있는 기법(php, js에는 없음, 덮어쓰기 됨)
        //오버라이딩 : 상속 관계에서만 적용되는 기능, 부모를 그대로 상속받지 않고 새롭게 재정의하는 것

        public function print_fruit() {
            print "Name : " . $this->name . "<br>";
            print "Price : " . $this->price . "<br>";
            print "Color : " . $this->color . "<br>";
        }
    }

    $apple = new Fruit("Apple", 1000, "red");
    $banana = new Fruit("Banana", 2000, "yellow");
    $orange = new Fruit();  //아무값도 안넣고 싶으면 생성자에 default값 주면 됨

    $apple->print_fruit();
    print "<br>";
    $banana->print_fruit();

    //private 멤버필드에 값 넣는 방법(2) : 생성자(construct) 통해서, setter 메소드 통해서
    //private 멤버필드에 값 빼내는 방법(1) : getter 메소드 통해서