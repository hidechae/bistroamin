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
  <h2>{$app.note.title}</h2>
    <table>
      <tr>
        <td>User Id:</td>
        <td>{$app.note.user_id}</td>
      </tr>
      <tr>
        <td>Body:</td>
        <td>{$app.note.body}</td>
      </tr>
    </table>
</div>

    <ul>
      <li><a href="?action=note_list">note list</a></li>
      <li><a href="?action=index">bistroamin Top</a></li>
    </ul>

<div id="footer">
</div>

</body>
</html>
