<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> <?php echo 'My Page Title'.$myvar; ?> </title>
    </head>
    <body>
        <?php
            $myvar = 'hello';
            echo 'this is some text';
            echo $myvar;
        ?>
    </body>
</html>
