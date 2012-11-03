<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="{$smarty.const.HTTP_ROOT}/www/css/ethna.css" type="text/css" />
</head>
<body>

<div id="header">
  <h1>Bistroamin</h1>
</div>

<div id="main">
  <h2>Index Page</h2>
  <p>hello, world!</p>
  <ul>
    <li><a href="?action=blog_top">Blog</a></li>
  </ul>
</div>

<div id="main">
  <h2>Create Account</h2>
  <form action="{$smarty.const.HTTP_ROOT}www/index.php/" method="POST">
    <input name="action" value="id_reg_confirm" type="hidden">
    <table>
      <tr>
        <td>Name:</td>
        <td><input name="screen_name" type="text"></td>
      </tr>
      <tr>
        <td>E-mail:</td>
        <td><input name="mail" type="email"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input name="password" type="password"></td>
      </tr>
      <tr>
        <td>User name:</td>
        <td><input name="name" type="text"></td>
      </tr>
    </table>
    <input name="submit" type="submit">
  </form>
</div>

<div id="footer">
  Powered By <a href="http://ethna.jp">Ethna</a>-{$smarty.const.ETHNA_VERSION}.
</div>

</body>
</html>
