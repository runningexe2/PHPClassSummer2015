<?php if ( !isset($_SESSION['isValidUser']) || $_SESSION['isValidUser'] !== true ) : ?>
    <p><a href="../adminIndex.php">Login</a></p>
<?php die('Access Denied '); endif;  ?>