<html>
<body>

<?php

// Create connection
$conn = new mysqli("localhost","root","","account");
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
echo "connected to MYSQL";
$query1="INSERT INTO useraccount(FName,LName,Email,Username,password,Profession,gender,Birthday,Contact) VALUES('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[mob]','$_POST[pass]','$_POST[profes]','$_POST[gen]','$_POST[dob]','$_POST[contact]')";

if($conn->query($query1)==TRUE)
{
echo"hello";	
}

$conn->close();
?>
</body>
</html>