<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<style>
body {
    background-image: url("image.jpg");
    background-repeat: no-repeat;
    background-size: cover; 
}
</style>
<body >
<p align="left"> <font size="7" color="blue">Add Records </font></p><br>
<form action="dimuthu_insert.php" method="post"  >
<font size="5">SELECT TABLE  :-  </font>
<select name="table">
<option value="company" ><font size="4">Company</font></option>
<option value="personal"><font size="4">Personal</font></option>
</select>
<br/>
<br/>
    <p>
        <label for="reference_no"><font size="5">Reference Number:&nbsp;&nbsp;&nbsp;</font>	</label>
        <input type="text" name="reference_no" id="reference_no">
    </p>
	
    <p>
        <label for="tin_no"><font size="5">TIN Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
        <input type="text" name="tin_no" id="tin_no">
    </p>
    <p>
        <label for="name"><font size="5">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	</font></label>
        <input type="text" name="name" id="name">
    </p>
	<p>
        <label for="address"><font size="5">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	</font></label>
        <input type="text" name="address" id="address">
    </p>
	<p>
        <label for="email"><font size="5">Email Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	</label>
        <input type="text" name="email" id="email">
    </p>
	<p>
        <label for="director">Director:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	</font></label>
        <input type="text" name="director" id="director">
    </p>
	<p>
        <label for="nic"><font size="5">NIC:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	</label>
        <input type="text" name="nic" id="nic">
    </p>
	<p>
        <label for="mobile_no"><font size="5">Mobile Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>	</label>
        <input type="text" name="mobile_no" id="mobile_no">
    </p>
	<p>
        <label for="office_no"><font size="5">Office Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>	</label>
        <input type="text" name="office_no" id="office_no">
    </p>
	
    <input type="submit" value="Submit">
</form>
</body>
</html>





<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "info_finder");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

if (isset($_POST['table'])){ 
if($_POST['table']=='company'){
$sql = "INSERT INTO ".$_POST['table']." (reference_no,tin_no,company_name,company_address,email,director,nic,mobile_no,office_no) VALUES
            ('".$_POST['reference_no']."','".$_POST['tin_no']."','".$_POST['name']."','".$_POST['address']."','".$_POST['email']."','".$_POST['director']."','".$_POST['nic']."','".$_POST['mobile_no']."','".$_POST['office_no']."')
          ";
}else{
	$sql = "INSERT INTO ".$_POST['table']." (reference_no,tin_no,person_name,address,email,nic,mobile_no,office_no) VALUES
            ('".$_POST['reference_no']."','".$_POST['tin_no']."','".$_POST['name']."','".$_POST['address']."','".$_POST['email']."','".$_POST['nic']."','".$_POST['mobile_no']."','".$_POST['office_no']."')
          ";
}
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
?>




