// Startup Scripts
$(document).ready(function()
{

	$('#sideNav').affix({
	  offset: {
	    top: 0
	   
	  }
	})
	
	$('a[href*=#]:not([href=#])').click(function()
	{
		$('.active').removeClass('active');
		$(this).parent().addClass('active');
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length)
		  {
	        $('html,body').animate({
	          scrollTop: target.offset().top -60
	        }, 300);
	        return false;
	      }
	    }
	  });

	
});

