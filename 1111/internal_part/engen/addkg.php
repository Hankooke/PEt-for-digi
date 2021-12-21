<?php

require "../../internal_part/serv/config.php";

$message = filter_var(trim($_GET['message']),FILTER_SANITIZE_STRING);
$tlt = filter_var(trim($_GET['title']),FILTER_SANITIZE_STRING);
$date = date("Y-m-d H:i:s");
$id = $_COOKIE['idpu'];  
$dim1 = $_COOKIE['indtx'];
$chan = $_COOKIE['chan'];




$sql3 = "INSERT INTO `canvas` (`id`, `name`, `date`, `chap`, `view`, `answer`, `autor`, `datelast`, `mmpl`, `mmmin`, `katg`) VALUES (NULL, '$tlt', '$date', NULL, '0', '0', '$id', '$date', '0', '0', $dim1)";
$articless = mysqli_query($connection, $sql3);


$sql3 = "SELECT MAX(id) AS ct From `canvas` ";

$articless2 = mysqli_query($connection, $sql3);
$cat = mysqli_fetch_assoc($articless2);


$dss =  (int)$cat['ct'];


$sql3 ="INSERT INTO `messages` (`id`, `autor`, `message`, `date`, `changemes`, `type`, `answer`) VALUES (NULL, '$id', '$message', '$date', '1', '1', '$dss')";

$articless3 = mysqli_query($connection, $sql3);


header("location: http://spacedock.ru/?pag=12&dim='$dim1'");


 ?>