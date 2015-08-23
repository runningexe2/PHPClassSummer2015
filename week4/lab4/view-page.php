
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="includes/css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <title></title>        
    </head>
    <body>
        <br/>

        <?php
        
        include './Includes/Sort.php';
        include './Includes/Search.php';
        include_once './functions/dbconnect.php';
        include_once './functions/dbData.php';

        $results = getAllDatabaseData();
        $action = filter_input(INPUT_GET, 'action');
        if ($action === 'sort') {

            $column = filter_input(INPUT_GET, 'sortby');
            $order = filter_input(INPUT_GET, 'sort');
            $results = sortDatabase($column, $order);
        }
        if ($action === 'search') {
            $column = filter_input(INPUT_GET, 'colSearch');
            $Search = filter_input(INPUT_GET, 'Search');
            $results = searchDatabase($column, $Search);
        }
        ?>
        <br>

    <br/>
    <table class="table table-striped">
        <thead>
        <th>ID:</th>
        <th>Corporations:</th>
        <th>Date:</th>
        <th>E-mail:</th>
        <th>Zip-Code:</th> 
        <th>Owner:</th> 
        <th>Phone:</th>         
    </thead>

    <?php foreach ($results as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['corp']; ?></td>
            <td><?php echo $row['incorp_dt']; ?></td> 
            <td><?php echo $row['email']; ?></td> 
            <td><?php echo $row['zipcode']; ?></td> 
            <td><?php echo $row['owner']; ?></td> 
            <td><?php echo $row['phone']; ?></td> 
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>