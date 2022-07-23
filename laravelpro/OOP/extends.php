<?php 
    class A {
        public $attr_1;
        protected function method_1(){
            $a = 10;
            echo $a;
        }
    }
    class B extends A{
    public $attr_2;
    public function method_2()
    {
        $this->method_1();
    }
    }
    $b = new B;
    $b->method_2();
?>