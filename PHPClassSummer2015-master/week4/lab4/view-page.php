
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>        
    </head>
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" href="includes/css/style.css">
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
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
            /*this will sort the data in either asc or desc order, whichever is selected. 
             * $column and $order are referenced in the sort.php page*/
            $column = filter_input(INPUT_GET, 'sortby');
            $order = filter_input(INPUT_GET, 'sort');
            $results = sortDatabase($column, $order);
        }
        /*Searches for data, comparing your input to data that exists using '%' to ensure
        the data is valid or not by matching characters/numbers. if not, spits an error.*/
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