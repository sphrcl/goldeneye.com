/*
jQuery Clear-Input plugin
v1.0
Author: Aidan Feldman

USAGE
Add the class .clear-input to any text input element
whose value you want cleared when it gains focus.
The initial value will be replaced when the input
loses focus, and no new text has been entered.

If you prefer to not add classes to your elements,
you can alternatively call clearInput() on any jQuery
input object.
*/
(function( $ ){
  // define the initialValue() function
  $.fn.initialValue = function(value) {
    if (value) {
      return this.attr('data-initial-value', value);
    } else {
      return this.attr('data-initial-value');
    }
  };
  
  $.fn.clearInput = function() {
    return this
      .focus(function(){
        if(this.type == 'password'){
	        if ($.trim(this.value) == '') {
	          $(this).removeClass($(this).initialValue());
	        }
        }else{
	        if ($.trim(this.value) == $(this).initialValue()) {
	          this.value = '';
	        }
        };
      })
      .blur(function(){
        if(this.type == 'password'){
	        if ($.trim(this.value) == '') {
	          $(this).addClass($(this).initialValue());
	        }
        }else{
	        if ($.trim(this.value) == '') {
	          this.value = $(this).initialValue();
	        }
	    }
      })
      .each(function(index, elt) {
        if(this.type == 'password'){
        	var classe = $(this).attr('class').split(' ');
        	switch(jQuery.inArray("senha", classe)){
        		case 1:
	        	$(this).initialValue('senha');
	        	break;
	        	case -1:
	        	$(this).initialValue('confirma');
	        	break;
			}
        }else{
	        $(this).initialValue(this.value);
        }
      });
  };
  



  // apply plugin to all inputs with class ".clear-input"
  $(function() {
    $('input.clear-input').clearInput();
  });
})( jQuery );