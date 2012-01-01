<div>
<link rel="stylesheet" href="/site/css/treeview.css" type="text/css" />
<script type="text/javascript" src="/site/js/jquery.treeview.js"></script>
<script language=javascript>
$(document).ready(function(){
	$(".sortable").treeview();
});
</script>
<?php
foreach ($this->config->item('stype') as $kod=>$ad)
{
  ?>
<a href="/admin/ekle/<?php echo $kod ?>" class="ui-state-focus ustbtn">Yeni <?php echo $ad ?> </a>

<?php } ?>
<div id="navcontainer">
<ul id="sortable">
    <li id="28"><a href="">elem 1 </a></li>
    <li id="38"><a href="">elem 2 </a></li>
    <li id="18"><a href="">elem 3 </a>
    <ul id="sortablex">
      <li id="p[108]"><a href="">elem 1</a></li>
      <li id="item_54"><a href="">elem 2</a></li>
      <li id="item_44"><a href="">elem 3</a></li>
      <li id="item_45"><a href="">elem 4</a></li>
    </ul>
    </li>
    <li id="11"><a href="">elem 4</a></li>
</ul>
</div>
<script language="javascript">
$(document).ready(function(){
    $('#sortable').sortable({
        update: function(event, ui) {
            var newOrder = $(this).sortable('toArray').toString();
            $.post('saveSortable.php', {order:newOrder});
        },
    });
});

$(document).ready(function(){
    $('#sortablex').sortable({
        update: function(event, ui) {
            var newOrder = $(this).sortable('toArray').toString();
            $.post('saveSortable.php', {order:newOrder});
        }
    });
});
</script>
</div>