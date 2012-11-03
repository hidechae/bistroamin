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
    <h2>Error</h2>
    <ul>
    {foreach from=$errors item='msg'}
      <li class="sentence attention" style="color:red;">
        {$msg}
      </li>
    {/foreach}
    </ul>
    <a href="?action=index">Top</a>
</div>

<div id="footer">
</div>

</body>
</html>
