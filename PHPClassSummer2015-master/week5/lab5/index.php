<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" href="includes/css/style.css">
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
    <body>
        <?php
        include './functions/dbconnect.php';
        include './functions/dbData.php';
        include './functions/util.php';

        $results = '';
        $isValid = true;
        $textbox = '';
        $site = 0;

        if (isPostRequest()) {

            $db = dbconnect();

            $stmt = $db->prepare("INSERT INTO sites SET site = :site, date = now()");
            $site = filter_input(INPUT_POST, 'site');

            if (filter_var($site, FILTER_VALIDATE_URL) === false) {
                $isValid = false;
                $textbox = filter_input(INPUT_POST, 'site');
                $results = 'Please Enter a Valid Website.';
            }
                if ($isValid) {

                    $site = filter_input(INPUT_POST, 'site');
                    $stmt = $db->prepare('INSERT INTO sites SET site = :site, date = now()');
            }

            $dataAdd = array(
                ":site" => $site,
            );
            if ($stmt->execute($dataAdd) && $stmt->rowCount() > 0) {
                $results = 'Data Added';
            }   else {
                    $results = 'Data is not valid.';
            }
        }
        ?>
<center>
    <h1>Enter a Website</h1>
    <br/>
        <form method="post" action="#">

            <h4><b>Website:</b> <input type="text" value="" name="site" /></h4>
                <br/>                
                    <input type="submit" class="btn btn-primary" value="submit" />
                    <input type="button" class="btn btn-default" value="clear"/>
                        <p><?php echo $results ?></p>
        </form> 
</center>
    </body>
</html>