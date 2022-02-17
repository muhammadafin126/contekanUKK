<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<tittle>Tokomie - Login</tittle>

</head>
<body>
    <?php
	if (isset($_SESSION['error']) && $SESSION['error'] != ''){ 
    ?>
		<div class="alert alert-danger">
    <?php
	}
    ?>
    <form action="auth_login.php" method="post">
        <label for="username"></label>
        <input id="username" type="text" name="username">
        <label for="password"></label>
        <input id="password" type="password" name="password">
        <input type="submit" value="submit">
    </form>
</body>
</html>