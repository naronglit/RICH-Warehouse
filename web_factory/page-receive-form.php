<?	require("../connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/factory.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>:. �Ѻ�ѵ�شԺ��Ҥ�ѧ</title>
<link href="../CSS/factory.css" rel="stylesheet" type="text/css" />
<link href="../Library/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />
<script src="../Library/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
<script src="../Library/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script type="text/javascript" src="../Library/reload.js"></script>
<script type="text/javascript">
$(document).ready(function(){ //�������Ŵ������
				$(".btn_back").click(function(){  //��Ѻ
						window.location='page-receive.php';
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
      <div class="view_head"><!-- InstanceBeginEditable name="view_head" -->�Ѻ�ѵ�شԺ��Ҥ�ѧ<!-- InstanceEndEditable --></div>
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
    <td align="right">�ѹ����Ѻ�Թ��� :</td>
    <td><label for="textfield6"></label>
      <input name="textfield6" type="text" id="textfield6" size="15" /></td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">�Ţ������/㺢� :</td>
    <td><label for="textfield"></label>
      <input name="textfield" type="text" id="textfield" size="25" /></td>
    <td align="right">�ѹ�������/㺢� :</td>
    <td><label for="textfield3"></label>
      <input name="textfield5" type="text" id="textfield3" size="15" /></td>
  </tr>
  <tr>
    <td align="right">����������Ѻ :</td>
    <td><input type="radio" name="radio" id="radio" value="radio" />
      <label for="radio">�����</label>
      <input type="radio" name="radio2" id="radio2" value="radio2" />
      <label for="radio2">�Ѻ�͹</label></td>
    <td align="right">�ѹ������� :</td>
    <td><label for="textfield7"></label>
      <input name="textfield7" type="text" id="textfield7" size="15" /></td>
  </tr>
  <tr>
    <td align="right">�Ţ�����ҧ�ԧ :</td>
    <td><label for="textfield2"></label>
      <input type="text" name="textfield16" id="textfield2" /></td>
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
    <td align="right">�����ŢἹ����Ѻ :</td>
    <td><label for="select2"></label>
      <select name="select" id="select2">
      </select>      <label for="textfield6"></label></td>
    <td align="right">�ѹ������ҧἹ :</td>
    <td><label for="textfield3"></label>
      <input name="textfield2" type="text" id="textfield3" /></td>
  </tr>
  <tr>
    <td align="right">�ѹ����Ѻ���Ἱ :</td>
    <td><label for="textfield7"></label>
      <input name="textfield4" type="text" id="textfield7" /></td>
    <td align="right">�����˵� :</td>
    <td rowspan="2"><textarea name="textarea" id="textarea" cols="35" rows="3"></textarea></td>
  </tr>
  <tr>
    <td align="right">����ѷ����� :</td>
    <td><label for="textfield8"></label>
      <input type="text" name="textfield3" id="textfield8" /></td>
    <td align="right">&nbsp;</td>
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
    <td colspan="4" align="center">��������´�Թ��ҷ���Ѻ</td>
    </tr>
  <tr>
    <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th>�����Թ���</th>
    <th>�Թ���</th>
    <th align="right">Coil No.</th>
    <th align="right">���˹ѡ(��.)</th>
    <th align="right">��Ť��(�ҷ)</th>
    <th align="right">Tax 5.00%</th>
    <th align="right">Vat 7.00%</th>
    <th align="right">�������</th>
  </tr>
  <tr>
    <td>RM1101701219 </td>
    <td>������ǹ�� 1.70 x 1219 MM. </td>
    <td align="right"><label for="textfield4"></label>
      <input name="textfield17" type="text" id="textfield4" value="1" size="2" /></td>
    <td align="right"><label for="textfield9"></label>
      <input name="textfield8" type="text" id="textfield9" value="975300" size="10" /></td>
    <td align="right"><label for="textfield14"></label>
      <input name="textfield10" type="text" id="textfield14" value="22649568.84" size="10" /></td>
    <td align="right"><span id="tax11">1,132,478.44</span></td>
    <td align="right"><span id="vat11">1,664,743.31</span></td>
    <td align="right"><span id="total_taxation11">2,797,221.75</span></td>
  </tr>
  <tr>
    <td>RM1101901219</td>
    <td>������ǹ�� 1.90 x 1219 MM. </td>
    <td align="right"><label for="textfield5"></label>
      <input name="textfield18" type="text" id="textfield5" value="2" size="2" /></td>
    <td align="right"><label for="textfield13"></label>
      <input name="textfield9" type="text" id="textfield13" value="694400" size="10" /></td>
    <td align="right"><label for="textfield15"></label>
      <input name="textfield11" type="text" id="textfield15" value="15943703.78" size="10" /></td>
    <td align="right"><span id="tax12">797,185.19</span></td>
    <td align="right"><span id="vat12">1,171,862.23</span></td>
    <td align="right"><span id="total_taxation12">1,969,047.42</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right"><span id="grandQuantity">1,669,700.00000</span></td>
    <td align="right"><span id="grandPrice">38,593,272.62</span></td>
    <td align="right"><span id="grandTax">1,929,663.63</span></td>
    <td align="right"><span id="grandVat">2,836,605.54</span></td>
    <td align="right"><span id="grandTaxation">4,766,269.17</span></td>
  </tr>
  </table>
</td>
    </tr>
  <tr>
    <td colspan="2" align="left"><a href="#">���ѵ�شԺ����Ѻ����</a></td>
    <td align="right">&nbsp;</td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center">����������� �</td>
    </tr>
  <tr>
    <td colspan="4" align="right"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>��¡��</th>
        <th>�ӹǹ(�ҷ)</th>
        <th>&nbsp;</th>
      </tr>
      <tr>
        <td><a href="#">������¡��</a></td>
        <td>1</td>
        <td><label for="textfield18"></label>
          <input name="textfield14" type="text" id="textfield18" size="30" /></td>
        <td><label for="textfield16"></label>
          <input name="textfield12" type="text" id="textfield16" size="15" /></td>
        <td><a href="#">ź��¡�ù��</a></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>2</td>
        <td><label for="textfield19"></label>
          <input name="textfield15" type="text" id="textfield19" size="30" /></td>
        <td><label for="textfield17"></label>
          <input name="textfield13" type="text" id="textfield17" size="15" /></td>
        <td><a href="#">ź��¡�ù��</a></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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
