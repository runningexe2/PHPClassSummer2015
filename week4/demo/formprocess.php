<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $action = filter_input(INPUT_POST, 'action');
        if ($action === 'Submit1') {
            echo 'submitted form 1';
        }
        
        if ($action === 'Submit2') {
            echo 'submitted form 2';
        }
                
        include './includes/form1.php';
        include './includes/form2.php';
        
        ?>
    </body>
</html>
