<html><?php
$username="root";
$password="";
$hostname="localhost";
$dbhandle=mysql_connect($hostname,$username,$password)or die("Unable toconnect to MySQL");
echo "Connected to MySQL<br>";
$selected=mysql_select_db("upload",$dbhandle)or die("couldnot select examples");
$name1=$_POST['tf'];
$area1=$_POST['tf2'];
$iden1=$_POST['tf3'];
$mno1=$_POST['tf4'];
$mail1=$_POST['tf5'];
print "Name is:".$name1."<br>";
print "RollNo is:".$area1."<br>";
$ins="insert into tbl(name,area,iden,mno,mail) values('".$name1."','".$area1"','".$iden1."','".$mno1."','".$mail1."')";
$ins1=mysql_query($ins,$dbhandle);
mysql_close($dbhandle);
?>
</html>