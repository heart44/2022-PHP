<?php
    class Computer {
        private static $cnt = 0;
        private $modelName;
        private $price;

        function __construct($modelName=null, $price=null) {
            self::$cnt++;
            $this->modelName = $modelName;
            $this->price = $price;
        }

        function printInfo() {
            print "모델명 : " . $this->modelName . ", 가격 : " . $this->price . "<br>"; 
        }

        static function totalProductCnt() {
            print "총 생산된 컴퓨터 수 : " . self::$cnt . "<br>";
        }
    }

    $c1 = new Computer("abc-123", 40000);
    $c2 = new Computer("xkk-222", 50000);
    $c3 = new Computer("dkd-456", 60000);
    $c4 = new Computer("eee-167", 70000);

    $c1->printInfo();
    $c2->printInfo();
    $c3->printInfo();
    $c4->printInfo();
    
    Computer::totalProductCnt();    //메소드에 static 붙으면 이렇게 사용 가능
    // $c1->totalProductCnt();
    // $c2->totalProductCnt();
    // $c3->totalProductCnt();
