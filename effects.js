$(function()
	{
		var stickynavtop = $('#stickynav').offset().top;

		var stickynavfunc = function()
		{
			var gotop = $(window).scrollTop();

			if (gotop > stickynavtop)
				{
					$('#stickynav').css({'position': 'fixed', 'top':0, 'width':1000});
				}
				else
				{
					$('#stickynav').css({'position': 'relative'});
				}
		};

		// Kör allt som en funktion när sidan laddas
		stickynavfunc();

		// Kör funktionen varje gång vi börja scrolla på nytt
		$(window).scroll(function()
			{
				stickynavfunc();
			});
	})();