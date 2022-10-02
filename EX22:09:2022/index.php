<?php
$connect = mysqli_connect('localhost', 'root', '', 'login');
mysqli_set_charset($connect, "utf8");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

	<?php
	if (isset($_POST["dangnhap"])) {
		$tk = $_POST["user_name_lg"];
		$mk = $_POST["passlg"];

		$rows = mysqli_query($connect, "
				select * from user where user_name = '$tk' and password = '$mk'
			");

		$count = mysqli_num_rows($rows);
		session_start();
		if ($count == 1) {
			$_SESSION["loged"] = true;
			header("location:index.php");
			setcookie("success", "Đăng nhập thành công!", time() + 1, "/", "", 0);
		} else {
			header("location:index.php");
			setcookie("error", "Đăng nhập không thành công!", time() + 1, "/", "", 0);
		}
	}
	?>

	<div>
		<div>
			<?php if (isset($_SESSION["loged"])) echo "<a href='index.php?act=logout' class='btn btn-danger'>Đăng xuất</a>" ?>
		</div>

		<div>

			<?php
			if (isset($_COOKIE["error"])) {
			?>
				<div class="alert alert-danger">
					<strong>'Có lỗi!'</strong> <?php echo $_COOKIE["error"]; ?>
				</div>
			<?php } ?>


			<?php
			if (isset($_COOKIE["success"])) {
				header('Location: admin.php')
			?>
				<div class="alert alert-success">
					<strong>'Chúc mừng!'</strong> <?php echo $_COOKIE["success"]; ?>
				</div>
			<?php } ?>

			<?php
			if (!isset($_GET["page"])) {
				if (isset($_SESSION["loged"]))
					include "admin.php";
				else
					include "login.php";
			}
			?>
		</div>

	</div>
</body>

</html>