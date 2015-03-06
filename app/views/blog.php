<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blog</title>
</head>

<body>
<a href="../">Home</a> | <a href="../bloglist">blog list</a> | <a href="../newblog">Create new Blog</a>
<br />
<br />
<br />

<h1>Title : <?php echo $data->title;?></h1><br />
Submited by : <?php echo $data->user->username;?>
<br />
<h2><?php echo $data->blog;?></h2><br />
==========Comment===========<br />
<?php
	foreach($data->comment as $p)
	{
?>
<?php echo $p->user->username?> said : 
<?php echo $p->post?><br />
----------------------------<br />

<?php
	}
?>

<br/><br />
<form action="../comment" method="post">
  <input type="hidden" name="idblog" value="<?php echo $data->id_blog?>"/>
  <textarea name="comment"cols="45" rows="5" ></textarea><br/>
  <input type="submit" value="comment"  />
</form>

</body>
</html>