<?php
/*
    class DEMO {
        private $attr;
        public function setValue($attr){
            $this->attr = $attr;
        }
        public function getValue(){
            return $this->attr;
        }
    }
    $a = new DEMO;
    $a -> setValue(20);
    echo $a -> getValue();
*/
class RECTANGLE
{
    private $height;
    private $weight;
    public function setValue($height, $weight)
    {
        $this->height = $height;
        $this->weight = $weight;
    }
    public function getPerimester()
    {
        return ($this->height + $this->weight) * 2;
    }
    public function getAre()
    {
        return ($this->height * $this->weight);
    }
}
$a = new RECTANGLE;
$a -> setValue(10,20);
echo $a->getPerimester()."<br>";
echo $a->getAre();
