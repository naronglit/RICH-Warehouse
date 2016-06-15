<?	require("../connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/factory.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>:. ผู้ใช้งานระบบ</title>
<link href="../CSS/factory.css" rel="stylesheet" type="text/css" />
<link href="../Library/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />
<script src="../Library/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
<script src="../Library/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script type="text/javascript" src="../Library/reload.js"></script>
<script type="text/javascript">
$(document).ready(function(){ //เมื่อโหลดเพ็จเสร็จ
				$(".btn_new").click(function(){  //เพิ่มข้อมูล
						window.location='page-user-form.php?act=add';
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
      <div class="view_head"><!-- InstanceBeginEditable name="view_head" -->ผู้ใช้งานระบบ<!-- InstanceEndEditable --></div>
      <div class="view_head2"> <!-- InstanceBeginEditable name="view_head2" -->        <div class="btn_export">ส่งออก Excel</div>
        <div class="btn_new">+ เพิ่มใหม่</div><!-- InstanceEndEditable --></div>
      <div class="view_data"><!-- InstanceBeginEditable name="view_data" --><form id="form1" name="form1" method="post" action="">
              <?
        $strSQL = "SELECT * FROM  wh_user AS u ";  
		$strSQL .= " LEFT JOIN wh_place AS p ON u.place = p.place_id  WHERE 1=1";  
		if($_POST["s_text1"]){
		 $strSQL .= " AND supp_id = '".$_POST["s_text1"]."' ";  
		}
		if($_POST["s_text2"]){
		 $strSQL .= " AND supp_name LIKE '%".$_POST["s_text2"]."%' ";  
		}
		if($_POST["s_text3"]){
		 $strSQL .= " AND supp_contact LIKE '%".$_POST["s_text3"]."%' ";  
		}
		
		page($_GET['page'],'15',$strSQL);				
		$n = $Page_Start;
		$strSQL .= " ORDER BY  u.permission  , u.id  ASC ".$Page_Sql;		
		$objQuery  = mysql_query($strSQL) or die(mysql_error());
		
		?>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="view_tbl">
          <tr>
            <th>ลำดับ</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Permission</th>
            <th>หมายเหตุ</th>
            <th><? echo $change_page;   //แสดงปุ่มเลขหน้า	?></th>
          </tr>
          <?
while($objResult = mysql_fetch_array($objQuery))	
		{  	

		?>      
          <tr>
            <td><?=($n+=1)."." ?></td>
            <td><?=$objResult["user_name"]  ?></td>
            <td><?=$objResult["password"]  ?></td>
            <td><?=$objResult["permission"]  ?></td>
            <td><?=$objResult["usability"]." - ".$objResult["place"]  ?></td>
            <td><img src="../Images/view-icon.png" width="23" height="23" /><img src="../Images/bin-icon.png" width="20" height="23" /></td>
          </tr>
<?
		}
?>
        </table>

      </form><!-- InstanceEndEditable --></div>
    </div>
  </div>
  
  <div class="footer">สงวนลิขสิทธิ์ 2015. RICH ASIA Group.</div>
</div>
</body>
<!-- InstanceEnd --></html>
