<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kullanıcı Girişi</title>
<link rel="stylesheet" type="text/css" href="/site/css/admin.css">
</head>
<body class="footer">

<?php echo form_open('user'); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td width="500" height="400"><table width="500" border="0" cellpadding="0" cellspacing="5" class="ui-state-focus">
      <tr>
        <td colspan="2" align="center">
        <h1>Giriş Ekranı</h1>
        </td>
        </tr>
      <tr>
        <td colspan="2">
       <?php echo validation_errors('<div class="ui-state-error ui-corner-all" style="padding: 0 .7em;"> 
				<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;">
        </span> ','</p>
			</div>'); ?>
				
        </td>
        </tr>
      <tr>
        <td width="235" align="right">Kullanıcı Adı :</td>
        <td width="265"><?php echo form_input(array(
              'name'        => 'uname',
              'id'          => 'uname',
              'value'       => set_value('uname'),
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
            ));?></td>
      </tr>
      <tr>
        <td align="right">Şifre :</td>
        <td><?php echo form_password(array(
              'name'        => 'passw',
              'id'          => 'passw',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
            ));?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center"><?php echo form_submit(array('name'=>'user', 'value'=>'Giriş'));?></td>
        </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php echo form_close();?>
</body>
</html>