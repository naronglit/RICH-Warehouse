<?	require("connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Login �к��Ѵ��ä�ѧ�Թ��ҷѳ�캹� </title>
<link href="CSS/index.css" rel="stylesheet" type="text/css" />
<link href="Library/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">
<script src="Library/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
<script src="Library/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script type="text/javascript" src="Library/reload.js"></script>
<script type="text/javascript">

$(document).ready(function(){ //�������Ŵ������
				$("#txtUser").focus(function(){ //��� focus
					$(this).select();
					$(this).attr("autocomplete","off");					
				});
				$("#txtPass").focus(function(){  //��� focus
					$(this).select();
					$(this).attr("autocomplete","off");					
				});				
				$("#txtUser").focus();	//��Ŵ���� focus �����
				
				$("#logout").click(function(){  //��ҡ����� logout
						window.location='process-login.php?act=page_logout';
				});
				
				tooltips.tooltip({  //�Դ����͹
				  disabled: true
				});		
				
				<? 
				if($_GET['act']=='page_logout'){  //logout �ҡྨ���
				?>
					$("#view_dialog p").text("�ӡ�� Logout ���º��������. �������͡���ͻԴ�����");  //��ͤ���
					$( "#view_dialog" ).dialog({		
																		title: "Logout �����",
																		modal: true,
																		buttons: {        ��ŧ: function() {          $( this ).dialog( "close" );      }      },
																		show: { effect: "fade", duration: 200 },
																		position: { my: 'top',at: 'bottom', of: $('.head') },
																		width: 350,
														});
				<?			
				}
				?>

});

	var tooltips = $(this).tooltip({		//��駤�� tooltips
      position: {
        my: "left bottom-10",
        at: "center top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
    });

function msg_error(title,msg)  // ��� , ��ͤ���
{		
	$("#view_dialog p").text(msg);  //��ͤ���
	$( "#view_dialog" ).dialog({		
														title: title, //���
													  	modal: true,  //��
													 	buttons: {        ��ŧ: function() {          $( this ).dialog( "close" );       }      },  //���� ��ŧ
														show: { effect: "fade", duration: 200 },  // �Ϳ࿡
														position: { my: 'top',at: 'bottom', of: $('.head') },  //���˹�
														width: 350,  //���ҧ
														close: function( event, ui ) {  	$("#txtUser").focus();   // �˵ء�ó���ѧ�������Դ
																											 tooltips.tooltip({  	disabled: true		});	  //�Դ
														}
										});
//	$("#txtPass").focus();									
	return false;
}

function msg_complete(title,msg){	  // ��� , ��ͤ���

	$("#view_dialog p").text(msg);  //��ͤ���
	$( "#view_dialog" ).dialog({		
														title: title,
													  	modal: true,
													  	buttons: {        ��ŧ: function() {          $( this ).dialog( "close" );      }      },
														show: { effect: "fade", duration: 200 },
														position: { my: 'top',at: 'bottom', of: $('.head') },
														width: 350,
														close: function( event, ui ) { window.location.href="index.php"; }
										});
	return false;
}

function checkForm(){

	tooltips.tooltip({  	disabled: false		}); //�Դ
	if($("#txtUser").val()==""){		
				tooltips.tooltip( "open" );
				$("#txtUser").focus();																				
			/*	return false	*/
	}else if($("#txtPass").val()==""){
				tooltips.tooltip( "open" );
				$("#txtPass").focus();
				/*return false	*/
	}else{
				$("#form1").submit();
	}
	
}
  
</script>
<style>
  .ui-tooltip, .arrow:after {
    background: #2E8EC2;
    border: 1px solid white;
  }
  .ui-tooltip {
	padding: 5px 15px;
	color: white;
	border-radius: 5px;
	/* [disabled]font: bold 14px "Helvetica Neue", Sans-Serif; */
	text-transform: uppercase;
	box-shadow: 0 0 7px black;
	font-size: 13px;
  }
  .arrow {
    width: 70px;
    height: 16px;
    overflow: hidden;
    position: absolute;
    left: 50%;
    margin-left: -35px;
    bottom: -16px;
  }
  .arrow.top {
    top: -16px;
    bottom: auto;
  }
  .arrow.left {
    left: 20%;
  }
  .arrow:after {
    content: "";
    position: absolute;
    left: 20px;
    top: -20px;
    width: 25px;
    height: 25px;
    box-shadow: 6px 5px 9px -9px black;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  .arrow.top:after {
    bottom: -20px;
    top: auto;
  }
  </style>
</head>

<body>
<iframe name='frame' width='1' height='1' id="frame" style='position:absolute;visibility:hidden'></iframe>
<form action="process-login.php?act=login" method="post" target="frame" id="form1" onsubmit="checkForm(); return false;">
<div class="area">
<div class="head">�к��Ѵ��ä�ѧ�Թ��ҷѳ�캹� ��س� Login.</div>
<div class="body_white">
<div class="username">Username :</div>
<div class="user_input"><? if($_SESSION['session_user']['user_name'] <> "") { echo $_SESSION['session_user']['user_name']; } else  { ?><input type="text" name="txtUser" id="txtUser" title="��͡���ͼ����ҹ" /> <? } ?></div>
<?  if($_SESSION['session_user']['user_name'] == "") { ?>
<div class="username">Password : </div>
<div class="user_input"><input type="password" name="txtPass" id="txtPass" title="��͡���ʼ�ҹ" /></div>
<? } ?>
<div class="btn_login"><?  if($_SESSION['session_user']['user_name'] == "") { ?><input  type="submit"  value=" Login " /> <input type="reset" value=" Cancel " /><? }else{ ?><input type="button" value=" Logout " id="logout" /><? } ?></div>
<div class="place">
<div class="txt_place">���͡���ӡ��</div>
<div class="botton"><a href="web_factory/page-product1.php">����Ѻ�ç�ҹ</a></div><div class="botton"><a href="#">�ӹѡ�ҹ�˭�</a></div><div class="botton"><a href="#">�͡</a></div>  <div style="clear:both;"></div>
</div>

</div>
</div>
</form>
<div id="view_dialog" title=""><p></p></div>
</body>
</html>