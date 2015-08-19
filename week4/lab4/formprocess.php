<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $action = filter_input(INPUT_POST, 'action');
        if ($action === 'Submit1') {
            echo 'Submitted';
        }

        if ($action === 'sort') {
            echo 'Data Sorted';
        }

        include './includes/Sort.php';
        include './includes/Search.php';
        include './functions/dbconnect.php';
        include './functions/dbData.php';
        include './functions/util.php';
        ?>
    </body>
</html>
