<?php 
    class RECTANGLE{
        public static $weight;
        public static $height;
        public static function getPerimester(){
            return (self::$height + self::$weight) *2;
        }
        public static function getAre(){
            return (self::$height * self::$weight);
        }
    }
    class DEMO{
        public function __construct()
        {
            RECTANGLE::$weight = 10;
            RECTANGLE::$height = 20;
            echo RECTANGLE::$weight."<br>";
            echo RECTANGLE::$height."<br>";
            echo RECTANGLE::getPerimester();         
        }
    }
    new DEMO;
?>