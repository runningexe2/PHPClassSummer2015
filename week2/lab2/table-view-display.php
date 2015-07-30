<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './dbConn.php';
        include './functions.php';

        if (isPostRequest()) {

            $db = getDatabase();

            $stmt = $db->prepare("INSERT INTO actors SET firstName = :firstname, lastName = :lastname, dob = :dob, height = :height");

            $firstName = filter_input(INPUT_POST, 'firstname');
            $lastName = filter_input(INPUT_POST, 'lastname');
            $dob = filter_input(INPUT_POST, 'dob');
            $height = filter_input(INPUT_POST, 'height');
            $binds = array(
                ":firstname" => $firstName,
                ":lastname" => $lastName,
                ":dob" => $dob,
                ":height" => $height
            );

            $results = array();
            if ($stmt->execute() && $stmt->rowCount() > 0) {
                //$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $results = 'Date Added';
            }
        }
        ?>

        <?php
        $db = getDatabase();
        
        $stmt = $db->prepare("SELECT * FROM actors");
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name </th>
                    <th>Last Name </th>
                    <th>Date of Birth </th>
                    <th>Height </th>
                </tr>
            </thead>



<?php foreach ($results as $row):
    ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['lastName']; ?></td>            
                    <td><?php echo $row['dob']; ?></td>            
                    <td><?php echo $row['height']; ?></td>            
                </tr>
<?php endforeach; ?>
        </table>

    </body>
</html>