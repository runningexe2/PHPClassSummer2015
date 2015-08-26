<?php 

function isLoggedIn(){
    
}
/*if ( !isset($_SESSION['loggedin']) 
                || $_SESSION['loggedin'] === false 
            ) {
            //header('Location: passcode.php');
            die('Access not allowed');
        }
*/

if ( !isset($_SESSION['loggedin']) 
                || $_SESSION['loggedin'] === false 
            ) {
            return false;
        }

