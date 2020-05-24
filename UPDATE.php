<?php
include "connect.php";
$nome = "nome";
$email = "email";

mysql_query($link,"update tb_login set nome = '$nome', email = '$email' WHERE id_login = id");

?>