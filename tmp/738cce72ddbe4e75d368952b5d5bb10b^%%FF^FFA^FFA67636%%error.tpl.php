<?php /* Smarty version 2.6.26, created on 2012-10-06 04:13:22
         compiled from common/error.tpl */ ?>
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
    <h2>Error</h2>
    <ul>
    <?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['msg']):
?>
      <li class="sentence attention" style="color:red;">
        <?php echo $this->_tpl_vars['msg']; ?>

      </li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
    <a href="?action=index">Top</a>
</div>

<div id="footer">
</div>

</body>
</html>