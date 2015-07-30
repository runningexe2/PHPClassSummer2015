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
                //$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $results = 'Data Added';
            }
        }
        ?>

        <h1><?php echo $results; ?></h1>

        <form method="post" action="#">            
            <h2>  First Name: <input type="text" value="" name="firstName" /></h2>
            <br />
            <h2>Last Name: <input type="text" value="" name="lastName" /></h2>
            <br />  
            <h2>Date of Birth: <input type="date" value="" name="dob" /></h2>
            <br />  
            <h2>Height: <input type="text" value="" name="height" /></h2>
            <br />       
            <input type="submit" value="Submit" />
        </form>

    </body>
</html>
