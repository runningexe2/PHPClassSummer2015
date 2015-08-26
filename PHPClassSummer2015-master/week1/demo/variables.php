<!DOCTYPE html>
<?php
    $myvar = 'hello';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo 'My page Title'.$myvar; ?></title>
    </head>
    <body>
        
        <h1> My Number Is       
        <?php       
            $randNumber = rand(1,10);
            echo $randNumber;
        ?>
        </h1>
        
    </body>
</html>