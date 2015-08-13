<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        
        
    </head>
    <body>
        <?php
        include './dbconnect.php';
        include './functions.php';

        $db = getDatabase();

        $id = filter_input(INPUT_GET, 'id');
        
        /*Deletes the SELECTED piece of data*/
        $stmt = $db->prepare("DELETE FROM corps WHERE id = :id");

        $binds = array(
            ":id" => $id
        );


        $isDeleted = false;
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $isDeleted = true;
        }
        ?>


    <center><h1> Record <?php echo $id; ?>
            <?php if (!$isDeleted): ?> 
                Not
            <?php endif; ?>
            Deleted</h1>

        <p> <a href="view-page.php">View page</a></p>
    </center>



</body>
</html>
