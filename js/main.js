
;(function($){
	$(document).ready(function(){
		var getHeight = $('.main__inner').height(),
			getSidebar = $('.main__inner .sidebar'),
			screenWidth = $(document.body).width();

			if(screenWidth > 397 ){
				getSidebar.css({
					height : getHeight
				});
			}

		var ratingWrap = $('.rating_wrap'),
			raeingA = ratingWrap.children('.rating');

			raeingA.on('click', function(ev){
				$(this).addClass('activer');
				$(this).prevAll().addClass('activer');

				if($(this).nextAll().hasClass('activer')){
					$(this).nextAll().removeClass('activer');
				}
				ev.preventDefault();
			});


		var recomSec = $('.recomend_sec'),
			target = recomSec.find('.btn_no');

			target.on('click', function(e){
				if(!$(this).hasClass('.btn_no')) {
					$(this).removeClass('btn_no').siblings().addClass('btn_no');
				}
				


				e.preventDefault();
			});


			$(window).load(function(){
			var heights = [];

			$singleItems = $('.all_adds .add_box');

			$singleItems.each(function(){
				var height = $(this).outerHeight(true);
				heights.push(height);
			});

		    Array.prototype.getMax = function() {
		      return Math.max.apply(null, this);
		    };

		    var calHeight = heights.getMax();

		    $singleItems.css('height', calHeight+'px');
		});

			var dataName = $('.data-name'),
				dropdownUl = $('.form-group ul.dropdown-menu');

			dropdownUl.find('li a').click(function(){

				var linkText = $(this).text();
				console.log(linkText);
				localStorage.setItem('atext', linkText);
			});




	});
})(jQuery);


