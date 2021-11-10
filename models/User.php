<?php
// print("Hi\n");

// print("Hi" . "\n");

// print("Hi" . PHP_EOL);
// print('Hi' . PHP_EOL);
// print'Hi' . PHP_EOL;

//ゆーざーの設計図を作る
class User{
    //プロパティ
    public $name; //名前
    public $age; //年齢
    //コンストラクタ
    public function __construct($name,$age){
        //プロパティ値のセット
        $this->name = $name;
        $this->age = $age;
        
        // print $this->name . 'さんが生まれた' . PHP_EOL;
        
    }
    
    //お酒を飲むメソッド(関数)
    public function drink(){
        //成人ならば
        if($this->age >= 20){
            print $this->name . 'さんお酒OK' . PHP_EOL;
            
        }else{ print $this->name . 'さんお酒NG' . PHP_EOL;
            
        }
    }
    //誰かに話しかけるメソッド
    public function talk($someone){
        print $this->name . 'さんが' . $someone->name . 'さんに話しかけた' . PHP_EOL;
    }
}







