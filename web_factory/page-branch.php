<?	require("../connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/factory.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>:. ��ѧ�Թ���</title>
<link href="../CSS/factory.css" rel="stylesheet" type="text/css" />
<link href="../Library/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />
<script src="../Library/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
<script src="../Library/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script type="text/javascript" src="../Library/reload.js"></script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="area">
  <div class="header">
    <div class="text_place">: <?=$_SESSION['session_user']['place_name'] ?></div>
  <div class="text_logout"><a href="../process-login?act=page_logout">Logout</a></div>
    <div class="text_home"><a href="../index.php">��Ѻ˹����ѡ</a></div>
    <div class="text_user">�����ҹ : <?=$_SESSION['session_user']['user_name'] ?></div>
    
  </div>
  <div class="data">
    <div class="menu">
      <ul>
        <li>�������Թ���        
          <ul>
            <li <?=selectedMenu(array("page-product1.php","page-product1-form.php")) ?>><a href="page-product1.php">������ǹ</a></li>
            <li <?=selectedMenu(array("page-product2.php","page-product2-form.php")) ?>><a href="page-product2.php">������Ե</a></li>
            <li <?=selectedMenu(array("page-product3.php","page-product3-form.php")) ?>><a href="page-product3.php">�������ٻ</a></li>
          </ul>
        </li>
        <li>�Ѻ�ѵ�شԺ
          <ul>
            <li <?=selectedMenu(array("page-receivePlan.php","page-receivePlan-form.php")) ?>><a href="page-receivePlan.php">Ἱ�Ѻ�ѵ�شԺ</a></li>
            <li <?=selectedMenu(array("page-receive.php","page-receive-form.php")) ?>><a href="page-receive.php">�Ѻ�ѵ�شԺ��Ҥ�ѧ</a></li>
            <li><a href="#">�������</a></li>
          </ul>
        </li>
        <li>���ٻ�Թ���
          <ul>
            <li <?=selectedMenu(array("page-process1.php","page-process1-form.php")) ?>><a href="page-process1.php">��觵Ѵ����</a></li>
            <li <?=selectedMenu(array("page-process2.php","page-process2-form.php")) ?>><a href="page-process2.php">��Ե�Թ���</a></li>
            <li <?=selectedMenu(array("page-process3.php","page-process3-form.php")) ?>><a href="page-process3.php">���Թ���</a></li>
          </ul>
        </li>
        <li>��鹵͹����            
          <ul>
            <li><a href="#">Ἱ��è����Թ���</a></li>
            <li><a href="#">�����Թ����͡</a></li>
            <li><a href="#">�������</a></li>
          </ul>
        </li>
        <li>����ѷ�����            
          <ul>
            <li <?=selectedMenu(array("page-supplier.php","page-supplier-form.php")) ?>><a href="page-supplier.php">�����Ť����</a></li>
          </ul>
        </li>
        <li>����
          <ul>
            <li <?=selectedMenu(array("page-branch.php","page-branch-form.php")) ?>><a href="page-branch.php">��ѧ�Թ���</a></li>
            <li><a href="#">�ٵá�ü�Ե</a></li>
            <li <?=selectedMenu(array("","page-taxation-form.php")) ?>><a href="page-taxation-form.php">�������-�͡</a></li>
            <li <?=selectedMenu(array("page-user.php","page-user-form.php")) ?>><a href="page-user.php">�����ҹ�к�</a></li>
          </ul>
        </li>
  </ul></div>
    <div class="body_white">
      <div class="view_head"><!-- InstanceBeginEditable name="view_head" -->��ѧ�Թ���<!-- InstanceEndEditable --></div>
      <div class="view_head2"> <!-- InstanceBeginEditable name="view_head2" -->        <div class="btn_export">���͡ Excel</div>
      <div class="btn_new">+ ��������</div><!-- InstanceEndEditable --></div>
      <div class="view_data"><!-- InstanceBeginEditable name="view_data" -->
      <?
	     $strSQL = "SELECT * FROM  wh_place WHERE 1=1";  
		if($_POST["s_text1"]){
		 $strSQL .= " AND place_id LIKE '%".$_POST["s_text1"]."%' ";  
		}
		if($_POST["s_text2"]){
		 $strSQL .= " AND place LIKE '%".$_POST["s_text2"]."%' ";  
		}
		if($_POST["s_select1"]){
		 $strSQL .= " AND place_type = '".$_POST["s_select1"]."' ";  
		}
		
		page($_GET['page'],'15',$strSQL);				
		$n = $Page_Start;
		$strSQL .= " ORDER BY id ASC ".$Page_Sql;		
		$objQuery  = mysql_query($strSQL) or die(mysql_error());
	  ?>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="view_tbl">
          <tr>
            <th>�ӴѺ</th>
            <th>���ʤ�ѧ�Թ���</th>
            <th>���ͤ�ѧ�Թ���</th>
            <th>���ͺ���ѷ</th>
            <th>�����˵�</th>
            <th><? echo $change_page;   //�ʴ������Ţ˹��	?></th>
          </tr>
          <?
while($objResult = mysql_fetch_array($objQuery))	
		{  	

		?>      
          <tr>
            <td><?=($n+=1)."." ?></td>
            <td><?=$objResult["place_id"]  ?></td>
            <td><?=$objResult["place"]  ?></td>
            <td><?=$objResult["company"]  ?></td>
            <td><?=$objResult["place_type"]  ?></td>
            <td><img src="../Images/view-icon.png" width="23" height="23" /><img src="../Images/bin-icon.png" width="20" height="23" /></td>
          </tr>
<?
		}
?>
        </table><!-- InstanceEndEditable --></div>
    </div>
  </div>
  
  <div class="footer">ʧǹ�Ԣ�Է��� 2015. RICH ASIA Group.</div>
</div>
</body>
<!-- InstanceEnd --></html>
