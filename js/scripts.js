//Licensed under GNU General Public License v2 or later  http://www.gnu.org/licenses/gpl-2.0.html


jQuery(document).ready(function($){
	navigation();
	beautify();
});

jQuery(window).resize(function($){
	
	beautify();

});


function navigation(){
	var navLi=jQuery('.menu li').children('ul').hide().end();
	
	jQuery.each(navLi,function(){
	
		if(jQuery(this).children('ul')[0]){
		jQuery(this).prepend('<span/>').children('span').addClass('hasChildren');

		}
	
	});
	navLi.hover(function(){
			// mouseover

			$(this).find('> ul').stop(true, true).slideDown();

			}, function() {
 			// mouseout
 			$(this).find('> ul').stop(true, true).hide();
			//console.log('executed');
		
		});
}


//basically removes or adds border-right style to menu list items depending on whether or not there are too many list items in the menu so that the menu looks good.

function beautify(){
	var lenOfList=jQuery(".menu").children('li').length||$("ul",".menu").children('li').length;
		var liWidths=0;
		var headerWidth=jQuery('#header').width();
		var docwidth=jQuery(document).width();
		for(var i=0; i<lenOfList;i++){
			liWidths+=jQuery("#navmenu").find("div>ul").children('li:eq('+i+')').width();
		}
		if(headerWidth < liWidths && docwidth > 800){
			jQuery("#navmenu").find("li").css({"border-right":"none","box-shadow":"none"});
		} else if( docwidth < 800) {
			jQuery("ul>li","#navmenu").css({"border-right":"1px solid #aeaeae","box-shadow":"1px 0px #fff"});
			jQuery("ul>li","#navmenu").find("li").css({"border-width":"0","box-shadow":"none"});
		} else if(headerWidth >= liWidths){
			jQuery("#navmenu").find("li").css({"border-right":"1px solid #aeaeae","box-shadow":"1px 0px #fff"});	
		}

}



