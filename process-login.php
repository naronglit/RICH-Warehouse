<?	require("connect.php");
		if($_GET['act'] == "login"){
				$sql = "SELECT u.user_name , u.permission , u.usability , p.place , p.place_id FROM wh_user AS u  ";
				$sql .= " LEFT JOIN wh_place AS p ON u.place=p.place_id WHERE u.user_name='".$_POST['txtUser']."' AND u.password='".$_POST['txtPass']."' ";
				$data = mysql_query($sql);
				$d = mysql_fetch_array($data);
				if($d <> ""){
						$_SESSION['session_user'] = array("user_name"=>$d['user_name']  ,  "permission"=>$d['permission']  ,  "usability"=>$d['usability']  ,  "place_name"=>$d['place']   , "place_id" =>$d['place_id'] );
						print "<script language='javascript'>window.parent.msg_complete('Login �����','Login ���º��������. �ô���͡���ӡ��');</script>";		  exit();	
				}else{
						print "<script language='javascript'>window.parent.msg_error('����͹','Username ���� Password ���١��ͧ ��س��ͧ����');</script>";		  exit();	
				}
		
		}/*else if( $_GET['act'] == "logout" ){
				session_destroy(); 
				print "<script language='javascript'>window.parent.msg_complete('Logout �����','�ӡ�� Logout ���º��������. �������͡���ͻԴ�����');</script>";		  exit();	
				exit();
		}*/else if( $_GET['act'] == "page_logout" ){ //logout �ҡ page ����
				session_destroy(); 
				print "<script language='javascript'>window.location='index.php?act=page_logout';</script>";		  exit();	
				exit();
		}
		
?>