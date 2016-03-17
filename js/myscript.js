jQuery(document).ready(function($) {
  function setHeiHeight() {
      $('.container').css({
          height: $(window).height() + 'px'
      });
  }
  setHeiHeight(); // устанавливаем высоту окна при первой загрузке страницы
  $(window).resize( setHeiHeight ); // обновляем при изменении размеров окна

/*Конец высоты*/
/*Текст к картинкам контакты*/

	var tit = $('.hidetxt').text();
  	$('.acted').append( tit );
  

  $('.foto img').hover(function() {
  	var tit = $(this).attr('hidetitle');
  	 $('.acted').hide().empty();
  	$('.acted').show().append( tit );
  	
  });

  /*Паралакс*/
  $(window).scroll(function() {
  var par = $(this).scrollTop();
  /*Лого*/
  $("#logo").css({
  	"transform" :"translate3d(0px , " + par /2 + "%, .0px)",
  	"-webkit-transform" : "translate3d(0px , " + par /2 + "%, .0px)",
  	"-moz-transform" : "translate3d(0px , " + par /2 + "%, .0px)"

  });
  /*Облока*/
  var cont4 = $('.cont4').offset().top - par;
  var cont5 = $('.cont5').offset().top - par;
  console.log(cont4);
  if( cont4 < 50){
    
  	$('.gusi').css('visibility', 'visible').addClass('animated bounceInLeft');
    
  }
    if( cont5 < 50){
    
    $('.pavlin').css('visibility', 'visible').addClass('animated bounceInRight');
    
  }
  var i = $('.cont4').offset().top - par;
  $("#obl1").css({
  	 "transform" :"translate3d(" + i / 2 + "%," + i/8  + "%, 0px)",
    "-webkit-transform" : "translate3d(" + i / 2 + "%, " + i/8  +  "%, .0px)",
    "-moz-transform" : "translate3d(" + i / 2 + "%, "+ i/8  +"%, 0px)"
  	});
   $("#obl2").css({
  	"right" :"" + par /60 + "%",
  	});
  
  if ($(this).scrollTop() > 300) {
          $('.fotoin').css('visibility', 'visible').addClass('animated bounceInLeft');
          $('.textunber').css('visibility', 'visible').addClass('animated bounceInRight');
          $('.foto h3').css('visibility', 'visible').addClass('animated bounceInUp');
      }
  });

  /*Слайдер*/
  
    $('.bxslider').bxSlider({
		   minSlides: 4,
    	  maxSlides: 4,
    	  slideWidth: 600,
    	  slideMargin: 5,
    	  ticker: true,
    	  speed: 49000

    	});
  
});