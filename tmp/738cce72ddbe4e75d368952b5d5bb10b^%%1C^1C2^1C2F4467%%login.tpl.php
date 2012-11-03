<?php /* Smarty version 2.6.26, created on 2012-10-07 04:04:30
         compiled from id/login.tpl */ ?>
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
  <h2>Login</h2>
  <form method="POST">
    <input name="action" value="id_login" type="hidden">
    <table>
      <tr>
        <td>E-mail:</td>
        <td><input name="mail" type="email" value="<?php echo $this->_tpl_vars['form']['mail']; ?>
"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input name="password" type="password"></td>
      </tr>
    </table>
    <input name="submit" type="submit">
  </form>
</div>

    <ul>
      <li><a href="?action=id_reg_form">create account</a></li>
      <li><a href="?action=index">bistroamin Top</a></li>
    </ul>

<div id="footer">
</div>

</body>
</html>