<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Blog</title>
</head>

<body>
<a href="">Home</a> | <a href="bloglist">blog list</a> | <a href="newblog">Create new Blog</a><br />
<br />

<table width="329" border="1">
  <tr>
    <td width="42">No</td>
    <td width="193"><div align="center">Title</div></td>
    <td width="72"><div align="center">Author</div></td>
  </tr>
  <?php
  $no=1;
  foreach($data as $d)
  {
	  foreach($d->blog as $b)
	  {
  ?>
  <tr>
    <td><?php echo $no?></td>
    <td><a href="blog/<?php echo $b->id_blog?>" ><?php echo $b->title?></a></td>
    <td><?php echo $d->username?></td>
  </tr>
  <?php
	  }
	  $no++;
  }
  ?>
</table>
</body>
</html>