	
	$('.btn').click(function(){
		if($('.carousel-item#primeiro').hasClass('active') && $('.carousel-item#primeiro').hasClass('begin')){
			$('#passa-slide').css({display: "none"});
			$('#volta-slide').css({display: "flex"});
			$('#passa-pg').css({display: "flex"});
			$('#volta-pg').css({display: "none"});
		}else if($('.carousel-item#ultimo').hasClass('active') && $('.carousel-item#ultimo').hasClass('end')){
			$('#passa-slide').css({display: "flex"});
			$('#volta-slide').css({display: "none"});
			$('#passa-pg').css({display: "none"});
			$('#volta-pg').css({display: "flex"});
		}else{
			$('#passa-slide').css({display: "flex"});
			$('#volta-slide').css({display: "flex"});
			$('#passa-pg').css({display: "none"});
			$('#volta-pg').css({display: "none"});
		}
	});	
	