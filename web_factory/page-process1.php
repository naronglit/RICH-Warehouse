<?	require("../connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/factory.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>:. ��觵Ѵ����</title>
<link href="../CSS/factory.css" rel="stylesheet" type="text/css" />
<link href="../Library/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />
<script src="../Library/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
<script src="../Library/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script type="text/javascript" src="../Library/reload.js"></script>
<script type="text/javascript">
$(document).ready(function(){ //�������Ŵ������
				$(".btn_new").click(function(){  //����������
						window.location='page-process1-form.php?act=add';
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
      <div class="view_head"><!-- InstanceBeginEditable name="view_head" -->��觵Ѵ����<!-- InstanceEndEditable --></div>
      <div class="view_head2"> <!-- InstanceBeginEditable name="view_head2" -->
        <div class="btn_export">���͡ Excel</div>
        <div class="btn_new">+ ��������</div>
      <!-- InstanceEndEditable --></div>
      <div class="view_data"><!-- InstanceBeginEditable name="view_data" -->      
      <form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="view_tbl">
          <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>�ѹ���</th>
            <th>�Ţ������觵Ѵ</th>
            <th>��¡��</th>
            <th>Coil No.</th>
            <th>���ҧ(Mm.)</th>
            <th>���˹ѡ(Kgs.)</th>
            <th>�ӹǹ</th>
            <th>
              <label for="select">�˹��</label>
              <select name="select" id="select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                </select>
              �ҡ 8 ˹��</th>
          </tr>
          <tr>
            <td><img src="../Images/subData2-ico.png" width="15" height="15" /></td>
            <td>&nbsp;</td>
            <td>01 �.�. 58</td>
            <td>REX5809-1</td>
            <td>������ǹ�� 1.70 x 1219 MM.</td>
            <td>1</td>
            <td>1,224</td>
            <td>16,310</td>
            <td>1</td>
            <td><img src="../Images/view-icon.png" width="23" height="23" /><img src="../Images/bin-icon.png" width="20" height="23" /></td>
          </tr>
          <tr class="sub_tr">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2">- ������ᶺ (50.06%)</td>
            <td>&nbsp;</td>
            <td>211</td>
            <td>2,721.5</td>
            <td>3</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="sub_tr">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2">- ������ᶺ (6.88%)</td>
            <td>&nbsp;</td>
            <td>87</td>
            <td>1,122</td>
            <td>1</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="sub_tr">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2">- ������ᶺ (39.86%)</td>
            <td>&nbsp;</td>
            <td>168</td>
            <td>2,167</td>
            <td>3</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="sub_tr">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2">- �٭���� ��������л��� (0.71%)</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>115</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="sub_tr">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2">- �٭���� ��ɢͺ 2 ��ҧ (2.5%)</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>407</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="../Images/subData-ico.png" width="15" height="15" /></td>
            <td>&nbsp;</td>
            <td>01 �.�. 58</td>
            <td>REX5809-2</td>
            <td>������ǹ�� 1.70 x 1219 MM.</td>
            <td>1</td>
            <td>1,224</td>
            <td>16,310</td>
            <td>1</td>
            <td><img src="../Images/view-icon.png" width="23" height="23" /><img src="../Images/bin-icon.png" width="20" height="23" /></td>
          </tr>
          <tr>
            <td><img src="../Images/subData-ico.png" width="15" height="15" /></td>
            <td>&nbsp;</td>
            <td>01 �.�. 58</td>
            <td>REX5810-1</td>
            <td>������ǹ�� 1.70 x 1219 MM.</td>
            <td>1</td>
            <td>1,224</td>
            <td>16,310</td>
            <td>1</td>
            <td><img src="../Images/view-icon.png" width="23" height="23" /><img src="../Images/bin-icon.png" width="20" height="23" /></td>
          </tr>
          <tr>
            <td><img src="../Images/subData-ico.png" width="15" height="15" /></td>
            <td>&nbsp;</td>
            <td>05 �.�. 58</td>
            <td>REX5811-1</td>
            <td>������ǹ�� 1.70 x 1219 MM.</td>
            <td>1</td>
            <td>1,224</td>
            <td>16,310</td>
            <td>1</td>
            <td><img src="../Images/view-icon.png" width="23" height="23" /><img src="../Images/bin-icon.png" width="20" height="23" /></td>
          </tr>
          <tr>
            <td><img src="../Images/subData-ico.png" width="15" height="15" /></td>
            <td>&nbsp;</td>
            <td>05 �.�. 58</td>
            <td>REX5812-1</td>
            <td>������ǹ�� 1.70 x 1219 MM.</td>
            <td>1</td>
            <td>1,224</td>
            <td>16,310</td>
            <td>1</td>
            <td><img src="../Images/view-icon.png" width="23" height="23" /><img src="../Images/bin-icon.png" width="20" height="23" /></td>
          </tr>
          <tr>
            <td><img src="../Images/subData-ico.png" width="15" height="15" /></td>
            <td>&nbsp;</td>
            <td>05 �.�. 58</td>
            <td>REX5813-1</td>
            <td>������ǹ�� 1.70 x 1219 MM.</td>
            <td>1</td>
            <td>1,224</td>
            <td>16,310</td>
            <td>1</td>
            <td><img src="../Images/view-icon.png" width="23" height="23" /><img src="../Images/bin-icon.png" width="20" height="23" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>

      </form>
      <!-- InstanceEndEditable --></div>
    </div>
  </div>
  
  <div class="footer">ʧǹ�Ԣ�Է��� 2015. RICH ASIA Group.</div>
</div>
</body>
<!-- InstanceEnd --></html>
