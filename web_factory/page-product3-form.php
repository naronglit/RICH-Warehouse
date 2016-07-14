<?	require("../connect.php"); 
		if($_GET["act"]=="view"||$_GET["act"]=="edit"){
		$strSQL = "SELECT * FROM wh_product3 WHERE id = '".$_GET['id']."'";
		$objQuery  = mysql_query($strSQL) or die(mysql_error());
		$objResult = mysql_fetch_array($objQuery); 
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/factory.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>:. เพิ่มข้อมูลเหล็กแปรรูป</title>
<link href="../CSS/factory.css" rel="stylesheet" type="text/css" />
<link href="../Library/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />
<script src="../Library/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
<script src="../Library/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script type="text/javascript" src="../Library/reload.js"></script>
<script type="text/javascript">
function msg_error(id)
{
	alert(id);
	return false;
}

function msg_complete(id,page)
{	
	alert(id);
	window.location.href="page-product3.php"+page;
}
$(document).ready(function(){ //เมื่อโหลดเพ็จเสร็จ
				$(".btn_back").click(function(){  //กลับ
						window.location='page-product3.php?page=<?=$_GET['page'] ?>';
				});
				$(".btn_edit").click(function(){  //แก้ไข
						window.location='?act=edit&id=<?=$_GET['id'] ?>&page=<?=$_GET['page'] ?>';
				});
				//View ข้อมูล ปิด Input  
				<? if($_GET["act"]=="view"){ ?>$('#formInput input , #formInput textarea , #formInput select').attr('disabled', true);<? } ?>

});
</script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="area">
  <div class="header">
    <div class="text_place">: <?=$_SESSION['session_user']['place_name'] ?></div>
  <div class="text_logout"><a href="../process-login?act=page_logout">Logout</a></div>
    <div class="text_home"><a href="../index.php">กลับหน้าหลัก</a></div>
    <div class="text_user">ผู้ใช้งาน : <?=$_SESSION['session_user']['user_name'] ?></div>
    
  </div>
  <div class="data">
    <div class="menu">
      <ul>
        <li>ข้อมูลสินค้า        
          <ul>
            <li <?=selectedMenu(array("page-product1.php","page-product1-form.php")) ?>><a href="page-product1.php">เหล็กม้วน</a></li>
            <li <?=selectedMenu(array("page-product2.php","page-product2-form.php")) ?>><a href="page-product2.php">เหล็กสลิต</a></li>
            <li <?=selectedMenu(array("page-product3.php","page-product3-form.php")) ?>><a href="page-product3.php">เหล็กแปรรูป</a></li>
          </ul>
        </li>
        <li>รับวัตถุดิบ
          <ul>
            <li <?=selectedMenu(array("page-receivePlan.php","page-receivePlan-form.php")) ?>><a href="page-receivePlan.php">แผนรับวัตถุดิบ</a></li>
            <li <?=selectedMenu(array("page-receive.php","page-receive-form.php")) ?>><a href="page-receive.php">รับวัตถุดิบเข้าคลัง</a></li>
            <li><a href="#">คงเหลือ</a></li>
          </ul>
        </li>
        <li>แปรรูปสินค้า
          <ul>
            <li <?=selectedMenu(array("page-process1.php","page-process1-form.php")) ?>><a href="page-process1.php">สั่งตัดเหล็ก</a></li>
            <li <?=selectedMenu(array("page-process2.php","page-process2-form.php")) ?>><a href="page-process2.php">ผลิตสินค้า</a></li>
            <li <?=selectedMenu(array("page-process3.php","page-process3-form.php")) ?>><a href="page-process3.php">แพ็คสินค้า</a></li>
          </ul>
        </li>
        <li>ขั้นตอนขนส่ง            
          <ul>
            <li><a href="#">แผนการจ่ายสินค้า</a></li>
            <li><a href="#">จ่ายสินค้าออก</a></li>
            <li><a href="#">คงเหลือ</a></li>
          </ul>
        </li>
        <li>บริษัทคู่ค้า            
          <ul>
            <li <?=selectedMenu(array("page-supplier.php","page-supplier-form.php")) ?>><a href="page-supplier.php">ข้อมูลคู่ค้า</a></li>
          </ul>
        </li>
        <li>อื่นๆ
          <ul>
            <li <?=selectedMenu(array("page-branch.php","page-branch-form.php")) ?>><a href="page-branch.php">คลังสินค้า</a></li>
            <li><a href="#">สูตรการผลิต</a></li>
            <li <?=selectedMenu(array("","page-taxation-form.php")) ?>><a href="page-taxation-form.php">ภาษีเข้า-ออก</a></li>
            <li <?=selectedMenu(array("page-user.php","page-user-form.php")) ?>><a href="page-user.php">ผู้ใช้งานระบบ</a></li>
          </ul>
        </li>
  </ul></div>
    <div class="body_white">
      <div class="view_head"><!-- InstanceBeginEditable name="view_head" -->เพิ่มข้อมูลเหล็กแปรรูป<!-- InstanceEndEditable --></div>
      <div class="view_head2"> <!-- InstanceBeginEditable name="view_head2" -->
        <div class="btn_back">กลับไปหน้าข้อมูล</div>
        <?    if($_GET["act"]=="view"){ ?><div class="btn_edit">แก้ไขข้อมูลนี้</div><? } ?>
      <!-- InstanceEndEditable --></div>
      <div class="view_data"><!-- InstanceBeginEditable name="view_data" -->
      <iframe name='frame' width='1' height='1' style='position:absolute;visibility:hidden'></iframe>
      <form id="formInput" name="formInput" method="post" action="process-product3.php?act=<?=$_GET['act'] ?>&id=<?=$_GET['id'] ?>&page=<?=$_GET['page'] ?>" target="frame"><table width="500" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><label for="product3_id">รหัสสินค้า :</label></td>
    <td>
      <input name="product3_id" type="text" id="product3_id" value="<?=$objResult['product3_id'] ?>" size="15" /> *</td>
  </tr>
  <tr>
    <td align="right"><label for="product3_name">ชื่อสินค้า :</label></td>
    <td>
      <input name="product3_name" type="text" id="product3_name" value="<?=$objResult['product3_name'] ?>" size="25" /> *</td>
  </tr>
  <tr>
    <td align="right"><label for="detail">ลายละเอียด :</label></td>
    <td><textarea name="detail" cols="30" rows="3" id="detail"><?=$objResult['detail'] ?></textarea></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">น้ำหนัก</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><label for="weight_min">ต่ำสุด(Min) / สูงสุด(Max) :</label></td>
    <td><input name="weight_min" type="text" id="weight_min" value="<?=$objResult['weight_min'] ?>" size="5" /> * 
      
      <label for="weight_max">กก. / </label>
      <input name="weight_max" type="text" id="weight_max" value="<?=$objResult['weight_max'] ?>" size="5" /> *  กก.</td>
  </tr>
  <tr>
    <td align="right"><label for="unit">หน่วยนับ :</label></td>
    <td>
      <select name="unit" id="unit">
      <option value="0"> - โปรดเลือก - </option>
        <?
		$strSQL = "SELECT * FROM  wh_unit ORDER BY id ASC ";  
		$objQuery  = mysql_query($strSQL) or die(mysql_error());
while($objResult2 = mysql_fetch_array($objQuery))	
		{  	
		?>
      <option value="<?=$objResult2["id"]  ?>" <?  if($objResult2["id"] == $objResult['unit']){  ?> selected="selected" <? ;}?>><?=$objResult2["unit_name"]  ?></option>
        <?
		}
		?>
        </select> *</td>
  </tr>
  <tr>
    <td align="right"><label for="detail">ประเภทสินค้า :</label></td>
    <td><select name="product_type" id="product_type">
        <option value="0"> - โปรดเลือก - </option>
        <?
		$strSQL = "SELECT * FROM  wh_category ORDER BY id ASC ";  
		$objQuery  = mysql_query($strSQL) or die(mysql_error());
while($objResult3 = mysql_fetch_array($objQuery))	
		{  	
		?>
         <option value="<?=$objResult3["id"]  ?>" <?  if($objResult3["id"] == $objResult['product_type']){  ?> selected="selected" <? ;}?>><?=$objResult3["cate_name"]  ?></option>
        <?
		}
		?>     
    </select> *</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><label for="note">หมายเหตุ :</label></td>
    <td>
      <textarea name="note" id="note" cols="30" rows="5"><?=$objResult['note'] ?></textarea></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="submit" name="Submit" id="button" value=" บันทึก " /> <input type="reset" name="button2" id="button2" value=" ยกลิก " /></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

        </form>
      <!-- InstanceEndEditable --></div>
    </div>
  </div>
  
  <div class="footer">สงวนลิขสิทธิ์ 2015. RICH ASIA Group.</div>
</div>
</body>
<!-- InstanceEnd --></html>
