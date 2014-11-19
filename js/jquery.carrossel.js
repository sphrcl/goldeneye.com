/**
 * @author Ruan Candido
 */
	$.widget("nmk.carrossel" , {
		options: {
			animation:'fade',
			pagination:true,
			paginationType:"link",
			arrows:true,
			itensPage:1,
			auto:false,
			timeInterval:7000,
			ativarKeydown:true,
			ease:'easeOutSine',
			duration:50,
			transitionDuration:300
		},
		
		
		_create: function(){
			var $this , $next , $prev , $linkPage , $atualPage , $itens , itensPage , $animation , ativarKeydown , auto , timeInterval , transitionDuration , duration , ease , intervalo , time , pages , page , pagination , paginationType , arrows , effectWidth , effectheight , flagNext , flagPrev , pageWidth , pageHeight , target , animation,
				
				start = function(element , options){
					//setando variaveis
					$this  				= element;
					$itens 				= $this.find('.item');
					itensPage 			= options.itensPage;
					pages  	   			= Math.ceil($itens.length / itensPage);
					pageWidth  			= $itens.outerWidth(true) * itensPage;
					pageHeight 			= $itens.outerHeight(true) * itensPage;
					page 	   			= 0;
					target 				= 1;
					animation 			= options.animation;
					auto 				= options.auto;
					timeInterval   		= options.timeInterval;
					ativarKeydown 		= options.ativarKeydown;
					arrows 				= options.arrows;
					pagination 			= options.pagination;
					paginationType 		= options.paginationType;
					ease 				= options.ease;
					duration 			= options.duration;
					transitionDuration 	= options.transitionDuration;
					//Methods
					if (pagination){
						$this.prepend('<div class="pagination"/>');

						switch (paginationType){
							case "link":
							if(pages>1){
								for (var i = 0 ; i < pages ; i++){
									$this.find('.pagination').append('<a href="javascript:;" class="page">'+ (i+1) +'</a>')
								}
								$linkPage = $this.find('.page');
								$linkPage.first().addClass('cur');
								$linkPage.live('click',function(){
									target = $linkPage.index(this);
									if(target != page){
										changePage (target , page);
									};
									page = target;
								});
								if (animation=="slideH"){
									$linkPage.parent().css({'width': ($linkPage.outerWidth(true)*$linkPage.length) , 'margin':"0 0 0 " + (-($linkPage.outerWidth(true)*$linkPage.length)/2)+"px"});
								}
							}
							break;
							case "cont":
								$this.find('.pagination').append('<p style="display:block; height:100%; overflow:hidden; position:relative;"><span class="maskPages" style="float:left; display:block; left:0; top:0; position:relative;"></span> de '+pages+' páginas</p>')
								for (var i = 0 ; i < pages ; i++){
									$this.find('.pagination .maskPages').append('<span class="atual" style="display:block;">'+(i+1)+'</span>');
								}
								$atualPage = $this.find('.pagination .atual')
								
							break;
						}
					}
					if (arrows){
						if(pages>1){
							$this.append('<a href="javascript:;" class="bts prev">Anterior<span class="effect"><span class="out"></span><span class="hover"></span><span class="disable"></span></span></a><a href="javascript:;" class="bts next">Próxima<span class="effect"><span class="out"></span><span class="hover"></span><span class="disable"></span></span></a>')
							$next = $this.find('.next');
							$prev = $this.find('.prev');
							effectWidth = $this.find('a.bts span.effect').outerWidth(true);
							effectheight = $this.find('a.bts span.effect').outerHeight(true);
							flagNext = true; 
							flagPrev = true;
							$prev.live({
								click: function(){
									target = page - 1;
									if (target >= 0){
										target;
									}else{
										target = pages-1;
									};
									changePage (target , page);
									page=target;
									return false;
								},
								mouseenter: function(){
									flagPrev = false;
									if (!$(this).hasClass('disable')){
										if (animation == "slideH"){
											$(this).find('.effect').animate({left:-effectWidth*1/3} , duration , ease);
										}else{
											$(this).find('.effect').animate({top:-effectheight*1/3} , duration , ease);
										};
									}
								},
								mouseleave: function(){
									flagPrev = true; 
									if (!$(this).hasClass('disable')){
										if (animation == "slideH"){
											$(this).find('.effect').animate({left:'0'} , duration , ease);
										}else{
											$(this).find('.effect').animate({top:'0'} , duration , ease);
										}
									}
								}
							});
							$next.live({
								click : function(){
									target = page + 1;
									if (target < pages){
										target
									}else{
										target = 0;
									};
									changePage (target , page);
									page=target;
									return false;
								},
								mouseenter: function(){
									flagNext = false; 
									if (!$(this).hasClass('disable')){
										if (animation == "slideH"){
											$(this).find('.effect').animate({left:-effectWidth*1/3} , duration , ease);
										}else{
											$(this).find('.effect').animate({top:-effectheight*1/3} , duration , ease);
										};
									}
								},
								mouseleave: function(){
									flagNext = true; 
									if (!$(this).hasClass('disable')){
										if (animation == "slideH"){
											$(this).find('.effect').animate({left:-effectWidth*2/3} , duration , ease);
										}else{
											$(this).find('.effect').animate({top:-effectheight*2/3} , duration , ease);
										}
									}
								}
							});
	
							/*	if(pages>1){
								$prev.addClass('disable');
								$next.removeClass('disable');
								if (animation == "slideH"){
									$this.find('a.bts span.effect').css({left:-effectWidth*2/3});
								}else{
									$this.find('a.bts span.effect').css({top:-effectheight*2/3});
								}
							}else{
								$prev.addClass('disable');
								$next.addClass('disable');
								if (animation == "slideH"){
									$prev.find('.effect').css({left:-effectWidth*2/3});
									$next.find('.effect').css({left:0});
								}else{
									$prev.find('.effect').css({top:-effectheight*2/3});
									$next.find('.effect').css({top:0});
								}
							};*/
						}
					}
					
					if (auto){
						time = function(){
							intervalo =  setTimeout( function(){
										target = page + 1;
										if (target < pages){
											changePage (target , page);
										}else{
											target = 0;
											changePage (target , page);
										};
										page=target;
									}, timeInterval);
						};
						
						time();
						
						 $(window).focus(function() { 
							time();						
						 }).blur(function() { 
							clearTimeout(intervalo);						
						 });
						
						$this.hover( function(){
							clearTimeout(intervalo);						
						},function(){
							time();						
						});
					}
					
					if (ativarKeydown){
						$this.hover (function(){
							$(document).bind( 'keydown' , function(e){
								if (e.keyCode == 39){
									//NEXT
									target = page + 1;
									if (target < pages){
										changePage (target , page);
									}else{
										target = pages-1;
									};
									page=target;
								}else if (e.keyCode == 37){
									//PREV
									target = page - 1;
									if (target >= 0){
										changePage (target , page);
									}else{
										target = page;
									};
									page=target;
								}
							});
						},function(){
							$(document).unbind('keydown');
						});
					};
					
					
					//Filter
					$this.find('.filter').find('input').click(function(){
						var val = $(this).val();
						if($(this).attr('checked') == "checked"){
							$itens.filter('.'+val).show().animate({'width':300, 'opacity':1 } , 600 , function(){ ajustar();});
						}else{
							if ($this.find('.filter').find('input:checked').length >= 1 && $itens.filter(':visible').length-parseInt($(this).parent().find('span').text()) > 3  ){
								$itens.filter('.'+val).animate({'width':0, 'opacity':0 } , 600 , function(){$(this).hide(); ajustar();});
							}else{
								$(this).attr('checked','checked');
							}
						}
					}).each(function(k,input){
						var val = $(input).val();
						var total = $itens.filter('.'+val).length;
						$(input).parent().find('span').text(total);
					});
					
					//filter estado
					$this.find('.filterEstado li').live({'click':function(){
						var val = $(this).attr('alt');
						if( val == ""){
							$itens.show().animate({'width':300, 'opacity':1 } , 600 , function(){ ajustar();});
						}else{
							$itens
								.filter('.'+val)
								.show()
								.animate({'width':300, 'opacity':1 } , {duration: 600 ,  queue: false , complete: function(){ ajustar();}})
								.end()
								.not('.'+val)
								.animate({'width':0, 'opacity':0 } , {duration: 600 ,  queue: false  , complete: function(){$(this).hide(); ajustar();}});
						}
					}});
					
					//Animations
					switch (options.animation){
						case 'slideV':
							$this.append('<div class="mask" style="width:100%; height:100%; position:relative; overflow:hidden;"><div class="animation" style="position:absolute;" /></div>');
							$animation = $this.find('.animation');
							$animation.append($itens).height($itens.length * pageHeight);
						break;
						case 'fade':
							$itens.css({'position': 'absolute' , 'top': '0' ,  'left': '0' , 'display':'none'}).first().show()
						break;
						default:
							$this.append('<div class="mask" style="width:100%; height:100%; position:relative; overflow:hidden;"><div class="animation" style="position:absolute;" /></div>');
							$animation = $this.find('.animation');
							$animation.append($itens).width($itens.length * pageWidth);
						break;
					};
					
					
				},
				
				ajustar = function(){
					pages = Math.ceil($itens.filter(':visible').length / itensPage);
					if(page >= pages){
						page = pages-1;
						target = pages-1;
						changePage (target , page);
					};
					if(pages > $linkPage.length){
						// console.log(pages-$linkPage.length , 'passou12')
						for(var x = 0 ; x < pages-$linkPage.length ;x++){
							$this.find('.pagination').append('<a href="javascript:;" class="page">'+ ($linkPage.length+x+1) +'</a>')
						} 
					}else{
						$linkPage.slice(pages , $linkPage.length).remove();
					}
					$linkPage = $this.find('.page');
					if (animation=="slideH"){
						$linkPage.parent().css({'width': ($linkPage.outerWidth(true)*$linkPage.length) , 'margin':"0 0 0 " + (-($linkPage.outerWidth(true)*$linkPage.length)/2)+"px"});
					}
					$this.find('.filter').find('input').each(function(k,input){
						var val = $(input).val();
						var total = $itens.filter('.'+val+':visible').length;
						$(input).parent().find('span').text(total);
					});
				},
				
				
				changePage = function(target , page){
					if (auto){
						clearTimeout(intervalo);						
					};
					
					var moveH = -pageWidth*(target);
					var moveV = -pageHeight*(target);
					var falta = $itens.filter(':visible').length - (target * itensPage);
					if ( falta < itensPage ){
						moveH = moveH + ((itensPage - falta) * $itens.outerWidth(true));
						moveV = moveV + ((itensPage - falta) * $itens.outerHeight(true));
					};
					if (pagination){
						switch(paginationType){
							case "link":
								$linkPage.removeClass('cur').eq(target).addClass('cur');
							break;
							case "cont":
								$this.find('.pagination .maskPages').stop().animate({"top":-target*$atualPage.outerHeight()} , 200 , ease);
							break;
						}
					}
					/*if (arrows){
		                switch(target){
		                	case 0:
								if (animation == "slideH"){
									$prev.addClass('disable').find('.effect').animate({left:-effectWidth*2/3} , duration , ease);
									if (flagNext){
										$next.removeClass('disable').find('.effect').animate({left:-effectWidth*2/3} , duration , ease);
									}else{
										$next.removeClass('disable');
									}
								}else{
									$prev.addClass('disable').find('.effect').animate({top:-effectheight*2/3} , duration , ease);
									if (flagNext){
										$next.removeClass('disable').find('.effect').animate({top:-effectheight*2/3} , duration , ease);
									}else{
										$next.removeClass('disable');
									}
								};
		                	break;
		                	case pages-1:
								if (animation == "slideH"){
									if (flagPrev){
										$prev.removeClass('disable').find('.effect').animate({left:0} , duration , ease);
									}else{
										$prev.removeClass('disable');
									}
									$next.addClass('disable').find('.effect').animate({left:0} , duration , ease);
								}else{
									if (flagPrev){
										$prev.removeClass('disable').find('.effect').animate({top:0} , duration , ease);
									}else{
										$prev.removeClass('disable');
									}
									$next.addClass('disable').find('.effect').animate({top:0} , duration , ease);
								};
		                	break;
		                	default:
								if (animation == "slideH"){
									if (flagPrev){
										$prev.removeClass('disable').find('.effect').animate({left:0} , duration , ease);
									}else{
										$prev.removeClass('disable');
									}
									if (flagNext){
										$next.removeClass('disable').find('.effect').animate({left:-effectWidth*2/3} , duration , ease);
									}else{
										$next.removeClass('disable');
									}
								}else{
									if (flagPrev){
										$prev.removeClass('disable').find('.effect').animate({top:0} , duration , ease);
									}else{
										$prev.removeClass('disable');
									}
									if (flagNext){
										$next.removeClass('disable').find('.effect').animate({top:-effectheight*2/3} , duration , ease);
									}else{
										$next.removeClass('disable');
									}
								};
		                	break;
		                };
					}*/
	                					
					switch(animation){
						case 'slideV':
							$animation.stop().animate({top:moveV+'px'},500 , ease);
						break;
						case 'fade':
							$itens.fadeOut(transitionDuration).eq(target).fadeIn(transitionDuration);
						break;
						default:
							$animation.stop().animate({left:moveH+'px'},500 , ease);
						break;
					};
					if (auto){
						time();						
					};
				};
				
				
				
				start(this.element , this.options);
			this._update();
		},
		

		
		
		_setOption: function(key, value) {
			this.options[key] = value;
			this._update();
		},
		
		_update: function(){
		}
		
	});
