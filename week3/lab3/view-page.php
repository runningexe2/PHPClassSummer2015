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


        $stmt = $db->prepare("SELECT * FROM corps");

        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

  
        <table class="table table-striped">
            <thead>
                <tr>

            <center>    <th><h3> <a href="create.php"> Add</a> a New Corporation</h3></th></center>  

            </tr>
            </thead>
            <?php
            ?>

            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['corp']; ?></td>
                    <td><a class="btn btn-primary" href="Read.php?id=<?php echo $row['id']; ?>">Read</a></td> 
                    <td><a class="btn btn-success" href="Update.php?id=<?php echo $row['id']; ?>">Update</a></td>            
                    <td><a class="btn btn-danger" href="Delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>            
                </tr>
            <?php endforeach; ?>
        </table>

</body>
</html>
