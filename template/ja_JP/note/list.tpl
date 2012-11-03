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
  <h2>Note List</h2>
    <table border cellspacing=1>
      <tr>
        <td>User Id</td>
        <td>title</td>
        <td>create time</td>
        <td>last modified time</td>
        <td>delete</td>
      </tr>
      {foreach from=$app.notes item=note}
      <tr>
        <td>{$note.user_id}</td>
        <td><a href="?action=note_detail&note_id={$note.id}">{$note.title}</a></td>
        <td>{$note.ctime}</td>
        <td>{$note.mtime}</td>
        <td><a href="javascript:void(0)" onClick="if(confirm('Are you serious?')) location.href='?action=note_delete&note_id={$note.id}';">delete</a></td>
      </tr>
      {/foreach}
    </table>

    <ul>
      <li><a href="?action=note_form">new note</a></li>
      <li><a href="?action=index">bistroamin Top</a></li>
    </ul>

<div id="footer">
</div>

</body>
</html>
