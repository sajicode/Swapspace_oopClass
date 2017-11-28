<?php

    class Statics
    {
        private static $_count = 0;

        public function __construct() {

            #increment counter
            self::$_count++;
        }

        public function getCount() {

            return self::$_count;
        }

        public static function doStatic($myName) {
            //$self->name= $myName;
        }

    }

    class A {
        
        const HOURLY_RATE = 50;
    }


    $staticInstance = new Statics();

    // $secRef = new Statics();

    // echo $staticInstance->getCount();

    // echo "<hr/>";

    // echo $secRef->getCount();
    Statics::doStatic('femi');     //calling a method without creating a class instance

?>