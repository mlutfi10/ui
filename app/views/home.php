<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
</head>

<body>
<a href="public/">Home</a> | <a href="public/bloglist">blog list</a> | <a href="public/newblog">Create new Blog</a><br />
<br />

Hi <?php echo $data->username?><br />
Post : <?php echo $data->totalpost?><br />
<a href="newblog">create new blog</a>
<br />
<br />
<a href="logout">Logout</a>

</body>
</html>