<?php 

include 'config.php';

session_start();

if (isset($_POST['submit'])) {
	$email = $_POST['Email'];
	$password =$_POST['Password'];
	$sql1="SELECT * FROM user WHERE Email='$email' AND Password='$password'";
	$result1 = mysqli_query($conn, $sql1);
		if ($result1->num_rows > 0 ) {
		$row1 = mysqli_fetch_assoc($result1);
		$_SESSION['Email'] = $row1['Email'];
		header("Location: /brief5/view/profil.php");
	} else {
		echo "<script>alert('Woops! email or Password is Wrong.')</script>";
	}
}

?>