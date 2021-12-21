<?php

require "../../internal_part/serv/config.php";

$message = filter_var(trim($_GET['message']),FILTER_SANITIZE_STRING);

$date = date("Y-m-d H:i:s");
$id = $_COOKIE['idpu'];  
$dim1 = $_COOKIE['indtx'];
$chan = $_COOKIE['chan'];




if($chan==''){
$sql3 = "INSERT INTO `messages` (`id`, `autor`, `message`, `date`, `changemes`, `type`, `answer`) VALUES (NULL, '$id', '$message', '$date', '0', '0', '$dim1')";

}
else{
$sql3 = "UPDATE messages SET `message` = '$message' WHERE id = '$chan'";

}



$articless = mysqli_query($connection, $sql3);


 header("location: http://spacedock.ru/?pag=1&dim=".$dim1);


 ?>