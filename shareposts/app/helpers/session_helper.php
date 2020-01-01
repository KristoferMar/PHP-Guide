<?php 
    //Start session
    session_start();

    //Flash message helper
    //Example - flash('register_success', 'You are now registered', 'alert alert-danger');
    //DISPLAY IN VIEW - <?php echo flash('register_success); ? >
    function flash($name = '', $message = '', $class = 'alert alert-success'){
        if(!empty($name)){
            if(!empty($message) && empty($_SESSION[$name])){
                if(!empty($_SESSION[$name])) {
                    unset($_SESSION[$name]);
                }
                if(!empty($_SESSION[$name. '_class'])) {
                    unset($_SESSION[$name. '_class']);
                }
                
                $_SESSION[$name] = $message;
                $_SESSION[$name . '_class'] = $class;
            } elseif(empty($message) && !empty($_SESSION[$name])){
                $class = !empty($_SESSION[$name. '_class']) ? $_SESSION[$name. '_class'] : '';
                echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
                unset($_SESSION[$name]);
                unset($_SESSION[$name. '_class']);
            }
        }
    }

    //Checks if user is logged in
    function isLoggedIn(){
        if(isset($_SESSION['user_id'])){ //isset checks if something is set
          return true;
        } else {
          return false;
        }
      }


//Example of how session variables work.
    /* $_SESSION['user'] = 'Brad';
    unset($_SESSION['user']); */