<html>
<head></head>
<body>
<center>
<?php 
//shorturl.at/dklqx
//shortuel.at/BTUXZ
echo "<h1>Random Shape Game</h1>";

$body=array("images/circle.jpg","images/heart.jpg","images/square.jpg","images/star.jpg");
if(isset($_GET["body"]))
{
	echo "<img src=".$_GET['body'].">";
}
?>
<a href="randomPage.php?body=
<?php
echo $body[array_rand($body,1)];?>
">
<?php 
//echo "<img src='$body[0]'>";
if(isset($_GET["body"])){
	echo "<br>change shape";
}
else{
	echo "<br>Create shape";
}
?>

</a>

</center>

</body>