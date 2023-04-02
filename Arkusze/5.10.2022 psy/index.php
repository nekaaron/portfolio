<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Forum o psach</title>
<link rel="stylesheet" href="styl.css">
</head>
<body>
 <?php
 $p=mysqli_connect('localhost','root','','forumpsy');
 ?>   
<header>

<h1>Forum miłośników psów</h1>
</header>
<div id="lewy">
<img src="avatar.png" alt="Użytkownik forum" title="AVATARrrrrrr">
<?php
$wynik=mysqli_query($p,"select k.nick,k.postow ,p.pytanie from konta k,pytania p where p.id=1 and p.konta_id=k.id");
while(($tab=mysqli_fetch_array($wynik))!=NULL)
{
echo"<h4>Użytkownik:".$tab['nick']."</h4>";
echo"<p>".$tab['postow']." postow na forum</p>";
echo"<p>".$tab['pytanie']."</p>";
}
?>
<video controls loop muted autoplay >
<source src='video.mp4' type='video/mp4'> 
</video>
</div>

<div id="prawy">
<form method="post" action="#">
<textarea rows="4" name="pole" cols="40"></textarea>
<input class='przycisk' name="przycisk" type="submit" value="Dodaj odpowiedź"/>
</form>
<?php
if(isset($_POST['przycisk']))
{
    echo $_POST['pole'];
    mysqli_query($p,"insert into odpowiedzi(pytania_id,konta_id,odpowiedz) values(1,5,'".$_POST['pole']."')");
}
?>
<h2>Odpowiedzi na pytanie</h2>

<ol>
    <?php
    //skrypt3
    ?>
</ol>
</div>
<footer>
Autor 67565ro787y676546 <a href="http://mojestrony.pl/" target="_blank">Zobacz nasze realizacje</a>
</footer>
<?php
mysqli_close($p);
?>
</body>
</html>