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

            /*when the user clicks 'Read' it realizes which id it is 
             * attached to and reads out that line of data*/
            $stmt = $db->prepare("SELECT * FROM corps WHERE id = :id");
            $id = filter_input(INPUT_GET, 'id');
            $binds = array(
                ":id" => $id
            );

        $results = array();
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

    <center>
        <table>
            <thead>
                <tr>
                    <th>Corporation: </th>                 
                    <th>Incorp. Date: </th>                 
                    <th>E-Mail: </th>                 
                    <th>Zip-Code: </th>                 
                    <th>Owner: </th>                 
                    <th>Phone: </th>                 
                </tr>
            </thead>
            <?php
            ?>

            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['corp']; ?></td>
                    <td><?php echo $row['incorp_dt']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['zipcode']; ?></td>
                    <td><?php echo $row['owner']; ?></td>
                    <td><?php echo $row['phone']; ?></td>

                    <td><a href="Update.php?id=<?php echo $row['id']; ?>">Update</a></td>            
                    <td><a href="Delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>            
                </tr>
            <?php endforeach; ?>
        </table>
    </center>

</body>
</html>
