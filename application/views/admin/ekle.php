<script type="text/javascript" src="/site/js/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript" src="/site/js/tiny_mce/tinymc.js"></script>
<?php echo form_open('/admin/ekle/'.$s);?>
<div  class="ui-state-default ui-corner-all"><a href="javascript:" onclick=" $('#ozellik').toggle('appear');return false;" style="padding:5px;display:block;"> Özellikler </a></div>
<div class="ui-state-default" style="display:none;" id="ozellik">
<table width="100%" border="1" cellspacing="3" cellpadding="3" class="tablo" bordercolor="#d6dee5">
  <tr>
    <td align="right">Sayfa Tipi</td>
    <td><?php echo form_dropdown('stype', $this->config->item('stype'),$this->input->post('stype') );?></td>
    <td align="right">Üst Sayfa</td>
    <td>
    <?php echo form_input(array('name'=> 'parentid','id'=> 'parentid','value'=>set_value('parentid',$this->input->post('parentid')),'size'=> '10'));?></td>
  </tr>
  <tr>
    <td align="right">Altsayfa</td>
    <td><?php echo form_dropdown('colrow', $this->config->item('colrow'),$this->input->post('colrow') );?></td>
    <td align="right">Altsayfa Tipi</td>
    <td><?php echo form_dropdown('atype', $this->config->item('stype'),$this->input->post('atype') );?></td>
  </tr>
  <tr>
    <td align="right">Sıra</td>
    <td><?php echo form_input(array('name'=> 'position','id'=> 'position','value'=> set_value('position',$this->input->post('position')),'size'=> '10'));?></td>
    <td align="right">Anasayfa</td>
    <td><?php echo form_dropdown('fp', $this->config->item('say10'),$this->input->post('fp') );?></td>
  </tr>
  <tr>
    <td align="right">Resimler</td>
    <td><?php echo form_dropdown('imag', $this->config->item('imag'),$this->input->post('imag'));?></td>
    <td align="right">Dosyalar</td>
    <td><?php echo form_dropdown('sfile', $this->config->item('sfile'),$this->input->post('sfile') );?></td>
  </tr>
  <tr>
    <td align="right">Tarih</td>
    <td><?php echo form_input(array('name'=> 'date1','id'=> 'date1','value'=> set_value('date1',$this->input->post('date1')),'size'=> '15'));?></td>
    <td align="right">Yetki</td>
    <td>yetki</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
<script type="text/javascript">
			$(function(){
				$('#tabs').tabs();
      });
      </script>
      <script language="javascript">
            
      
 function show_check()
      {
      if( $('#tiny').is(':checked') ) 
        { tiny_show();}
        else
        { tiny_hide();}
      }        
    function tiny_show()
    {<?php foreach ($this->config->item('langs') as $dil){ ?>
         $('#main<?php echo $dil[0] ?>').tinymce().show();
     <?php } ?>
    }
    function tiny_hide()
    {<?php foreach ($this->config->item('langs') as $dil){ ?>
         $('#main<?php echo $dil[0] ?>').tinymce().hide();
     <?php } ?>
    }

      </script>
 		<div id="tabs">
			<ul>
      <?php foreach ($this->config->item('langs') as $dil)
        { ?>
				<li><a href="#tabs-<?php echo $dil[0]?>"><?php echo $dil[2] ?></a></li>
     <?php }?>
     <label style="float:right;"> Editor <?php echo form_checkbox('tiny', '1' , set_checkbox('tiny', '1',TRUE), "id='tiny' onclick = 'show_check()'");?> </label>
			</ul>
       <?php foreach ($this->config->item('langs') as $dil)
        { ?>
      <div id="tabs-<?php echo $dil[0]?>">
       <p class="heading"><b><?php echo $dil[2] ?> Başlık</b>
      <span >
            <?php echo form_input(array('name'=> 'head'.$dil[0],'id'=> 'head'.$dil[0],'value'=> set_value('head'.$dil[0],$this->input->post('head'.$dil[0])),'maxlength'=> '250','size'=>'80'));?>
            
       </span></p>
      <?php echo form_textarea(array('name'=> 'main'.$dil[0],'id'=> 'main'.$dil[0],'value'=> set_value('main'.$dil[0],$this->input->post('main'.$dil[0])),'rows'=> 10,'cols'=>'80','class'=>'tinymc'))?>
        <table width="100%" border="1" cellspacing="3" cellpadding="3" class="tablo" bordercolor="#d6dee5">
        <tr>
          <td align="right">URL[<?php echo $dil[1]?>]</td>
          <td><?php echo form_input(array('name'=> 'link'.$dil[0],'value'=> set_value('link'.$dil[0],$this->input->post('link'.$dil[0])),'size'=> '50'));?></td>
        </tr>
        <tr>
          <td align="right">Keyword[<?php echo $dil[1]?>]</td>
          <td><?php echo form_input(array('name'=> 'key'.$dil[0],'value'=> set_value('key'.$dil[0],$this->input->post('key'.$dil[0])),'size'=> '60'));?></td>
        </tr>
         <tr>
          <td align="right">Description[<?php echo $dil[1]?>]</td>
          <td><?php echo form_input(array('name'=> 'desc'.$dil[0],'value'=> set_value('desc'.$dil[0],$this->input->post('desc'.$dil[0])),'size'=> '70'));?></td>
        </tr>
        
        </table>
      </div>
    <?php }?>
      
    </div>
</div><center><br>
<?php echo form_submit('gonder', 'Yeni Oluştur','class="ui-state-default"');?></center>
<?php form_close();?>
<script>show_check();</script>
      