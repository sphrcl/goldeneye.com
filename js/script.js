/* Author: 

*/

$(document).ready(function(){
	
	$("#topo span.bt a").click(function () { 
		$(this).toggleClass('active');
		if ($(this).hasClass('active')){
			$("#topo").stop().animate({"height" : "377px"});
		}else{
			$("#topo").stop().animate({"height" : "20px"});
		}
	});
	
	$(".entry .post, footer nav a, .about aside article, .news .post, #comments .comment, article.border, article.content.left article.border").last().addClass('noBorder');
	$(".entry .post:last").addClass('noBorder');
	$(".eatMinorLinks article, .occasions .content img").last().addClass('noMargin');
	$('header nav a').last().css('background', 'none', 'border','none');
	$('.stay aside a, .playIns aside a').last().css('height', '51px');
	$(".press .content .awards div").addClass('clearfix');
	$(".spaExcl .columnOne p span").css({'color':'#e8519d'});

	
	/* Stay */
	$('.stay aside a').eq(1).addClass('padnav');
	$('.stay aside a').eq(2).addClass('padnav');


	
	$(".about aside article a").hover(function (){
		$(this).find('span.play').stop().animate({'opacity':0.9},300);},function(){
		$(this).find('span.play').stop().animate({'opacity':0.5},300);
	});
	
	$('dl#freq dt').hover(function () {
		if(!$(this).hasClass('active')){
		  $(this).stop().animate({'backgroundColor':'#6d96a9' , 'color':'#fff'});}}, function () {
		if(!$(this).hasClass('active')){
		  $(this).stop().animate({'backgroundColor':'#caeeff' , 'color':'#000'});}
	});
	
	
	$(".inline").colorbox({inline:true, width:"50%"});

	//---------------------------------------------------------------------------//
	//FAQ - esconde todo o conteudo da dd
	//---------------------------------------------------------------------------//
	
	$('dl#freq dd').hide().first().show(); 
	$('dl#freq dt').first().addClass('active').animate({'backgroundColor':'#6d96a9' , 'color':'#fff'}); 
        
	$('dl#freq dt').click(function(){
		var $this = $(this);
		if(!$(this).hasClass('active')){
			window.location.hash = $(this).attr('id');
			$('dl#freq dd').slideUp();
			$('dl#freq dt').removeClass('active').stop().animate({'backgroundColor':'#caeeff' , 'color':'#000'});
		}
		$(this).stop().animate({'backgroundColor':'#6d96a9' , 'color':'#fff'}).toggleClass('active').next('dl#freq dd').slideToggle(600,function(){$.scrollTo($this,400)});
	});
	
	$('.toTop').click(function (){
		$('body').animate({'scrollTop':0},'slow');
		return false;
	});
	
	
	
	//hash faq 
	if(window.location.hash != ''){
		faqHash(window.location.hash);
	}
	function faqHash(hash){
		
		$(hash).trigger('click');
		
	}
	
    
    
    //AJAX PRESS
    $('a.postsPress').click(function(){
    	$('a.postsPress').removeClass('active');
    	$(this).parent().addClass('active');
    	var id = $(this).attr('id');
    	var $figure = $('#imgPress');
    	var html = "";
    	html += jsonPress[id].img;
    	html += "<figcaption>";
    	html += "<span class=\"left\"><em>"+jsonPress[id].caption+"</em></span>";
		if(jsonPress[id].attachs != ""){
    		html += "<span class=\"right\"><a href=\""+jsonPress[id].attachs+"\" title=\"Download PDF\">Download PDF</a></span>";
		}
    	html += "</figcaption>";
    	
    	// $figure.stop().animate({'opacity':0},function(){
    		// $(this).html(html);
    	// }).animate({'opacity':1});
    	$figure.html(html);
    })  
    
    
    
    //Execução de plugins
	    $('.clearinput').clearInput();
	    
	    //scroll pane
	    if($('.scroll-pane').length){
		    var settings = {
				animateScroll 			: true,
				mouseWheelSpeed 		: 1,
				horizontalDragMinWidth	: 87

			};
			var pane = $('.scroll-pane');
			pane.jScrollPane(settings);
			var api = pane.data('jsp');
	    }
		
		
		//Carrossel
		$('.carrossel').carrossel({
			auto:true
		});
		
		
		
	//---------------------------------------------------------------------------//
	// get hash
	//---------------------------------------------------------------------------//
	
	function getHash(){
		
		var query = location.href.split('#');
		document.cookies = 'hash=' + query[1];
		alert(document.cookies);
		
	}
	
	function getHashUrlVars(){
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('#') + 1).split('&');
		for(var i = 0; i < hashes.length; i++){
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	}
	
	

		
});

