<?php
$p=mysqli_connect('localhost','root','4gc','wedkarstwo');
$zapytanie="insert into zawody_wedkarskie values(NULL,0,".$_POST['lowisko'].",'"
.$_POST['data']."','".$_POST['sedzia']."')";
mysqli_query($p,$zapytanie);
mysqli_close($p);
?>