//responsive menu function	
$('.main-navigation').hide();
$('.nav-icon').on('click', function(event){
		event.preventDefault();
		var slideoutMenu = $('.main-navigation');		
		slideoutMenu.slideToggle(200);
});
$(document).ready(function(){
$('li.all').addClass('selected');	
$('li.all a').addClass('active');
$('.port-filters li').on('click', function(e){
	$(this).addClass('selected');
	$(this).children().addClass('active');	
    $('.works-feed > div').hide();
    if($(this).hasClass('show')) {
    $(this).siblings().removeClass('selected');
    $(this).siblings().children().removeClass('active');
    $(this).next('li').children().addClass('active');
      $('.works-feed > div').show();
    } else if($(this).hasClass('all')) {
    $(this).siblings().removeClass('selected');
    $(this).siblings().children().removeClass('active');
      $('.works-feed > div').show();
    } else {
    $(this).siblings().removeClass('selected');
    $(this).siblings().children().removeClass('active');
      var categoryId = $(this).data('category');
      $('div.cat-'+ categoryId).show();
    }
    e.preventDefault();
  })
});
