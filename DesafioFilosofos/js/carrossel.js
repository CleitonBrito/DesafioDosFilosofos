	

	$('.btn').click(function(){
		if($('.carousel-item#primeiro').hasClass('active')){
			$('#passa-slide').css({display: "none"});
			$('#volta-slide').css({display: "flex"});
			$('#passa-pg').css({display: "flex"});
			$('#volta-pg').css({display: "none"});
		}else if($('.carousel-item#ultimo').hasClass('active')){
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
	