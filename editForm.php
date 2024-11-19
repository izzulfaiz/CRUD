<?php
// include database connection file
include 'connection.php';
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];

    $nama_kota = $_POST['name'];
    $asal_negara = $_POST['CountryCode'];
    $wilayah = $_POST['District'];
    $total_populasi = $_POST['Population'];
		
	// update user data
	$result = mysqli_query($mConnection, "update city set Name='$nama_kota',CountryCode='$asal_negara',District='$wilayah',Population='$total_populasi' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mConnection, "SELECT * FROM city WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['Name'];
	$email = $user_data['CountryCode'];
	$mobile = $user_data['District'];
	$pop = $user_data['Population'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="editForm.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="CountryCode" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="District" value=<?php echo $mobile;?>></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="Population" value=<?php echo $pop;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
