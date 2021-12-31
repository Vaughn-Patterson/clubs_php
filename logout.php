<?php 
require_once 'includes/header.php';
?>

<?php 
session_destroy();
header('Location: index.php')
?>