<?php
include "connect.php";

$id = "id";

mysql_query($link,"delete from tb_login WHERE id_login = '$id'");



?>