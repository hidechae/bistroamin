<?php /* Smarty version 2.6.26, created on 2012-10-24 14:53:14
         compiled from note/form.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="<?php echo @HTTP_ROOT; ?>
/www/css/ethna.css" type="text/css" />
</head>
<body>

<div id="header">
  <h1>Bistroamin</h1>
</div>

<div id="main">
  <h2>New Note</h2>
  <form action="<?php echo @HTTP_ROOT; ?>
www/index.php/" method="POST">
    <input name="action" value="note_write" type="hidden">
    <table>
      <tr>
        <td>User Id:</td>
        <td><input name="user_id" value='1' type="number"></td>
      </tr>
      <tr>
        <td>Title:</td>
        <td><input name="title" type="text"></td>
      </tr>
      <tr>
        <td>Body:</td>
        <td><textarea name="body" type="text"></textarea></td>
      </tr>
    </table>
    <input name="submit" value="commit" type="submit">
  </form>

  <!--form action="<?php echo @HTTP_ROOT; ?>
www/index.php/" method="POST">
    <input name="action" value="note_write" type="hidden">
    <input type="file" name="upfile" size="30">
    <input name="submit" value="commit" type="submit"-->
</div>

    <ul>
      <li><a href="?action=note_list">note list</a></li>
      <li><a href="?action=index">bistroamin Top</a></li>
      <li><a href="?action=id_logout">logout</a></li>
    </ul>

<div id="footer">
</div>

</body>
</html>