<?php
//__construct chạy đầu tiên trong class
class RECTANGLE{
    public $weight;
    public $height;
    public function getPerimester(){
        return ($this->weight + $this->height)*2;
    }
    public function getAre(){
        return $this->weight * $this->height;
    }
    public function __construct()
    {
        $this->weight = 10;
        $this->height = 20;
    }
};
$a = new RECTANGLE();

// $a->weight = 5;
// $a->height = 4;

echo $a -> getPerimester()."<br>";
echo $a -> getAre();
?>