<?	require("../connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>:. ��ѧ�Թ��ҷѳ�캹</title>
<link href="../CSS/factory.css" rel="stylesheet" type="text/css" />
<link href="../Library/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">
<script src="../Library/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
<script src="../Library/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script type="text/javascript" src="../Library/reload.js"></script>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
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
            <li <?=selectedMenu(array("page-product1.php","page-product1-form.php")) ?>><a href="../web_factory/page-product1.php">������ǹ</a></li>
            <li <?=selectedMenu(array("page-product2.php","page-product2-form.php")) ?>><a href="../web_factory/page-product2.php">������Ե</a></li>
            <li <?=selectedMenu(array("page-product3.php","page-product3-form.php")) ?>><a href="../web_factory/page-product3.php">�������ٻ</a></li>
          </ul>
        </li>
        <li>�Ѻ�ѵ�شԺ
          <ul>
            <li <?=selectedMenu(array("page-receivePlan.php","page-receivePlan-form.php")) ?>><a href="../web_factory/page-receivePlan.php">Ἱ�Ѻ�ѵ�شԺ</a></li>
            <li <?=selectedMenu(array("page-receive.php","page-receive-form.php")) ?>><a href="../web_factory/page-receive.php">�Ѻ�ѵ�شԺ��Ҥ�ѧ</a></li>
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
            <li <?=selectedMenu(array("page-supplier.php","page-supplier-form.php")) ?>><a href="../web_factory/page-supplier.php">�����Ť����</a></li>
          </ul>
        </li>
        <li>����
          <ul>
            <li><a href="#">��ѧ�Թ���</a></li>
            <li><a href="#">�ٵá�ü�Ե</a></li>
            <li <?=selectedMenu(array("","page-taxation-form.php")) ?>><a href="../web_factory/page-taxation-form.php">�������-�͡</a></li>
            <li <?=selectedMenu(array("page-user.php","page-user-form.php")) ?>><a href="../web_factory/page-user.php">�����ҹ�к�</a></li>
          </ul>
        </li>
  </ul></div>
    <div class="body_white">
      <div class="view_head"><!-- TemplateBeginEditable name="view_head" -->�������Թ���<!-- TemplateEndEditable --></div>
      <div class="view_head2"> <!-- TemplateBeginEditable name="view_head2" -->Content for  class "view_head2" Goes Here<!-- TemplateEndEditable --></div>
      <div class="view_data"><!-- TemplateBeginEditable name="view_data" -->Content for  class "view_data" Goes Here<!-- TemplateEndEditable --></div>
    </div>
  </div>
  
  <div class="footer">ʧǹ�Ԣ�Է��� 2015. RICH ASIA Group.</div>
</div>
</body>
</html>
