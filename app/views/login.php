<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>

<form action="login" method="post">
	Username <span class="error"> <?php echo $errors->first('username') ?></span><br/>
    <input type="text" name="username" value="<?php echo Form::old('username') ?>" /><br/>
    Password <span class="error"> <?php echo $errors->first('password') ?></span><br/>
    <input type="password" name="password" value="<?php echo Form::old('password') ?>"/><br/>
    <input type="submit" value="Login" />
</form>
<span class="error"> <?php //echo $errors ?></span>
</body>
</html>