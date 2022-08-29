<?php 

$filename=basename("C:\xampp\htdocs\ready\index.html");
echo $filename;
echo "<br>";

$dir=basename("C:\xampp\htdocs\ready");
echo $dir;
echo "<br>";

//open a file
//$hand=fopen("C:\xampp\htdocs\ready\index.html","r");


/*
$myfile=fopen("myfile\sample.txt","r") or die("Unable to open the file");
echo fread($myfile,filesize("myfile\sample.txt"));
//echo fread($myfile,6);

fclose($myfile);
*/

$myfile=fopen("myfile\sample.txt","w")or die("Unable to open file!!");
$txt="John Doe\n";
fwrite($myfile,$txt);
$txt="Karan Doe\n";
fwrite($myfile,$txt);

//echo fread($myfile,filesize("myfile\sample.txt"));
fclose($myfile);

//echo fread($myfile,filesize("myfile\sample.txt"));
$myfile=fopen("myfile\sample.txt","a")or die("Unable to open file!!");
$txt="New User\n";
fwrite($myfile,$txt);
$txt="NewStor Doe\n";
fwrite($myfile,$txt);

//echo fread($myfile,filesize("myfile\sample.txt"));
fclose($myfile);

$handle=fopen("myfile\prac.txt","r");
$text="";
while(!feof($handle)){
	$text.=fread($handle,3);
}
echo $text."<br>";
fclose($handle);


//Read one line at a time
$handle=fopen("myfile\prac.txt","r");
$lineNumber=1;





?>