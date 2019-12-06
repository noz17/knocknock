<?php
session_start();
$user = $_POST['user'];
$password = $_POST['password'];

if ($user=="admin" && $password=="admin")
{
	$_SESSION['signin'] = TRUE;
	$_SESSION['user'] = $user;
?>
<script type="text/javascript">
	document.location = "adminpage.php"; 
</script>
<?php
}
else
{
?>
<script type="text/javascript">
	alert("incorrect user or password");
	document.location = "index.php";
</script>
<?php	
}
?>
