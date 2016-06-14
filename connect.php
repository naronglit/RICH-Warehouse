<?
session_start();
	$host="localhost";
	$root="root";
	$pass="13122530";
	$dbname="warehouse2";
	$objConnect = mysql_connect($host,$root,$pass) or die("ไม่สามารถติดต่อฐานข้อมูลได้"); 
	$objDB = mysql_db_query($dbname,"SET NAMES  tis620"); 
	//$objDB = mysql_select_db($dbname); 
//---------------------------------------------------------------------------Start เช็ค Login----------------------------------------------------------------------------	
	if( basename($_SERVER['PHP_SELF']) <> "index.php" and basename($_SERVER['PHP_SELF']) <> "process-login.php" and $_SESSION['session_user']['user_name'] == "" ){
			
				print "<script>window.location='../index.php';</script>";
				exit();
		
	}
//---------------------------------------------------------------------------End เช็ค Login----------------------------------------------------------------------------	
	
//---------------------------------------------------------------------------Start Selected เมนูด้านซ้าย----------------------------------------------------------------------------			
function selectedMenu($pageName){
			
			if( in_array( basename($_SERVER['PHP_SELF']) , $pageName) ){
						if( array_search( basename($_SERVER['PHP_SELF']) , $pageName) == "0" ){ //ไฮไล เมนู
								return "  title='selected' ";
						}else if(array_search( basename($_SERVER['PHP_SELF']) , $pageName) == "1"){ //ไฮไล+แสดงข้อความด้านล่าง
								return "  title='selected-sub' ";// ใช้ jquery สั่งให้แสดงข้อความต่อจากไฮไล
						}
			}
}
//---------------------------------------------------------------------------End Selected เมนูด้านซ้าย----------------------------------------------------------------------------		



//--------------------------------------------------------------- แบ่งหน้า-------------------------------------------------------------------------------	
	function page($str_page,$str_num,$str_sql){  
							global   $Page_Sql , $Page , $Num_Pages , $Page_Start , $Prev_Page , $Next_Page , $change_page;
							$objQuery  = mysql_query($str_sql) or die(mysql_error()); // คิวรี่ข้อมูลเพื่อหาจำนวนแถวทั้งหมด รับมาจากจาก  $str_sql
			 				$Num_Rows = mysql_num_rows($objQuery); // หาจำนวนแถว						
							$Per_Page= $str_num;   // จำนวนข้อมูลที่ต้องการแสดงต่อหน้า รับมาจาก  $str_num							
							$Page = $str_page;  // หน้าปัจจุบัน  รับมาจาก  $str_page
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
				//sql แบ่งหน้า																	
				$Page_Sql = " LIMIT $Page_Start , $Per_Page " ;				
				
				//ปุ่มกดเปลี่ยนหน้า
				$change_page = '<div class="block_page">';
  				if($Prev_Page<>0){   $change_page .= '<a href="#" onclick="change_page('.$Prev_Page.')">&lt; Prev</a> ';  } //ปุ่ม Prev เมื่อไม่ใช้หน้าแรก
  				$change_page .= 'ไปหน้า <select onchange="change_page(this.value)">';
						for($p=1;$p<=$Num_Pages;$p++) { 
						$change_page .= '<option value="'.$p.'"';
								if($Page==$p) {   $change_page .= ' selected="selected" '; } 
						$change_page .= '>'.$p.'</option>';		
						 } 
				$change_page .= '</select> จาก '.$Num_Pages.' หน้า' ;		
				if($Page<$Num_Pages){   $change_page .= ' <a href="#" onclick="change_page('.$Next_Page.')">Next &gt;</a>';  } //ปุ่ม Prev เมื่อไม่ใช้หน้าแรก
				$change_page .= '</div>';		
	}
	
//--------------------------------------------------------------- resize ไฟล์รูป-------------------------------------------------------------------------------	
function resizePic(){
				include ("file:///C|/AppServ/www/kpi/warehouse/class.resizepic.php");				
				global $Filename;
				  $Filename = $_FILES['picture']['name'];
				  $type = $_FILES['picture']['type'];																						
				  //เก็บชื่อไฟล์เป็นเวลาขณะที่ upload แล้วตามด้วยนามสกุลไฟล์ ถ้าไฟล์มีชื่อเหมือนกันจะได้ไม่มีปัญหา
				  //สามารถ upload ไฟล์นามสกุล .jpg ได้
				  $time = time();
				  if (( $type == "image/jpg") or ($type=="image/jpeg") or ($type == "image/pjpeg")) {$Filename = $time.".jpg"; $pic_type = 'JPG'; }
				  else{		print "<script language='javascript'>window.parent.msg_error('กรุณาอัพโหลดไฟล์รูปเป็นแบบ .JPG');</script>";		  exit();					}

				  //move ไฟล์ไปยังโฟลเดอร์ที่สร้างไว้ในที่นี้คือ fileupload
				  if(move_uploaded_file($_FILES['picture']['tmp_name'], 'images/products/'.$Filename)){				
						  //โค้ดในส่วนของการลดขนาดไฟล์รูปภาพ
						  if($pic_type){
							  $original_image = "images/products/".$Filename ; 
							  $pic_size = getimagesize($original_image); //ดึงขนาดของไฟล์ภาพมา
							  $desired_width = 250 ; //กำหนดความกว้าง
							  //หาความสูงของภาพโดยคิดจากความกว้างซึ่งจะปรับความสูงอัตโนมัติให้มีขนาดพอดี 
							  //อาจจะไม่เหมือนที่ทำกันทั่วไป เพราะทั่วไปจะกำหนดความสูงแล้วคำนวณความกว้าง
							  $per_div = abs($desired_width - $pic_size[0]) * 100 / $pic_size[0];
							  $desired_height = $pic_size[0] > $desired_width ?  $pic_size[1] - floor( $pic_size[1] * $per_div / 100) : $pic_size[1] + floor( $pic_size[1] * $per_div / 100);
							  $image = new hft_image($original_image);
							  $image->resize($desired_width, $desired_height, '0');
							  $image->output_resized("images/products/".$Filename, "JPG");
							  }																			
				  }																		

}

