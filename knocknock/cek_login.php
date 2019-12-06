<?php 
error_reporting(0);
session_start();
if($_SESSION['signin'] != TRUE)
{
?>
<script type="text/javascript">
	alert("please login first!");
	document.location= "index.php";
</script>
<?php
exit;
}
?>