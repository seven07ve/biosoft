jQuery ->
#	$(".navbar-nav li").click ->
#		$(this).siblings().removeClass "active"
#		$(this).addClass "active"
#		return
#	$('a[href="' + this.location.pathname + '"]').parent().addClass('active');
#	$(".navbar a:contains('INICIO')").parent().addClass('active')

#	$(".nav a").click ->
#		url = window.location.href;
#		$('.nav a[href="'+url+'"]').parent().addClass('active');
#	$(".navbar li").click (e) ->
#		$(".navbar li.active").removeClass "active"
#		$this = $(this)
#		$this.addClass "active"  unless $this.hasClass("active")
##		e.preventDefault()
#		return

	$(".slider").fractionSlider
		'fullWidth': 			true,
		'responsive':           true,
		'dimensions':           '1000,400'
