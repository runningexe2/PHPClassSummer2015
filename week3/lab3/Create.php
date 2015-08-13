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

        $results = '';

        if (isPostRequest()) {

            $db = getDatabase();

            $stmt = $db->prepare("INSERT INTO corps SET corp = :corp, incorp_dt = now(), email = :email, zipcode = :zipcode, owner = :owner, phone = :phone");
            $corp = filter_input(INPUT_POST, 'corp');
            $email = filter_input(INPUT_POST, 'email');
            $zipcode = filter_input(INPUT_POST, 'zipcode');
            $owner = filter_input(INPUT_POST, 'owner');
            $phone = filter_input(INPUT_POST, 'phone');
            $binds = array(
                ":corp" => $corp,
                ":email" => $email,
                ":zipcode" => $zipcode,
                ":owner" => $owner,
                ":phone" => $phone
            );

            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                //$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $results = 'Corporation Added';
            }
        }
        ?>
    <center><h1><?php echo $results; ?></h1>

        <h3>Enter Corporation Info</h3>
        <form method="post" action="#">            
            Corp: <input type="text" value="" name="corp" />
            <br /><br /> 
            E-Mail: <input type="text" value="" name="email" />
            <br /><br /> 
            Zip-code: <input type="text" value="" name="zipcode" />
            <br /><br /> 
            Owner: <input type="text" value="" name="owner" />
            <br /><br /> 
            Phone: <input type="text" value="" name="phone" />
            <br /><br />     
            <input type="submit" value="Submit" />
        </form>

        <h3><a href="view-page.php">View Page</h3>
    </center>


</body>
</html>
