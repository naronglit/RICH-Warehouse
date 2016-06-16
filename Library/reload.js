$(document).ready(function(){ //เมื่อโหลดเพ็จเสร็จ	

					$( window ).resize(function() { //เมื่อ resize browser
						BodyResize();
					});
						BodyResize();	
						
					$(".area .data .menu ul li ul li[title='selected-sub']").after("<div> (เพิ่มข้อมูล) </div>") //แสดงข้อความด้านล่างเมนูที่ถูก ไฮไล กรณีที่มีการเพิ่ม แก้ไข
/*					$('.area .data .menu ul li ul div').effect('fade',0);
					$('.area .data .menu ul li ul div').fadeIn();*/
/*						setInterval(function() {
												$('.area .data .menu ul li ul div').effect('slide',2000)
												
											}, 2000);*/
});

function BodyResize(){ // ขยายความกว้าตามหน้าจอ
			screen_width = $(window).width();
			screen_height = $(window).height();
			menu_height = $(".area .data .menu").height();
			//bodyWhite_height = $(".area .data .body_white").height();
			
						$(".area .data .body_white").css("width", (screen_width-184)+"px");//ปรับความกว้าง
						//$(".area .data .body_white").css("min-height", (screen_height-63)+"px");//ปรับความสูง	
						
						if(menu_height >  (screen_height-64)){ //เมนู สูงกว่า
							$(".area .data .body_white").css("min-height", menu_height+"px");//ปรับความสูง								
						}else{					
							$(".area .data .body_white").css("min-height", (screen_height-64)+"px");//ปรับความสูง	
						}
}


