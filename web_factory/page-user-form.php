<?	require("../connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/factory.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>:. เพิ่มข้อมูลผู้ใช้งาน</title>
<link href="../CSS/factory.css" rel="stylesheet" type="text/css" />
<link href="../Library/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />
<script src="../Library/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
<script src="../Library/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script type="text/javascript" src="../Library/reload.js"></script>
<script type="text/javascript">
$(document).ready(function(){ //เมื่อโหลดเพ็จเสร็จ
				$(".btn_back").click(function(){  //กลับ
						window.location='page-user.php';
				});

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
      <div class="view_head"><!-- InstanceBeginEditable name="view_head" -->เพิ่มข้อมูลผู้ใช้งาน<!-- InstanceEndEditable --></div>
      <div class="view_head2"> <!-- InstanceBeginEditable name="view_head2" -->        <div class="btn_back">กลับไปหน้าข้อมูล</div>
        <div class="btn_edit">แก้ไขข้อมูลนี้</div><!-- InstanceEndEditable --></div>
      <div class="view_data"><!-- InstanceBeginEditable name="view_data" -->
        <form id="formInput" name="formInput" method="post" action=""><table width="500" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">User Name :</td>
    <td><label for="textfield"></label>
      <input name="textfield" type="text" id="textfield" size="15" /></td>
  </tr>
  <tr>
    <td align="right">Password :</td>
    <td><label for="textfield2"></label>
      <input name="textfield2" type="text" id="textfield2" size="25" /></td>
  </tr>
  <tr>
    <td align="right"><label for="textfield3">Re-Password</label>
      :</td>
    <td><input name="textfield3" type="text" id="textfield3" size="25" /></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">Display Name :</td>
    <td><input name="textfield4" type="text" id="textfield4" size="15" /></td>
  </tr>
  <tr>
    <td align="right">สถานะการใช้ :</td>
    <td><input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0" />ผู้ดูแลระบบ
      
        <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1" />ผู้ใช้ทั่วไป
      </td>
  </tr>
  <tr>
    <td align="right">การใช้งาน :</td>
    <td><input name="" type="checkbox" value="" /> สำนักงานใหญ่</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input name="" type="checkbox" value="" /> คลังสินค้า <select name="place_u" class="selectionList" id="place_u" >
                        <option value="">- เลือก -</option>
                        <?		$strSQL = "SELECT * FROM  wh_place ORDER BY id ASC ";  
		$objQuery  = mysql_query($strSQL) or die(mysql_error());
while($objResult3 = mysql_fetch_array($objQuery))	
		{  			?>
                        <option value="<?=$objResult3["place_id"]  ?>" <?  if($objResult3["place_id"] == $objResult['place']){  ?> selected="selected" <? ;}?>>
                        <?=$objResult3["place"] ?>
                        </option>
                        <?		}		?>
                      </select></td>
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
