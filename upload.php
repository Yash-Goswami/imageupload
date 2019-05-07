<html>
<?php 
$uname=$_POST['uname'];
$f=$_FILES['fn'];
?>
<h3><?php echo "Hello $uname<br>";?></h3>
<?php echo "File Name: ".$f['name']."<br>";
echo "File Type: ".$f['type']."<br>";
echo "File Size: ".$f['size']."<br><br><br><br>";
if(file_exists("photos/".$f['name']))
{?>
	<h1 style="color:red;"><?php echo $f['name']." already exist"; ?></h1>
<?php
}
else if($f['type']=="image/jpeg" or $f['type']=="image/png")
{

	move_uploaded_file($f['tmp_name'],"photos/".$f['name']);
?>
	<h1 style="color:red;"><?php echo "uploaded successfully";?></h1>
<?php
}
else
{
?>	
	<h1 style="color:red;"><?php echo "File format should be in .jpeg or .png";?></h1>
<?php	
}
?>
<body style="background-color:#abcdef;">
</body>
</html>