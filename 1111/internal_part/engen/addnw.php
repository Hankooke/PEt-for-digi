<?php

require "../../internal_part/serv/config.php";

$message = filter_var(trim($_GET['message']),FILTER_SANITIZE_STRING);
$tlt = filter_var(trim($_GET['title']),FILTER_SANITIZE_STRING);
$date = date("Y-m-d H:i:s");
$id = $_COOKIE['idpu'];  
$dim1 = $_COOKIE['indtx'];
$chan = $_COOKIE['chan'];




$sql3 = "INSERT INTO `new` (`id`, `title`, `text`, `autor`, `date`) VALUES (NULL, '$tlt', '$message', '$id', '$date')";





$articless = mysqli_query($connection, $sql3);


 header("location: http://spacedock.ru/?pag=9");


 ?>