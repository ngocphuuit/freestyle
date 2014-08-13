<html>
<head>
	<title>Thời trang</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<noscript>{{HTML::style('public/css/noJS.css');}}</noscript>
	<!-- CSS -->
	{{HTML::style('public/css/horizontal.css');}}
	{{HTML::style('public/css/bootstrap.css');}}
	{{HTML::style('public/css/font-awesome.css');}}
	{{HTML::style('public/css/jquery.animateSlider.css');}}
	{{HTML::style('public/css/jquery.mCustomScrollbar.css');}}
	{{HTML::style('public/css/normalize.css');}}
	{{HTML::style('public/css/demo1.css');}}
	{{HTML::style('public/css/style.css');}}

	<!-- JS -->
	{{HTML::script('public/js/modernizr.custom.97074.js');}}
	{{HTML::script('public/js/ga.js');}}
	{{HTML::script('public/js/injected.js');}}
	{{HTML::script('public/js/jquery-1.11.1.min.js');}}
	{{HTML::script('public/js/bootstrap.js');}}

	
</head>
<body>
	<div class="headrow">
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
				        <div class="nav-item">
				        	Freestyle
				        </div>
				        <div class="nav-item">
				        	<div class="nav-form">
				        		<form class="navbar-form navbar-left inline" role="search">
						            <div class="input-group">
					                    <input type="text" class="form-control" placeholder="Search">
					                    <span class="input-group-btn">
					                     	<button type="submit" class="btn btn-search">Search</button>
					                    </span>
					                </div>
						        </form>
				        	</div>
				        </div>
				        <div class="nav-item">
				        	<div class="navbar-form navbar-left">
				        		<div class="btn-group">
								    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								      Shopping Cart
								      <span class="caret"></span>
								    </button>
								    <ul class="dropdown-menu" role="menu">
								      <li><a href="#">Detail</a></li>
								      <li><a href="#">Clear</a></li> <!-- delete product save in shopping cart -->
								    </ul>
								 </div>
								 <div class="btn-group">
								    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								    	<span class="glyphicon glyphicon-user"></span>
									      Login
									     <span class="caret"></span>
								    </button>
								    <ul class="dropdown-menu" role="menu">
								      <li><a href="#">Sign up</a></li>
								      <li><a href="#">Sign in</a></li> <!-- delete product save in shopping cart -->
								    </ul>
								 </div>
				        	</div>
				        </div>
				    </div>
				</div>
		    </div>
		</div>
	</div>
	<!-- end header now is slider -->


	@yield('content')


	<div class="footer">
		<div class="margin-foot">
			<div class="bg-foot">
				<h3>Freestyle</h3>
			</div>
		</div>
	</div>



<!-- end function menu de quy -->

</body>
</html>
		{{HTML::script('public/js/jquery.min.js');}}
		{{HTML::script('public/js/modernizr.js');}}
		{{HTML::script('public/js/jquery.animateSlider.js');}}
		{{HTML::script('public/js/plugins.js');}}
		{{HTML::script('public/js/sly.min.js');}}
		{{HTML::script('public/js/horizontal.js');}}
		{{HTML::script('public/js/jquery.hoverdir.js');}}
	
		<script type="text/javascript">
			$(function() {

				$(' #da-thumbs > li ').each( function() { $(this).hoverdir({
					hoverDelay : 75
				}); } );

			});
		</script>

		<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script>
		(function($){
			$(window).load(function(){
					$(".summ").mCustomScrollbar({
						scrollButtons:{
							enable:true
						}
					});
					$(".intro").mCustomScrollbar({
						scrollButtons:{
							enable:true
						}
					});
				});
			})(jQuery);
		</script>
		<script>
		

		 $(".anim-slider").animateSlider(
		 	{
		 		autoplay	:true,
		 		interval	:5000,
		 		animations 	: 
				{
					0	: 	//Slide No1
					{
						"#img1"	:
						{
							show   	  : "bounceIn",
							hide 	  : "flipOutX",
							delayShow : "delay1s"
						},
						h1	: 
						{
							show   	  : "bounceIn",
							hide 	  : "flipOutX",
							delayShow : "delay2s"
	 					},
	 					h2:
	 					{
	 						show 	  : "fadeInUpBig",
							hide 	  : "fadeOutDownBig",
							delayShow : "delay1-5s"
	 					},
	 					h3 	:
	 					{
							show   	  : "bounceInRight",
							hide 	  : "fadeOutRightBig",
							delayShow : "delay2-5s"
	 					},	
	 					"#now"  :
						{
							show 	  : "bounceIn",
							hide 	  : "flipOutY",
							delayShow : "delay10s"
						}
					},
					1	: //Slide No2
					{	
						"#img2"	:
						{
							show   	  : "rotateInUpRight",
							hide 	  : "rotateOutDownLeft",
							delayShow : "delay0-5s"
						},
						"#todo":
						{
							show 		: "fadeIn",
							hide 		: "fadeOut",
							delayShow   : "delay1-5s"
						},
						"#bounce" 	:
						{
							show 	 	: "bounceIn",
							hide 	 	: "bounceOut",
							delayShow 	: "delay2-5s"
						},
						"#bounceUp":
						{
							show 	 	: "bounceInDown",
							hide 	 	: "bounceOutLeft",
							delayShow 	: "delay2-5s"
						},
						"#bounceRight":
						{
							show 	 	: "bounceInRight",
							hide 	 	: "bounceOutRight",
							delayShow 	: "delay3s"
						},
						"#fade" :
						{
							show 	 	: "fadeInLeft",
							hide 	 	: "fadeOutLeft",
							delayShow 	: "delay3-5s"
						},
						"#fadeUp":
						{
							show 	 	: "fadeInUpBig",
							hide 	 	: "fadeOutUpBig",
							delayShow 	: "delay4s"
						},
						"#fadeDown":
						{
							show 	 	: "fadeInDownBig",
							hide 	 	: "fadeOutDownBig",
							delayShow 	: "delay4-5s"	
						},
						"#rotate" :
						{
							show 	 	: "rotateIn",
							hide 	 	: "rotateOut",
							delayShow 	: "delay5-5s"
						},
						"#now2"  :
						{
							show 	  : "bounceIn",
							hide 	  : "flipOutY",
							delayShow : "delay10s"
						}
						// },
						// "#rotateRight" :
						// {
						// 	show 	 	: "rotateInUpRight",
						// 	hide 	 	: "rotateOutDownRight",
						// 	delayShow 	: "delay6s"
						// },
						// "#rotateLeft" :
						// {
						// 	show 	 	: "rotateInUpLeft",
						// 	hide 	 	: "rotateOutDownLeft",
						// 	delayShow 	: "delay6-5s"
						// }
					},
					2	: //Slide No3
					{
						"#img3"	:
						{
							show 	  : "flipInX",
							hide 	  : "flipOutX",
							delayShow : "delay0-5s"
						},
						"#come"	:
						{
							show 	  : "flipInY",
							hide 	  : "flipOutY",
							delayShow : "delay2-5s"
						},
						"#more"  :
						{
							show 	  : "bounceIn",
							hide 	  : "flipOutY",
							delayShow : "delay3-5s"
						},
						"#now3"  :
						{
							show 	  : "bounceIn",
							hide 	  : "flipOutY",
							delayShow : "delay10s"
						}
					}
				}
		 	});
		
		var _gaq=[['_setAccount','UA-838758-7'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>