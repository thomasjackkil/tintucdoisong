<?php 
	$quangcao = QuangCao(1);
	while ($row_quangcao = mysql_fetch_array($quangcao)) {
		
?>
<a href="<?php echo $row_quangcao['Url'] ?>">
<img width="280" src="images/<?php echo $row_quangcao['urlHinh'] ?>" />
<div style="height:10px"></div>
<?php 
	}
?>