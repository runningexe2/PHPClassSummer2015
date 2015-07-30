<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './dbConn.php';

        $results = '';

        if (isPostRequest()) {
            $db = getDatabase();
            $stmt = $db->prepare("INSERT INTO test SET firstName = :firstName, lastName = :lastName, dob = :dob, height = :height");
            $firstName = filter_input(INPUT_POST, 'firstName');
            $lastName = filter_input(INPUT_POST, 'lastName');
            $dob = filter_input(INPUT_POST, 'dob');
            $height = filter_input(INPUT_POST, 'height');
            $binds = array(
                ":firstName" => $firstName,
                ":lastName" => $lastName,
                ":dob" => $dob,
                ":height" => $height
            );

            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = $stmt->fetch(PDO::FETCH_ASSOC);
                $results = 'Data Added';
            }
        }
        ?>

        <h1><?php echo $results; ?></h1>

        <form method="post" action="#">            
            First Name: <input type="text" value="" name="firstName" />
            <br />
            Last Name: <input type="text" value="" name="lastName" />
            <br />  
            Date of Birth: <input type="date" value="" name="dob" />
            <br />  
            Height: <input type="text" value="" name="height" />
            <br />       
            <input type="submit" value="Submit" />
        </form>

    </body>
</html>
