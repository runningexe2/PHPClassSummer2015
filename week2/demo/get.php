<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            $key = 'test';
            echo sha1($str);
            
            $id = filter_input(INPUT_GET, 'id');            
            echo $id;
        
                if ($id === sha1($key) ){
                    echo 'Key entered';
                }
        ?>
    </body>
</html>
