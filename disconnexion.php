<?php 
// When user logs out, cookie is deleted.
setcookie('cookieBlog', '', time()-1);
header('Location:index.php');
?>