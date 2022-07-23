<?php 
    class A {
        public $a;
        private $b;
        protected $c;
    }
    $a = new A;
    $a-> a =10;
    echo $a->a; 
    class B extends A {
       public function __construct()
       {
           $this->c = 20;
           return $this ->c;
       }
    }
    new B;
?>