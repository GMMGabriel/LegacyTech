$(function(){
    
    var liWidth = $("#slide ul li").outerWidth(),
        speed   = 3000,
        rotate  = setInterval(auto, speed);
    
    $(".setas a").fadeOut();
    
    // Mostra os botões
	$("#local_slide").hover(function(){
		$(".setas a").fadeIn();
        clearInterval(rotate);
	}, function(){
		$(".setas a").fadeOut();
        rotate = setInterval(auto, speed);
	});
    
    // Próximo
    $(".next").click(function(e){
        e.preventDefault();
        
        $("#slide ul").css({'width':'99999%'}).animate({left:-liWidth}, function(){
            $("#slide ul li").last().after($("#slide ul li").first());
            $(this).css({'left':'0', 'width':'auto'});
        });
    })
    
    // Anterior
    $(".prev").click(function(e){
        e.preventDefault();
        
        $("#slide ul li").first().before($("#slide ul li").last().css({'margin-left':-liWidth}));
        $("#slide ul").css({'width':'99999%'}).animate({left:liWidth}, function(){
            $("#slide ul li").first().css({'margin-left':'0'});
            $(this).css({'left':'0', 'width':'auto'});
        });
    })
    
    function auto(){
        $(".next").click();
    }
});