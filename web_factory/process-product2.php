<?php
require("../connect.php");
														
if($_GET['act']=="add"){

		$strSQL = "INSERT INTO wh_product2  SET product2_id ='".strtoupper($_POST["product2_id"])."' ,";
		$strSQL .= " product2_name = '".$_POST["product2_name"]."' ,";
		$strSQL .= " thick = '".$_POST["thick"]."' ,";																															
		$strSQL .= " note = '".$_POST["note"]."' ,";
		$strSQL .= " place_id = '".$_SESSION['session_user']['place_id']."' ,";
		$strSQL .= " date_create = NOW() ,";
		$strSQL .= " user_name = '".$_SESSION['session_user']['user_name']."' ";
		
		$objQuery  = mysql_query($strSQL) or die(mysql_error());		
		page('','25',' SELECT * FROM wh_product2 ORDER BY id ASC ');		//เซฟเสร็จกลับไปหน้าสุดท้าย																			
		print "<script language='javascript'>window.parent.msg_complete('บันทึกข้อมูลสินค้าเรียบร้อย','?page=".$Num_Pages."');</script>";		  exit();	
}

else if($_GET['act']=="edit"){
					
		$strSQL = "UPDATE wh_product2  SET product2_id ='".strtoupper($_POST["product2_id"])."' ,";
		$strSQL .= " product2_name = '".$_POST["product2_name"]."' ,";
		$strSQL .= " thick = '".$_POST["thick"]."' ,";																															
		$strSQL .= " note = '".$_POST["note"]."' ";
		$strSQL .= " WHERE id = '".$_GET['id']."' ";		
		$objQuery  = mysql_query($strSQL) or die(mysql_error());			//แก้ไขแล้วกลับไปหน้าเดิม														
		print "<script language='javascript'>window.parent.msg_complete('แก้ไขข้อมูลสินค้าเรียบร้อย','?page=".$_GET['page']."');</script>";		  exit();	
}

else if($_GET['act']=="del"){
		$strSQL = "DELETE FROM wh_product2";
		$strSQL .= " WHERE id = '".$_GET['id']."' ";				
		$objQuery  = mysql_query($strSQL) or die(mysql_error());														
		print "<script language='javascript'>window.parent.msg_complete_view('ลบข้อมูลสินค้าเรียบร้อย');</script>";		  exit();	
}
					
?>