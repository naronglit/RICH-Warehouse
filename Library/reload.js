$(document).ready(function(){ //�������Ŵ������	

					$( window ).resize(function() { //����� resize browser
						BodyResize();
					});
						BodyResize();	
						
					$(".area .data .menu ul li ul li[title='selected-sub']").after("<div> (����������) </div>") //�ʴ���ͤ�����ҹ��ҧ���ٷ��١ ���� �óշ���ա������ ���
/*					$('.area .data .menu ul li ul div').effect('fade',0);
					$('.area .data .menu ul li ul div').fadeIn();*/
/*						setInterval(function() {
												$('.area .data .menu ul li ul div').effect('slide',2000)
												
											}, 2000);*/
});

function BodyResize(){ // ���¤������ҵ��˹�Ҩ�
			screen_width = $(window).width();
			screen_height = $(window).height();
			menu_height = $(".area .data .menu").height();
			//bodyWhite_height = $(".area .data .body_white").height();
			
						$(".area .data .body_white").css("width", (screen_width-184)+"px");//��Ѻ�������ҧ
						//$(".area .data .body_white").css("min-height", (screen_height-63)+"px");//��Ѻ�����٧	
						
						if(menu_height >  (screen_height-64)){ //���� �٧����
							$(".area .data .body_white").css("min-height", menu_height+"px");//��Ѻ�����٧								
						}else{					
							$(".area .data .body_white").css("min-height", (screen_height-64)+"px");//��Ѻ�����٧	
						}
}


