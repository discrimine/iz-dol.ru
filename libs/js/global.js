$(document).ready(function(){
	$(".table-column").click(function(){ 
        if( $(this).hasClass("table-slider") ){
    		$(this).parent().next(".table_full").slideToggle();
    		$(this).toggleClass("active");
    		if ($(this).hasClass("active")){
    			$(this).children().children(".table-column__arrow").children("img").attr("src","img/service/arrow_black.png"); 
    			
    		}else{
    			$(this).children().children(".table-column__arrow").children("img").attr("src","img/service/arrow.png"); 
    		}
        }
	});
	 $('.single-item').slick();
     $(".menu-wrapper").click(mobile_menu);
     $('.black').click(mobile_menu);

    function mobile_menu () {
        $('#nav-toggle').toggleClass('active');
        $('body').toggleClass('scroll_hid');            
        $('.ama_menu').toggleClass("ama_menu_position_open");
        $('.menu-wrapper').toggleClass("menu-wrapper_open");

        if(!$('.ama_menu').hasClass("ama_menu_position_open")){
            $('.black').css('display', 'none');
        } else {
            $('.black').css('display', 'block');
        }    
    }   
    $('#choosing_house_num').on('change', function(){
        var params = {'house_num': $(this).val()};
        $.post('backend/ajax_docs.php', params, function(data) {
            $('#result_docs').html(data);
        });
    }); 
    (function($) {
        $(function() {
            $('.select').styler({
                fileBrowse: 'Выбрать',
            });
        });
    })(jQuery);

    $('.multiple-item').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
        }
        ]
      });
	
    
    $("a.single_image").fancybox({
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic',
		'speedIn' : 600, 
		'speedOut' : 200, 
		'overlayShow' : true,
        'modal' : false,
        'toolbar' : false,
        'titleShow' : true,
        'titlePosition' : 'over'

	});
});