<?php
    class Fruit {
        private $name;
        private $price;
        private $color;

        public function print_fruit() {
            print "Name : " . $this->name . "<br>";
            print "Price : " . $this->price . "<br>";
            print "Color : " . $this->color . "<br>";
        }

        public function setName($name) {
            $this->name = $name;
            return $this;
        }
        public function setPrice($price) {
            $this->price = $price;
            return $this;
        }
        public function setColor($color) {
            $this->color = $color;
            return $this;
        }
    }

    $apple1 = (new Fruit)->setName("사과");
    $apple1->print_fruit();

    $apple2 = (new Fruit)
                ->setPrice(1000)
                ->setColor('파란색');
    $apple2->print_fruit();

    $banana1 = new Fruit;
    $banana1->setColor("노란색");
    $banana1->setPrice(2000);
    $banana1->print_fruit();