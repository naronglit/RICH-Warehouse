<?	require("../connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/factory.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>:. Ἱ�Ѻ�ѵ�شԺ</title>
<link href="../CSS/factory.css" rel="stylesheet" type="text/css" />
<link href="../Library/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />
<script src="../Library/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
<script src="../Library/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script type="text/javascript" src="../Library/reload.js"></script>
<script type="text/javascript">
$(document).ready(function(){ //�������Ŵ������
				$(".btn_back").click(function(){  //��Ѻ
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
            <li><a href="#">��ѧ�Թ���</a></li>
            <li><a href="#">�ٵá�ü�Ե</a></li>
            <li <?=selectedMenu(array("","page-taxation-form.php")) ?>><a href="page-taxation-form.php">�������-�͡</a></li>
            <li <?=selectedMenu(array("page-user.php","page-user-form.php")) ?>><a href="page-user.php">�����ҹ�к�</a></li>
          </ul>
        </li>
  </ul></div>
    <div class="body_white">
      <div class="view_head"><!-- InstanceBeginEditable name="view_head" -->Ἱ�Ѻ�ѵ�شԺ<!-- InstanceEndEditable --></div>
      <div class="view_head2"> <!-- InstanceBeginEditable name="view_head2" -->
        <div class="btn_back">��Ѻ�˹�Ң�����</div>
        <div class="btn_edit">��䢢����Ź��</div>
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
    <td align="right">��˹������ŢἹ :</td>
    <td><label for="textfield6"></label>
      <input name="textfield6" type="text" id="textfield6" size="25" /></td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">�ѹ����˹��Ѻ :</td>
    <td><label for="textfield"></label>
      <input name="textfield" type="text" id="textfield" size="15" /></td>
    <td align="right">�����˵� :</td>
    <td rowspan="2"><label for="textfield3">
      <textarea name="textarea" id="textarea" cols="35" rows="3"></textarea>
    </label></td>
  </tr>
  <tr>
    <td align="right">����ѷ����� :</td>
    <td><label for="textfield2"></label>
      <input name="textfield5" type="text" id="textfield2" size="25" /> 
      <a href="#">���͡</a></td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center">��������´�Թ����Ἱ</td>
    </tr>
  <tr>
    <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th>�����Թ���</th>
        <th>�Թ���</th>
        <th align="right">�ӹǹ�Ѻ(��ǹ)</th>
        <th align="right"><a href="#">�����Թ���</a></th>
        </tr>
      <tr>
        <td>RM1101701219 </td>
        <td>������ǹ�� 1.70 x 1219 MM. </td>
        <td align="right"><label for="textfield9"></label>
          <input name="textfield8" type="text" id="textfield9" value="1" size="10" /></td>
        <td align="right"><label for="textfield14"><a href="#">ź��¡�ù��</a></label></td>
        </tr>
      <tr>
        <td>RM1101901219</td>
        <td>������ǹ�� 1.90 x 1219 MM. </td>
        <td align="right"><label for="textfield13"></label>
          <input name="textfield9" type="text" id="textfield13" value="1" size="10" /></td>
        <td align="right"><label for="textfield15"><a href="#">ź��¡�ù��</a></label></td>
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
    <td colspan="4" align="center"><input type="submit" name="Submit" id="button" value=" �ѹ�֡ " /> <input type="reset" name="button2" id="button2" value=" ¡�ԡ " /></td>
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
  
  <div class="footer">ʧǹ�Ԣ�Է��� 2015. RICH ASIA Group.</div>
</div>
</body>
<!-- InstanceEnd --></html>
