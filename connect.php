<?
session_start();
	$host="localhost";
	$root="root";
	$pass="13122530";
	$dbname="warehouse2";
	$objConnect = mysql_connect($host,$root,$pass) or die("�������ö�Դ��Ͱҹ��������"); 
	$objDB = mysql_db_query($dbname,"SET NAMES  tis620"); 
	//$objDB = mysql_select_db($dbname); 
//---------------------------------------------------------------------------Start �� Login----------------------------------------------------------------------------	
	if( basename($_SERVER['PHP_SELF']) <> "index.php" and basename($_SERVER['PHP_SELF']) <> "process-login.php" and $_SESSION['session_user']['user_name'] == "" ){
			
				print "<script>window.location='../index.php';</script>";
				exit();
		
	}
//---------------------------------------------------------------------------End �� Login----------------------------------------------------------------------------	
	
//---------------------------------------------------------------------------Start Selected ���ٴ�ҹ����----------------------------------------------------------------------------			
function selectedMenu($pageName){
			
			if( in_array( basename($_SERVER['PHP_SELF']) , $pageName) ){
						if( array_search( basename($_SERVER['PHP_SELF']) , $pageName) == "0" ){ //���� ����
								return "  title='selected' ";
						}else if(array_search( basename($_SERVER['PHP_SELF']) , $pageName) == "1"){ //����+�ʴ���ͤ�����ҹ��ҧ
								return "  title='selected-sub' ";// �� jquery �������ʴ���ͤ�����ͨҡ����
						}
			}
}
//---------------------------------------------------------------------------End Selected ���ٴ�ҹ����----------------------------------------------------------------------------		



//--------------------------------------------------------------- ��˹��-------------------------------------------------------------------------------	
	function page($str_page,$str_num,$str_sql){  
							global   $Page_Sql , $Page , $Num_Pages , $Page_Start , $Prev_Page , $Next_Page , $change_page;
							$objQuery  = mysql_query($str_sql) or die(mysql_error()); // ����������������Ҩӹǹ�Ƿ����� �Ѻ�Ҩҡ�ҡ  $str_sql
			 				$Num_Rows = mysql_num_rows($objQuery); // �Ҩӹǹ��						
							$Per_Page= $str_num;   // �ӹǹ�����ŷ���ͧ����ʴ����˹�� �Ѻ�Ҩҡ  $str_num							
							$Page = $str_page;  // ˹�һѨ�غѹ  �Ѻ�Ҩҡ  $str_page
							if($str_page=="")
							{		$Page=1;					}
							
							if($str_num=="")
							{		$Per_Page=10;					}							
						 
						$Prev_Page = $Page-1;					
						$Next_Page = $Page+1;									
						$Page_Start = (($Per_Page*$Page)-$Per_Page);
					if($Num_Rows<=$Per_Page)
							{		$Num_Pages =1;		}
								else if(($Num_Rows % $Per_Page)==0)
							{		$Num_Pages =($Num_Rows/$Per_Page) ;		}
								else
							{		$Num_Pages =($Num_Rows/$Per_Page)+1;
									$Num_Pages = (int)$Num_Pages;					}	
				//sql ��˹��																	
				$Page_Sql = " LIMIT $Page_Start , $Per_Page " ;				
				
				//����������¹˹��
				$change_page = '<div class="block_page">';
  				if($Prev_Page<>0){   $change_page .= '<a href="#" onclick="change_page('.$Prev_Page.')">&lt; Prev</a> ';  } //���� Prev ����������˹���á
  				$change_page .= '�˹�� <select onchange="change_page(this.value)">';
						for($p=1;$p<=$Num_Pages;$p++) { 
						$change_page .= '<option value="'.$p.'"';
								if($Page==$p) {   $change_page .= ' selected="selected" '; } 
						$change_page .= '>'.$p.'</option>';		
						 } 
				$change_page .= '</select> �ҡ '.$Num_Pages.' ˹��' ;		
				if($Page<$Num_Pages){   $change_page .= ' <a href="#" onclick="change_page('.$Next_Page.')">Next &gt;</a>';  } //���� Prev ����������˹���á
				$change_page .= '</div>';		
	}
	
