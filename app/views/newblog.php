<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Blog</title>
</head>

<body>
Hi <?php echo Auth::user()->username;?><br />
Post : <?php echo Auth::user()->totalpost;?><br />
===================<br /><br />

<form method="post" action="newblog">
Title
	<span class="error">
		<?php echo "<br/>".$errors->first('title')?>
	</span>
<br />

<input type="text" name="title" value="<?php echo Form::old('title') ?>" /><br /><br />
	<span class="error">
		<?php echo $errors->first('content')."<br/>"?>
    </span>
<label>
  <textarea name="content" cols="45" rows="5"><?php echo Form::old('content') ?></textarea>
</label>
<br />
<input type="submit" />
</form>

</body>
</html>