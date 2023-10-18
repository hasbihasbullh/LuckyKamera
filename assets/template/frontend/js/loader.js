$.fn.delay = function(time, callback){
	jQuery.fx.step.delay = function(){};
	return this.animate({delay:1}, time, callback);
}
 
$("#loader").delay(2500).slideToggle("slow");