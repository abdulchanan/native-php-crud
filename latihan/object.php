<?php

class Fruit {
    public $color;
    public $taste;
    public $price = 0;

    public function __construct($color, $taste, $price) {
        // $this(memilih semua bagian object), ->color(menentukan parameter mana yang akan disimpan), $color(menyimpan parameter color dalam fungsi, agar tidak hilang)
        $this->color = $color;
        $this->taste = $taste;
        $this->price = $price;
    }

    public function perhitungan($price) {
        $this->price = $price;
    }

    // public function perhitungan($price) {
    //     $this->price = $price + 10000;
    //     echo "HALO SEMUANYA";
    // }
}


$fruitObject = new Fruit("kuning", "asam", 10000);

echo $fruitObject->color;
echo $fruitObject->color;

$fruitObject->perhitungan();
echo $fruitObject->price;

?>
