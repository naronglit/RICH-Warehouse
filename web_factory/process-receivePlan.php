<?php
require("../connect.php");
?>
ค้นหา ชื่อบริษัท <input name="" type="text" style="width:350px;">
<?
		$strSQL = "SELECT * FROM wh_supplier ";
		$objQuery  = mysql_query($strSQL) or die(mysql_error());
		$objResult = mysql_fetch_array($objQuery); 

?>


<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<?		while($objResult = mysql_fetch_array($objQuery))	
		{  	
?>  
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left"><?=$objResult['supp_id'] ?></td>
    <td align="left"><a href="#" onClick="select_supply('<?=$objResult['supp_name'] ?>','<?=$objResult['supp_id'] ?>');return false;" ><?=$objResult['supp_name'] ?></a></td>
    <td align="left"><?=$objResult['supp_address'] ?></td>
    <td>&nbsp;</td>
  </tr>
<? } ?>  
</table>
