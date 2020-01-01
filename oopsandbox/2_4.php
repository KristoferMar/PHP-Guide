<?php

    class User {
        public $name;
        public $age;

        //Constructor - Always run automatically.
        public function __construct($name, $age){
           echo __CLASS__ . ' instantiated<br>';
           $this->name = $name;
           $this->age = $age;
        }

        public function sayHello(){
            return $this->name . ' Says Hello';
        }

        //Last thing that happens. - After we are done using it.
        //Used for cleanup & closing connections, etc
        public function __destruct() {
            echo 'destructor ran..';
        }
    }

    $user1 = new User('Brad', 36);

    echo $user1->name . ' is ' . $user1->age . ' years old ';
    echo '<br>';
    echo $user1->sayHello();

    echo '<br>';

    $user2 = new User('Sarah', 27);
    echo $user2->name . ' is ' . $user2->age . ' years old ';
    echo '<br>';
    echo $user2->sayHello();