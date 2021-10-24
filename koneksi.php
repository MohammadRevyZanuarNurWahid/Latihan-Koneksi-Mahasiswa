<?php
$conn=mysql_connect('localhost','root','','dataprodi');	
if (mysql_connect_error()) {
	printf("Connect failed: %\n", mysql_connect_error());
	exit();
}
?>