<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。

class Car{
    private $name;
    private $number;
    private $color;
    
    public function __construct($name, $number, $color)
    {
            $this->name = $name;
            $this->number = $number;
            $this->color = $color;
    }

    
    public function getName(){
        return $this->name;
    }
    public function getNumber(){
        return $this->number;
    }
    public function getColor(){
        return $this->color;
    }

    // 変更を許す
    public function setName($name) {
        $this->name = $name;
    }
    public function setNumber($number){
        $this->number = $number;
    }       
    public function setColor($color) {
        $this->color = $color;
    }

    public function information(){
        echo "車の車種:" . $this->name . "､車体番号:" . $this->number . "､カラー:" . $this->color . "です｡<br>";
    }  
}


// Carクラスのインスタンスを生成
$car1 = new Car('ランクル', 100, 'black');

// // 車名(車種)を取得
echo $car1->getName();
echo '<br>';

// // 車体番号を取得
echo $car1->getNumber();
echo '<br>';

// // カラーを取得
echo $car1->getColor();
echo '<br>';

// // 車の情報表示を表示
echo $car1->information();
echo '<br>';



// 車名(車種)､車体番号､カラーを更新
$car1->setName('アルフォード');
$car1->setNumber(100);
$car1->setColor('red');


// 車名を取得
echo $car1->getName();
echo '<br>';

// 車体番号を取得
echo $car1->getNumber();
echo '<br>';

// カラーを取得
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
$car1->information();
echo '<br>';










