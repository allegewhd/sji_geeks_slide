<?php
    interface Person {
    }

    class Foo {
        public static $count = 0;
        public static function plusOne()
        {
            return "The count is " . ++self::$count . ".\n";
        }
        public function __construct() {
        }
    }

    class User extends Foo implements Person {
        protected $name = null;

        public function __construct($name) { // constructor, we'll talk about magic method later(__xxx)
            parent::__construct();
            $this->name = $name;
        }

        public function hello() {
            printf("%s: Hello!\n", $this->name);
        }
    }

    $user = new User('Mike');
    $user->hello();        // call object method by ->

    echo Foo::plusOne();
    echo Foo::$count . "\n";           // weird:)

