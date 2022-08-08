<?php
//method 1
$firstName="John";
$age=24;
$queryString="firstName=$firstName&amp;age=$age";
echo "<h1>Welcome</h1>";
echo "<p><a href='moreinfo.php?".$queryString."'>Find out more info on this person</a></p>";






?>