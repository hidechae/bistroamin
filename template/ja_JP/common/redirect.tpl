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
    <h2>Permission required</h2>
    <form action="{$smarty.const.HTTP_ROOT}www/index.php/" method="POST">
      <input name="action" value="id_login" type="hidden">
      <input name="backto" value="{$app.backto}" type="hidden">
      <table>
        <tr>
          <td>E-mail:</td>
          <td><input name="mail" type="email"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input name="password" type="password"></td>
        </tr>
      </table>
      <input name="submit" type="submit">
    </form>
    <a href='?action=id_reg_form'>Create account</a>
</div>

<div id="footer">
</div>

</body>
</html>
