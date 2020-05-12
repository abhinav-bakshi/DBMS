<?php
session_start();
session_unset();
session_destroy();
header('location:first.php?err='.urlencode('You Have Logged out succesfully'));
?>