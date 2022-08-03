<html>
<head><title>File Upload Form</title>
</head>
<h1>This for file upload form</h1>

<form action="" method="post" enctype="multipart/form-data">
<label for="fileSelectField" >Select File </label>
<input type="file" name="photo" id="fileSelectField" value=""/><br><br>
<!-- For hidden filed -->
<input type="hidden" name="Max_File_Size" value="10000" />
<input type ="file" name="FileSelectFiled" id="FileSelectFiled" /><br>
 
<input type="submit" value="Submit" name="sub">
</form>
<?php 
if($_FILES["photo"]["size"]>10000) die("File to big!!");


if(isset($_POST["sub"]))
{	$filename=$_FILES["photo"]["name"];
	$filetype=$_FILES["photo"]["type"];
	$filesize=$_FILES["photo"]["size"];
	$fileTempFolder=$_FILES["photo"]["tmp_name"];
	
	$filename2=$_FILES["FileSelectFiled"]["name"];
//echo "File Name is:".$filename."<br>"; 
echo "File Name is:".$filename2."<br>"; 
echo "File Type is:".$filetype."<br>"; 
echo "File Size is:".$filesize."<br>"; 
echo "File Temp Folder is:".$fileTempFolder."<br>"; 

//To move our file
if(move_uploaded_file($_FILES['photo']['tmp_name'],"C:\\xampp\\htdocs\\img\\".$_FILES["photo"]["name"]))
{
	echo "Your files was uploaded";
}
else{
	echo "not uploaded";
}

}?>


</html>