<?php /* Smarty version 2.6.26, created on 2012-10-06 03:11:12
         compiled from notes/form.tpl */ ?>
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
    <input name="action" value="id_reg_confirm" type="hidden">
    <table>
      <tr>
        <td>User name:</td>
        <td><input name="name" type="text"></td>
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
</div>

<div id="footer">
</div>

</body>
</html>