//--------------------------------------------------------------- resize ����ٻ-------------------------------------------------------------------------------	
function resizePic(){
				include ("file:///C|/AppServ/www/kpi/warehouse/class.resizepic.php");				
				global $Filename;
				  $Filename = $_FILES['picture']['name'];
				  $type = $_FILES['picture']['type'];																						
				  //�纪�����������Ң�з�� upload ���ǵ�����¹��ʡ����� �������ժ�������͹�ѹ��������ջѭ��
				  //����ö upload �����ʡ�� .jpg ��
				  $time = time();
				  if (( $type == "image/jpg") or ($type=="image/jpeg") or ($type == "image/pjpeg")) {$Filename = $time.".jpg"; $pic_type = 'JPG'; }
				  else{		print "<script language='javascript'>window.parent.msg_error('��س��Ѿ��Ŵ����ٻ��Ẻ .JPG');</script>";		  exit();					}

				  //move �����ѧ�����������ҧ���㹷������ fileupload
				  if(move_uploaded_file($_FILES['picture']['tmp_name'], 'images/products/'.$Filename)){				
						  //�����ǹ�ͧ���Ŵ��Ҵ����ٻ�Ҿ
						  if($pic_type){
							  $original_image = "images/products/".$Filename ; 
							  $pic_size = getimagesize($original_image); //�֧��Ҵ�ͧ����Ҿ��
							  $desired_width = 250 ; //��˹��������ҧ
							  //�Ҥ����٧�ͧ�Ҿ�¤Դ�ҡ�������ҧ��觨л�Ѻ�����٧�ѵ��ѵ�����բ�Ҵ�ʹ� 
							  //�Ҩ���������͹���ӡѹ����� ���з���仨С�˹������٧���Ǥӹǳ�������ҧ
							  $per_div = abs($desired_width - $pic_size[0]) * 100 / $pic_size[0];
							  $desired_height = $pic_size[0] > $desired_width ?  $pic_size[1] - floor( $pic_size[1] * $per_div / 100) : $pic_size[1] + floor( $pic_size[1] * $per_div / 100);
							  $image = new hft_image($original_image);
							  $image->resize($desired_width, $desired_height, '0');
							  $image->output_resized("images/products/".$Filename, "JPG");
							  }																			
				  }																		

}

//--------------------------------------------------------------- �ŧ�ѹ���-------------------------------------------------------------------------------	
	function convers_DateToDB($data){ //25/06/2558 OUTPUT 2015-06-25
						$time = explode('/',$data);
						$str = ($time[2]-543)."-".$time[1]."-".($time[0]);
						return $str;
	}
	function convers_DBToDate($data){ // 24/01/2556  13:42:22
						if($data <> "0000-00-00 00:00:00" AND $data <> "0000-00-00" AND $data <> ""){
								$array = explode(' ',$data);
								$time = explode('-',$array[0]);
								$str = $time[2]."/".$time[1]."/".($time[0]+543);
								if($array[1] <> '00:00:00' and $array[1] <> ''){
										$str .= "  ".$array[1];
								}
						}else{
								$str = "";
						}
								return $str;
	}
	
		function convers_DBToDate2($data){ // 24/01/2556  13:42:22  IF return '-'
						if($data <> "0000-00-00 00:00:00" AND $data <> "0000-00-00" AND $data <> ""){
								$array = explode(' ',$data);
								$time = explode('-',$array[0]);
								$str = $time[2]."/".$time[1]."/".($time[0]+543);
								if($array[1] <> '00:00:00' and $array[1] <> ''){
										$str .= "  ".$array[1];
								}
						}else{
								$str = "-";
						}
								return $str;
	}
	
		function conversDateToString($data){ //2013-01-13  OUT13 ���Ҥ� 2556 
							$thai_month_arr=array(
							"0"=>"",
							"01"=>"���Ҥ�",
							"02"=>"����Ҿѹ��",
							"03"=>"�չҤ�",
							"04"=>"����¹",
							"05"=>"����Ҥ�",
							"06"=>"�Զع�¹",	
							"07"=>"�á�Ҥ�",
							"08"=>"�ԧ�Ҥ�",
							"09"=>"�ѹ��¹",
							"10"=>"���Ҥ�",
							"11"=>"��Ȩԡ�¹",
							"12"=>"�ѹ�Ҥ�"					
						);
									if($data <> ""){
									$array = explode(' ', $data );
									$date = explode('-',$array[0]); //�ѹ���
									//$time = explode(':',$array[1]); //����
									
									$str = $date[2]." ".$thai_month_arr[$date[1]]." ".($date[0]+543)." ";
									//$str .= $time[0].".".$time[1]." �.";
									return $str;
									}else{
									return " ��辺������..";	
									}
				}
				



