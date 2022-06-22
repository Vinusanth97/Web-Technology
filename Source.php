<html>
<head></head>
<body>
<?php
echo "Hello World!!<br>";

$my_variable=70;
echo "$my_variable";
$var1="Web ";
$var2="Technology";

echo $var1."**".$var2;
$X=30;
$Y=45;
print "<br>I am print a statement in php!!<BR>";
echo $X+$Y;
echo "<BR>";
#PRINT "Hello !!","Hi";
define("My_cons",18);
print(My_cons);
echo "<BR>";

$var5=25;
echo gettype($var5);
echo"<br>";
settype($var5,"String");
echo gettype($var5);
echo"==============================================<br>";
$w=intval($var5);
$w1=Strval($var5);
echo is_int($w);
echo is_String($w);
echo gettype($var5);
echo "Contiosional Statement<br>";
$mark=49;
$result=" ";
($mark>50)? $result="Pass" : $result="Fail";
echo "$result============================================<br>";

function sum($num=5)
{
	return 5+$num;

}
echo sum(20);
echo "<br>";

$title ="Mr.";
function printname()
{
	
	$fname="Ram";
	$lname="Mathan";
	print("$fname $lname");
	#global $title;
	#print("$title");
	
}
print("$title");
printname();
#print("$fname");

echo "<br>";

$x=10; $y=20;
#$sum=0;
function add()
{
	$x=5;
	#$y=10;
	$sum=0;
	#global $sum;
	static $sum;
 $sum=$sum+$x;
	
	return $sum+$x;
	
	
}
echo add(),"<br>";
echo add(),"<br>";
echo add(),"<br>";
echo "==================================<br>";
function findEO()
{
	
	for($i=1;$i<=30;$i++)
	{
		
		if($i%2==0)
		{
			static $evensum=0;
			$evensum=$evensum+$i;
			
			
			
			
		}
		else
		{
			static $oddsum=0;
			$oddsum=$oddsum+$i;
			
			
			
		}
	}
	PRINT("$evensum<BR>");
	PRINT("$oddsum");	
}
echo findEO();
ECHO "<br>";
ECHO "===================<br>";

function iterate()
{
	for($i=1;$i<=50;$i++)
	{
		if($i%(3*5)==0)
		{
			
			print "FizzBuzz";
			echo "<br>";
		}
		
		elseif($i%5==0)
		{
			print "Buzz";
			echo "<br>";
		}
		
		elseif($i%3==0)
		{
			print "Fizz";
			echo "<br>";
		}
		
		else
		{
				print "$i";
				echo "<br>";
		}
				
	}
		
}
iterate();

?>
</body>
</html>
