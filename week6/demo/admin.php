<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        
        include_once './header.php';
        include './functions.php';
        
        /*If the user isn't logged in, it asks them
         * to type in the passcode.
         */
        
        if (!isLoggedIn()){
            die('Access not allowed');
        }
        //isLoggedIn();
        
        
        
        /*/*if ( !isset($_SESSION['loggedin']) 
                || $_SESSION['loggedin'] === false 
            ) {
            header('Location: passcode.php');
            //die('Access not allowed');
        }
         * 
         */
        
        
        ?>
        
        <h1>Admin Page</h1>
    </body>
</html>
