//responsive menu function	
$('.main-navigation').hide();
$('.nav-icon').on('click', function(event){
		event.preventDefault();
		var slideoutMenu = $('.main-navigation');		
		slideoutMenu.slideToggle(200);
});
//equal height columns	
$(document).ready(function() {

    $.fn.eqHeights = function() {

        var el = $(this);
        if (el.length > 0 && !el.data('eqHeights')) {
            $(window).bind('resize.eqHeights', function() {
                el.eqHeights();
            });
            el.data('eqHeights', true);
        }
        return el.each(function() {
            var curHighest = 0;
            $(this).children().each(function() {
                var el = $(this),
                    elHeight = el.height('auto').height();
                if (elHeight > curHighest) {
                    curHighest = elHeight;
                }
            }).height(curHighest);
        });
    };

   
	
	$('.main-footer').eqHeights();

});

$(document).ready(function(){
	
	$('.works-thumb, .x-image').on('click', (function(event){
		
		var thisPost = $(this).closest('.works-post');
		var thisBox = $(this).closest('.parent-box');
		var otherPosts = thisPost.siblings('.works-post');
		var beyondPosts = thisBox.siblings('.parent-box').find('.works-post');
		$('.x-image').rotate(0);
		thisPost.find('.works-thumb').toggle('fast');
	 thisPost.find('.toggle-content').slideToggle('fast', function(){
				thisPost.toggleClass('open',$(this).is(':visible'));
					otherPosts.removeClass('open');
					otherPosts.find('.toggle-content').hide();
					otherPosts.find('.works-thumb').show();
				
					beyondPosts.removeClass('open');
					beyondPosts.find('.toggle-content').hide();
					beyondPosts.children('.works-thumb').filter(':hidden').show();
					
					thisPost.insertBefore(otherPosts.first());
					
					
			})
	var contentHeight = $('#content').data('contentHeight');
		if ('contentHeight') {
        $('#content').removeData('contentHeight');
        $('#content').animate({height: contentHeight});
    } else {
        contentHeight = $('#content').height();
        $('#content').data('contentHeight', origHeight);
        $('#content').animate({height: origHeight * 1.1});
    }
 }))
	
});
jQuery(document).ready(function($){
	
	$('.service .mobile').css( 'cursor', 'pointer' ).on('click',(function(){
		var thisBlurb = $(this).siblings('p');
		thisBlurb.slideToggle('fast');
	}))
})
$(document).ready(function(){
$('.slideshow').cycle({ 
    fx:     'fade', 
    speed:  'fast', 
    timeout: 0, 
    next:   '.next', 
    prev:   '.prev'  
});
})