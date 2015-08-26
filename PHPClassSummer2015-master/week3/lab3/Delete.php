<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './dbconnect.php';
        include './functions.php';

        $db = getDatabase();

        $id = filter_input(INPUT_GET, 'id');

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
