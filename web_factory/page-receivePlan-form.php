<?	require("../connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/factory.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>:. แผนรับวัตถุดิบ</title>
<link href="../CSS/factory.css" rel="stylesheet" type="text/css" />
<link href="../Library/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />
<script src="../Library/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
<script src="../Library/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script type="text/javascript" src="../Library/reload.js"></script>
<script type="text/javascript">
$(document).ready(function(){ //เมื่อโหลดเพ็จเสร็จ
				$(".btn_back").click(function(){  //กลับ
						window.location='page-receivePlan.php';
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
      <div class="view_head"><!-- InstanceBeginEditable name="view_head" -->แผนรับวัตถุดิบ<!-- InstanceEndEditable --></div>
      <div class="view_head2"> <!-- InstanceBeginEditable name="view_head2" -->
        <div class="btn_back">กลับไปหน้าข้อมูล</div>
        <div class="btn_edit">แก้ไขข้อมูลนี้</div>
      <!-- InstanceEndEditable --></div>
      <div class="view_data"><!-- InstanceBeginEditable name="view_data" -->
        <form id="formInput" name="formInput" method="post" action=""><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">กำหนดหมายเลขแผน :</td>
    <td><label for="textfield6"></label>
      <input name="textfield6" type="text" id="textfield6" size="25" /></td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">วันที่กำหนดรับ :</td>
    <td><label for="textfield"></label>
      <input name="textfield" type="text" id="textfield" size="15" /></td>
    <td align="right">หมายเหตุ :</td>
    <td rowspan="2"><label for="textfield3">
      <textarea name="textarea" id="textarea" cols="35" rows="3"></textarea>
    </label></td>
  </tr>
  <tr>
    <td align="right">บริษัทคู่ค้า :</td>
    <td><label for="textfield2"></label>
      <input name="textfield5" type="text" id="textfield2" size="25" /> 
      <a href="#">เลือก</a></td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center">รายละเอียดสินค้าในแผน</td>
    </tr>
  <tr>
    <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th>รหัสสินค้า</th>
        <th>สินค้า</th>
        <th align="right">จำนวนรับ(ม้วน)</th>
        <th align="right"><a href="#">เพิ่มสินค้า</a></th>
        </tr>
      <tr>
        <td>RM1101701219 </td>
        <td>เหล็กม้วนดำ 1.70 x 1219 MM. </td>
        <td align="right"><label for="textfield9"></label>
          <input name="textfield8" type="text" id="textfield9" value="1" size="10" /></td>
        <td align="right"><label for="textfield14"><a href="#">ลบรายการนี้</a></label></td>
        </tr>
      <tr>
        <td>RM1101901219</td>
        <td>เหล็กม้วนดำ 1.90 x 1219 MM. </td>
        <td align="right"><label for="textfield13"></label>
          <input name="textfield9" type="text" id="textfield13" value="1" size="10" /></td>
        <td align="right"><label for="textfield15"><a href="#">ลบรายการนี้</a></label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
      </tr>
      </table>
      </td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center"><input type="submit" name="Submit" id="button" value=" บันทึก " /> <input type="reset" name="button2" id="button2" value=" ยกลิก " /></td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
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
