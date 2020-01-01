<?php 
//Define a class
    class User {
        //Properties (attributes)

        public $name;

        //Methods (functions)
        public function sayHello(){
            //We use $this to access public variables within a method.
            return $this->name .' Says Hello';
        }
    }

    //Instatiate a user object from the user class
    $user1 = new User();

    $user1->name = 'Brad';
    echo $user1->name;
    echo '<br>';
    echo $user1->sayHello();

    echo '<br>';
    //Create new user
    $user2 = new User();
    $user2->name = 'Kristofer';
    echo $user2->name;
    echo '<br>';
    echo $user2->sayHello();
