<?php 
//shorturl.at/dklqx
//Url encode 2
$firstName="John";
$homepage="http://www.example.com";
$favouriteSport="Ice Hockey";
$queryString="firstName=".urlencode($firstName)."&amp;homePage=".urlencode($homepage)."&amp;favouriteSport=".urlencode($favouriteSport);
echo "<p><a href='moreinfo.php?".$queryString."'>Find out more info on this person</a></p>";

//Associative array  3
$field=array(
"firstName"=>"John",
"homePage"=>"http://www.example.com",
"favouriteSport"=>"Ice Hockey"
);
echo htmlspecialchars(
http_build_query($field));




?>