<?	require("../connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/factory.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>:. เพิ่มข้อมูลสั่งตัด</title>
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
      <div class="view_head"><!-- InstanceBeginEditable name="view_head" -->เพิ่มข้อมูลสั่งตัด<!-- InstanceEndEditable --></div>
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
    <td align="right">วันที่เริ่มตัดเหล็ก :</td>
    <td><label for="textfield"></label>
      <input name="textfield" type="text" id="textfield" size="15" /></td>
    <td align="right">&nbsp;</td>
    <td><label for="textfield2"></label></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center">รายการวัตถุดิบ</td>
    </tr>
  <tr>
    <td colspan="4" align="center"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th>เลขที่ใบสั่งตัด</th>
        <th>วัตถุดิบ</th>
        <th align="center">Coil No.</th>
        <th align="center">กว้าง(Mm.)</th>
        <th align="center">น้ำหนัก(Kgs.)</th>
        <th align="center">จำนวน(ม้วน)</th>
        <th align="right">&nbsp;</th>
        <th align="right"><a href="#">เลือกวัตถุดิบ</a></th>
        </tr>
      <tr>
        <td>REX5809-1</td>
        <td><label for="textfield3">เหล็กม้วนดำ 1.70 x 1219 MM.</label></td>
        <td align="center"><label for="textfield2">1</label></td>
        <td align="center"><label for="textfield4"></label>
          <input name="textfield4" type="text" id="textfield4" value="1224" size="5" /></td>
        <td align="center"><label for="textfield5"></label>
          16,310</td>
        <td align="center"><label for="textfield6"></label>
          1</td>
        <td align="right">&nbsp;</td>
        <td align="right"><label for="textfield14"><a href="#">ลบรายการนี้</a></label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
      </tr>
      </table></td>
    </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="4" align="center">รายการที่ตัด</td>
    </tr>
  <tr>
    <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th>รายการ</th>
        <th align="center">กว้าง(Mm.)</th>
        <th align="center">น้ำหนัก(Kgs.)</th>
        <th align="center">จำนวน(แผ่น)</th>
        <th align="right">น้ำหนักรวม(Kgs.)</th>
        <th align="right">%จากการตัด</th>
        <th align="right"><a href="#">เพิ่มรายการตัด</a></th>
        </tr>
      <tr>
        <td>เหล็กแผ่นแถบ</td>
        <td align="center"><label for="textfield2"></label>
          <input name="textfield2" type="text" id="textfield2" value="211" size="5" /></td>
        <td align="center"><label for="textfield6"></label>
          <input name="textfield6" type="text" id="textfield6" value="2721.5" size="5" /></td>
        <td align="center"><input name="textfield9" type="text" id="textfield9" value="3" size="5" /></td>
        <td align="right">8,164.5</td>
        <td align="right">50.06%</td>
        <td align="right"><label for="textfield14"><a href="#">ลบรายการนี้</a></label></td>
        </tr>
      <tr>
        <td>เหล็กแผ่นแถบ</td>
        <td align="center"><label for="textfield3"></label>
          <input name="textfield3" type="text" id="textfield3" value="87" size="5" /></td>
        <td align="center"><label for="textfield7"></label>
          <input name="textfield7" type="text" id="textfield7" value="1122" size="5" /></td>
        <td align="center"><label for="textfield10"></label>
          <input name="textfield10" type="text" id="textfield10" value="1" size="5" /></td>
        <td align="right">1,122</td>
        <td align="right">6.88%</td>
        <td align="right"><label for="textfield15"><a href="#">ลบรายการนี้</a></label></td>
      </tr>
      <tr>
        <td>เหล็กแผ่นแถบ</td>
        <td align="center"><label for="textfield5"></label>
          <input name="textfield5" type="text" id="textfield5" value="168" size="5" /></td>
        <td align="center"><label for="textfield8"></label>
          <input name="textfield8" type="text" id="textfield8" value="2167" size="5" /></td>
        <td align="center"><label for="textfield11"></label>
          <input name="textfield11" type="text" id="textfield11" value="3" size="5" /></td>
        <td align="right">6,501</td>
        <td align="right">39.86%</td>
        <td align="right"><a href="#">ลบรายการนี้</a></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="right">15,788</td>
        <td align="right">96.80%</td>
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
    <td colspan="4" align="center">สูญเสียจากการตัด</td>
    </tr>
  <tr>
    <td colspan="4" align="right"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th>รายการ</th>
        <th align="center">% สูญเสียที่กำหนด</th>
        <th align="center">น้ำหนักสูญเสียที่กำหนด</th>
        <th align="center">สูญเสียจริง(Kgs.)</th>
        <th align="right">% การสูญเสียจริง</th>
        <th align="right">&nbsp;</th>
        </tr>
      <tr>
        <td>เศษหัวและปลายม้วนเหล็กซอยก่อนเข้าเครื่อง</td>
        <td align="center"><label for="textfield2">0.70%</label></td>
        <td align="center"><label for="textfield6">114.17</label></td>
        <td align="center"><input name="textfield9" type="text" id="textfield9" value="115" size="5" /></td>
        <td align="right">0.71%</td>
        <td align="right">&nbsp;</td>
        </tr>
      <tr>
        <td>เศษขอบ 2 ข้างจากใบมีดตัดเหล็ก</td>
        <td align="center"><label for="textfield3">2.50%</label></td>
        <td align="center"><label for="textfield7">407.75</label></td>
        <td align="center"><label for="textfield10"></label>
          <input name="textfield10" type="text" id="textfield10" value="407" size="5" /></td>
        <td align="right">2.5%</td>
        <td align="right">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">522</td>
        <td align="right">3.21%</td>
        <td align="right">&nbsp;</td>
      </tr>
      </table></td>
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