//--------------------------------------------------------------- แปลงวันที่-------------------------------------------------------------------------------	
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
	
		function conversDateToString($data){ //2013-01-13  OUT13 มกราคม 2556 
							$thai_month_arr=array(
							"0"=>"",
							"01"=>"มกราคม",
							"02"=>"กุมภาพันธ์",
							"03"=>"มีนาคม",
							"04"=>"เมษายน",
							"05"=>"พฤษภาคม",
							"06"=>"มิถุนายน",	
							"07"=>"กรกฎาคม",
							"08"=>"สิงหาคม",
							"09"=>"กันยายน",
							"10"=>"ตุลาคม",
							"11"=>"พฤศจิกายน",
							"12"=>"ธันวาคม"					
						);
									if($data <> ""){
									$array = explode(' ', $data );
									$date = explode('-',$array[0]); //วันที่
									//$time = explode(':',$array[1]); //เวลา
									
									$str = $date[2]." ".$thai_month_arr[$date[1]]." ".($date[0]+543)." ";
									//$str .= $time[0].".".$time[1]." น.";
									return $str;
									}else{
									return " ไม่พบข้อมูล..";	
									}
				}
				



/*
	if($_SESSION["UserID"]=="" or $_SESSION["Status"]==""){
		echo "<script type='text/javascript' >window.location='../logout.php';</script>";
	}else if($_SESSION["kpiYear"] == "" and basename($_SERVER['PHP_SELF']) <> "index.php"){
		echo "<script type='text/javascript' >window.location='index.php';</script>";
	}
	
	
	function convers_date($data){ //ณรงค์ฤทธิ์ เพิ่มพูน   24/01/2556  13:42:22
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
	
		function conversDateToMonth($data){ // มกราคม 2556
				$thai_month_arr=array(
				"0"=>"",
				"01"=>"มกราคม",
				"02"=>"กุมภาพันธ์",
				"03"=>"มีนาคม",
				"04"=>"เมษายน",
				"05"=>"พฤษภาคม",
				"06"=>"มิถุนายน",	
				"07"=>"กรกฎาคม",
				"08"=>"สิงหาคม",
				"09"=>"กันยายน",
				"10"=>"ตุลาคม",
				"11"=>"พฤศจิกายน",
				"12"=>"ธันวาคม"					
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
	
				
				function conversDateToShot($data , $type){ //  shot 20/12/14    long   ส่ง 20/12/2014  เวลา 13:10:43 
						$array = explode(' ', $data );
						$date = explode('-',$array[0]); //วันที่
						$time = explode(':',$array[1]); //เวลา
						
						if($type == "shot" && $data <> ""){								
								return  $date[2]."/".$date['1'] ."/".substr(($date[0]),2) ; //  09/12/14
						}	else if($type == "long" && $data <> ""){
											if($array[1] == "00:00:00"){
												return  "วันที่ส่ง ".$date[2]."/".$date['1']."/".($date[0]); 			
											}else{
												return  "วันที่ส่ง ".$date[2]."/".$date['1']."/".($date[0])." เวลา ".$array[1]  ; 			
											}
							
																
						}	else if($type == "time" && $data <> ""){ //เวลา 13.00 น.
												if($array[1]  <> "00:00:00"){
														return "เวลา ".$time[0].".".$time[1]." น.";
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
					if($date == "") return "ยังไม่ได้ส่ง";
					else return $date;

				}
				
				function STR_month_remind($month,$year){  // ธันวาคม 2014
							$thai_month_arr=array(
							"0"=>"",
							"01"=>"มกราคม",
							"02"=>"กุมภาพันธ์",
							"03"=>"มีนาคม",
							"04"=>"เมษายน",
							"05"=>"พฤษภาคม",
							"06"=>"มิถุนายน",	
							"07"=>"กรกฎาคม",
							"08"=>"สิงหาคม",
							"09"=>"กันยายน",
							"10"=>"ตุลาคม",
							"11"=>"พฤศจิกายน",
							"12"=>"ธันวาคม"					
						);
									$time = explode('-',$data);
									$str = $thai_month_arr[$month]." ".$year;
									return $str;
				}
				
				function increase_month($data){ //   9/12/2014   +1 เดือน
						$date = date ("Y-m-d", strtotime("+1 month", strtotime($data)));
						$date = explode('-',$date); //วันที่				
						return  $date[2]."/".$date['1'] ."/".substr(($date[0]),2) ; //  9/12/14						
						
				}*/
				

	
?>