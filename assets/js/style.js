!function(i){
	"use strict";
	i("body").on("input propertychange",
		
	function(){i(this).addClass("floating-label-form-group-with-focus")}).on("blur",
				function(){i(this).removeClass("floating-label-form-group-with-focus")});
			if(i(window).width()>992){var o=i("#mainNav").height();i(window).on("scroll",{
				previousTop:0},
				function(){var s=i(window).scrollTop();s<this.previousTop?s>0&&i("#mainNav")
				.hasClass("is-fixed")?i("#mainNav").addClass("is-visible"):i("#mainNav")
				.removeClass("is-visible is-fixed"):s>this.previousTop&&(i("#mainNav")
				.removeClass("is-visible"),s>o&&!i("#mainNav")
				.hasClass("is-fixed")&&i("#mainNav")
				.addClass("is-fixed")),this.previousTop=s})}}(jQuery);