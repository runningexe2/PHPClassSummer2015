<?php if ( !isset($_SESSION['isValidUser']) || $_SESSION['isValidUser'] !== true ) : ?>
<p><a href="../admin/adminIndex.php">Login</a></p>
<?php die('Access Denied '); endif;  ?>