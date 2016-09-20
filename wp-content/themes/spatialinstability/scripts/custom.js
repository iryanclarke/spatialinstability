(function($){
	$( window ).load( function( ) {
		var transparent = true;

		// Open external links in new window
		$('a:link:not([href*="mailto"])').each(function() {
		   var a = new RegExp('/' + window.location.host + '/');
		   if(!a.test(this.href)) {
		       	$(this).click(function(event) {
		           event.preventDefault();
		           event.stopPropagation();
		           window.open(this.href, '_blank');
		       });
		   }
		});

		$('.my-slider').unslider({
			arrows: {
				//  Unslider default behaviour
				prev: '<a class="unslider-arrow prev"><div class="arrow-box">&#x34;</div></a>',
				next: '<a class="unslider-arrow next"><div class="arrow-box">&#x35;</div></a>',
			}
			infinite: true
		});


		$('#paul-image').click(function(e){
			$('#paul-bouzanis').fadeIn();
		});

		$('#roch-image').click(function(e){
			$('#roch-brisson').fadeIn();
		});

		$('#donald-image').click(function(e){
			$('#donald-logie').fadeIn();
		});

		$('#william-image').click(function(e){
			$('#william-jussup').fadeIn();
		});

		$('.hidden-module .close-button').click(function(e){
			$('.hidden-module').fadeOut();
		});



		// Hiding label on signin/up
		$('.container .floating input').blur(function () {
	        var $label, $this, $value;
	        $this = $(this);
	        $label = $this.siblings('label');
	        $value = $this.val();
	        $label.removeClass('label-active');
	        if ($value !== '') {
	            return $this.addClass('input-notempty');
	        } else {
	            return $this.removeClass('input-notempty');
	        }
	    });

			// Lets smooth out incoming anchor links
			var urlHash = window.location.href.split("#")[1];
	    if (urlHash &&  $('#' + urlHash).length ) {
          $('html,body').animate({
              scrollTop: $('#' + urlHash).offset().top - 85
          }, 2000);
					console.log(urlHash);
			}

			// Lets smooth anchor link scrolling CC Chris Coyer
			$('a[href*="#"]:not([href="#"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html, body').animate({
		          scrollTop: target.offset().top - 85
		        }, 1000);
		        return false;
		      }
		    }
		  });


		$(window).scroll(checkStickyHeader);
		checkStickyHeader();
		function checkStickyHeader() {
			if($(document).scrollTop() > 200 ) {
				if(transparent) {
						transparent = false;
						$('.bottom-menu').addClass('is-sticky');
				}
				var topNum = 150 - $(document).scrollTop();
				if(topNum > -40){
					//$('header').css('top', topNum);
					//$('.admin-bar header').css('top', topNum + 32);
				}
				else {
					//$('header').css('top', '-40px');
					//$('.admin-bar header').css('top', '-8px');
				}

			} else {
				if( !transparent ) {
					transparent = true;
					//$('header').css('top', '0');
					$('.bottom-menu').removeClass('is-sticky');
				}
				//$('header').css('top', '0px');
				//$('.admin-bar header').css('top', '32px');
			}

		}


		// Toggle mobile menu
		$('#menu-toggle').click(function(){
			$('#mobile-menu-container').toggleClass('open');
		});

		$(document).keyup(function(e) {
        	if (e.keyCode === 27) {
				$('#mobile-menu-container').removeClass('open');
        	}
		});

	});

})(jQuery);
