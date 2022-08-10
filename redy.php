<?php 
//10/08/2022
//setcookies()

setcookie("Name","John",time()+60*60,"","",false,true);
setcookie("Id",1020,time()+60,"","",false,true);

//To print Id of the cookies
//echo $_COOKIE["Id"];

//To remove cookies
setcookie("Name","",time()-3600,"","",false,true);
//echo $_COOKIE["Name"];
if(isset($_COOKIE["Name"])){echo $_COOKIE["Name"];}



?>