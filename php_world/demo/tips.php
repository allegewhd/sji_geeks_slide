<?php
    echo "hello world";                 // no line break
    print "hello world";                // no line break

    $name = "sji";
    printf("hello %s\n", $name);
    $message = sprintf("hello %s\n", $name);

    class MyClass {
        private $name = "hello";
        protected $age = 36;
        public $job = "programmer";
    }

    $my = new MyClass;          // () can be omitted
    var_dump($my);              // for debug, with data type information
    print_r($my);               // for debug, for html display, only value

    $foo = array();
    echo "is_null ? " . is_null($foo) . "\n";    // false
    echo "is_empty ? " . empty($foo) . "\n";      // true