/*
	if($_SESSION["UserID"]=="" or $_SESSION["Status"]==""){
		echo "<script type='text/javascript' >window.location='../logout.php';</script>";
	}else if($_SESSION["kpiYear"] == "" and basename($_SERVER['PHP_SELF']) <> "index.php"){
		echo "<script type='text/javascript' >window.location='index.php';</script>";
	}
	
	
	function convers_date($data){ //�ç��ķ��� �����ٹ   24/01/2556  13:42:22
				if($data <> "0000-00-00 00:00:00"){
						$array = explode(' ',$data);
						$time = explode('-',$array[0]);
						$str = $time[2]."/".$time[1]."/".($time[0]);
						if($array[1] <>'00:00:00'){
								$str .= "  ".$array[1];
						}
				}else{
						$str = "";
				}
						return $str;
	}
	
		function conversDateToMonth($data){ // ���Ҥ� 2556
				$thai_month_arr=array(
				"0"=>"",
				"01"=>"���Ҥ�",
				"02"=>"����Ҿѹ��",
				"03"=>"�չҤ�",
				"04"=>"����¹",
				"05"=>"����Ҥ�",
				"06"=>"�Զع�¹",	
				"07"=>"�á�Ҥ�",
				"08"=>"�ԧ�Ҥ�",
				"09"=>"�ѹ��¹",
				"10"=>"���Ҥ�",
				"11"=>"��Ȩԡ�¹",
				"12"=>"�ѹ�Ҥ�"					
			);
						$time = explode('-',$data);
						$str = $thai_month_arr[$time[1]]." ".($time[0]+543);
						return $str;
	}
	
			function conversNumberToMonth($data){ //  jan
					$thai_month_arr=array(
					"0"=>"",
					"01"=>"jan",
					"02"=>"feb",
					"03"=>"mar",
					"04"=>"apr",
					"05"=>"may",
					"06"=>"jun",	
					"07"=>"jul",
					"08"=>"aug",
					"09"=>"sep",
					"10"=>"oct",
					"11"=>"nov",
					"12"=>"dece"	 );
						$time = explode('-',$data);
						$str = $thai_month_arr[$time[1]];
						return $str;
				}
	
				
				function conversDateToShot($data , $type){ //  shot 20/12/14    long   �� 20/12/2014  ���� 13:10:43 
						$array = explode(' ', $data );
						$date = explode('-',$array[0]); //�ѹ���
						$time = explode(':',$array[1]); //����
						
						if($type == "shot" && $data <> ""){								
								return  $date[2]."/".$date['1'] ."/".substr(($date[0]),2) ; //  09/12/14
						}	else if($type == "long" && $data <> ""){
											if($array[1] == "00:00:00"){
												return  "�ѹ����� ".$date[2]."/".$date['1']."/".($date[0]); 			
											}else{
												return  "�ѹ����� ".$date[2]."/".$date['1']."/".($date[0])." ���� ".$array[1]  ; 			
											}
							
																
						}	else if($type == "time" && $data <> ""){ //���� 13.00 �.
												if($array[1]  <> "00:00:00"){
														return "���� ".$time[0].".".$time[1]." �.";
												}else{
														return		"";
												}
						}		
						
						
				}
				
			
				
				function remind_date($date){
					if($date == "0000-00-00") return "";
					else return $date;
				}
				
				function date_active($date){
					if($date == "0000-00-00 00:00:00") return "";
					else return str_replace(" ","<br>",$date);
				}
				
				function status_remind($status){
					if($status == 1) return "Wait..";
					else if($status == 2) return "<span class='complet'>Success..</span>";
					else if($status == 3) return "<span class='fail'>Fail..</span>";
				}
				
				function date_remind($date){
					if($date == "") return "�ѧ�������";
					else return $date;

				}
				
				function STR_month_remind($month,$year){  // �ѹ�Ҥ� 2014
							$thai_month_arr=array(
							"0"=>"",
							"01"=>"���Ҥ�",
							"02"=>"����Ҿѹ��",
							"03"=>"�չҤ�",
							"04"=>"����¹",
							"05"=>"����Ҥ�",
							"06"=>"�Զع�¹",	
							"07"=>"�á�Ҥ�",
							"08"=>"�ԧ�Ҥ�",
							"09"=>"�ѹ��¹",
							"10"=>"���Ҥ�",
							"11"=>"��Ȩԡ�¹",
							"12"=>"�ѹ�Ҥ�"					
						);
									$time = explode('-',$data);
									$str = $thai_month_arr[$month]." ".$year;
									return $str;
				}
				
				function increase_month($data){ //   9/12/2014   +1 ��͹
						$date = date ("Y-m-d", strtotime("+1 month", strtotime($data)));
						$date = explode('-',$date); //�ѹ���				
						return  $date[2]."/".$date['1'] ."/".substr(($date[0]),2) ; //  9/12/14						
						
				}*/
				

	
?>