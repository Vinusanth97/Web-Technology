<?php
//10/08/2022
  define("USERNAME","admin");
  define("PASSWORD","admin123");
 if(isset($_POST["login"]))
{
if(($_POST["username"]==USERNAME)&&($_POST["password"]==PASSWORD))
{
 
 //   echo "Welcome ".$_POST["username"];
 //Set cookies here
    setcookie("username",USERNAME,time()+60*60,"","",false,true);
    echo "Welcome!!".$_COOKIE["username"];
//header("Location:check.php");?>

    <a href="check.php?action=logout">
<button style="float:right" type="button" name="logout">logout</button></a><br><br>

 <?php
 echo $_COOKIE["username"];
 if(isset($_GET["action"]) and $_GET["action"]=="logout"){
  
   setcookie("username","",time()-3600,"","",false,true);
   echo "ok";
   //header("Location:index.php");
 }

}
 //else if(empty($_POST["username"]) or(empty($_POST["password"])))
{
   // echo "User Name or Password do not empty!!!";
}
//else
{
   // header("Location:index.php");
}



}





?>