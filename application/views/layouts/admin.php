<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Yönetim Alanı</title>
		<link rel="stylesheet" type="text/css" href="/site/css/admin.css">
    <script type="text/javascript" src="/site/js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="/site/js/jquery-ui-1.8.16.custom.min.js"></script>
</head>
<body class="body">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td >&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td align="right" class="logout">Hoşgeldin : <?php echo $this->session->userdata('username')?> | <a href="/user/logout" >Çıkış</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="100" colspan="2" align="center"><h1 class="hed ui-state-focus" >YÖNETİM ALANI</h1></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="200" valign="top">
    <div class="solbox">
    <div class="bsk">Kullanıcı Detayları</div>
      <div class="ici">
      Hoş Geldiniz...
      <ul>
      <li><a href="/user/edit">Bilgilerim</a></li>
      <li><a href="/user/logout">Çıkış</a></li>
      </ul>
      </div>
	   </div>
     
     
  <div class="solbox">
    <div class="bsk">İçerikler</div>
      <div class="ici">
      <ul>
      	<li><a href="/admin">Anasayfa</a></li>
      	<li><a href="/admin/liste">Sayfalar</a></li>
      	<li><a href="/admin/menu">Menüler</a></li>
        <li><a href="/admin/langs">Diller</a></li>
        <li><a href="/admin/langs">Ayarlar</a></li>
       <hr>
        <li><a href="/admin/yardım">Yardım</a></li>
      </ul>
      </div>
	 </div>
    
    </td>
    <td width="700" valign="top" class="orta">
           <?php echo validation_errors('<div class="ui-state-error ui-corner-all" style="padding: 0 .7em;"> 
				<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;">
        </span> ','</p>
			</div>'); ?>
    <?php echo $contents ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" align="center"><span class="footer">Yüklenme Zamamı<strong> {elapsed_time}</strong> Saniye</span></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p class="footer">&nbsp;</p>
</body>
</html>