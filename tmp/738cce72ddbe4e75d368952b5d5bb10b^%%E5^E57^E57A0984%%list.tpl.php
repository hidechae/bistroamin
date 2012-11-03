<?php /* Smarty version 2.6.26, created on 2012-10-06 05:33:18
         compiled from note/list.tpl */ ?>
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
  <h2>Note List</h2>
    <table border cellspacing=1>
      <tr>
        <td>User Id</td>
        <td>title</td>
        <td>create time</td>
        <td>last modified time</td>
        <td>delete</td>
      </tr>
      <?php $_from = $this->_tpl_vars['app']['notes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['note']):
?>
      <tr>
        <td><?php echo $this->_tpl_vars['note']['user_id']; ?>
</td>
        <td><a href="?action=note_detail&note_id=<?php echo $this->_tpl_vars['note']['id']; ?>
"><?php echo $this->_tpl_vars['note']['title']; ?>
</a></td>
        <td><?php echo $this->_tpl_vars['note']['ctime']; ?>
</td>
        <td><?php echo $this->_tpl_vars['note']['mtime']; ?>
</td>
        <td><a href="javascript:void(0)" onClick="if(confirm('Are you serious?')) location.href='?action=note_delete&note_id=<?php echo $this->_tpl_vars['note']['id']; ?>
';">delete</a></td>
      </tr>
      <?php endforeach; endif; unset($_from); ?>
    </table>

    <ul>
      <li><a href="?action=note_form">new note</a></li>
      <li><a href="?action=index">bistroamin Top</a></li>
    </ul>

<div id="footer">
</div>

</body>
</html>