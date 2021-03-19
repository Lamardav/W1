$(document).ready(function(){
  $('.carousel__inner').slick({
  	
  infinite: true,
  speed: 300,
  autoplay: true,
/*  dots:true,*/
  arrows: true,
  fade: true,
  cssEase: 'linear',
	nextArrow: '<button type="button" class="fas fa-angle-right" id="arrow__right" style="position: absolute;top:50%;transform:translateY(-50%);right:3%;left:auto;font-size: 18px;width:63px;z-index: 103;height:63px;border-radius: 50%; background: rgba(255, 239, 220, 0.8); "></button>' ,
	prevArrow: '<button type="button" class="fas fa-angle-left" id="arrow__left" style="position: absolute;top:50%;transform:translateY(-50%); left:3%;font-size: 18px;width:63px;height:63px;z-index: 103;border-radius: 50%; background: rgba(255, 239, 220, 0.8); "></button>' 
  });
});	

