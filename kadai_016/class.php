<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編課題</title>
</head>

<body>
   <p>
        <?php
        // foodクラスを定義する
        class Food 
        {
            // プロパティを定義する
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // メソッドを定義する
            public function show_price() {
                print_r($this->price . '<br>');
            }
        }

        // animalクラスを定義する
        class Animal
        {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

             // コンストラクタを定義する
            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッドを定義する
            public function show_height() {
                print_r($this->height . '<br>');
            }
           
        }
        // インスタンスを生成する
        $food = new food('potato', 250);
        $animal = new animal('dog', 60, 5000);

        // インスタンスの各プロパティの値を出力する
        print_r($food);
        print_R('<br>');
        print_r($animal);
        print_R('<br>');
        $food->show_price();
        $animal->show_height();
      ?>
    </p>
</body>

</html>