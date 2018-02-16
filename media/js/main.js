$(function(){
	var fx={
	'initModal':function(){
		if($('.modal-window').length==0){
			$('<div>').attr('id', 'overlay').fadeIn(2000).appendTo('body');
			
			return $('<div>').addClass('modal-window').appendTo('body');
		}else{return $('.modal-window')			
		}
	}	
	}
	$('.menutop a').mouseover(function(){
		var title=$(this).attr('data-title');
		var url=$(this).attr('data-url');
		$('.header h1').text(title);
		$('header.header').css('background',url);
		
		});
		$('.link').bind('click', function(){id=$(this).attr('data_id');
		modal=fx.initModal();
		$('<a>').attr('href','#').addClass('model-close-btn').html('Close &times;').click(function(e){
		e.preventDefault();
		modal.remove();
		$('#overlay').fadeIn(2000, function(){$(this).remove();
			
		});
		}).appendTo(modal); 
		});
		
});