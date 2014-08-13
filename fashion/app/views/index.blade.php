@extends('layout.template')
    @section('content')
	<div class="bg-content">
		<div class="container">
			<div class="margin-inside">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<ul class="anim-slider">
								<!-- Slide No1 -->
								<li class="anim-slide">
									<div id="img1"></div>
									<h1 id="slider">Welcome</h1>
									<h2 id="plugin">to</h2>
									<h3 id="license">the Freestyle fashion</h3>
									<h3 id="now">
										<div class="now1"></div>
										<input type="button" class="showmore" value="show me more">
										<div class="now2"></div>
									</h3>
								</li>

								
								<!-- Slide No2 -->
								<li class="anim-slide">
									<div id="img2"></div>
									<h3 id="todo">So what you can do ...</h3>
									
									<h3 id="bounce">order product</h3>
									<h4 id="bounceUp">buy</h4>
									<h4 id="bounceRight">or sell?</h4>
									
									<h3 id="fade">make your fashion dream</h3>
									<h4 id="fadeUp">become true</h4>
									<h4 id="fadeDown">here</h4>
									
									<h3 id="rotate">Good luck</h3>
									<h3 id="now2"></h3>
									<!-- 
									<h4 id="rotateRight">rotateInUpRight</h4>
									<h4 id="rotateLeft">rotateInUpLeft</h4> -->
								</li>

								<!-- Slide No3 -->
								<li class="anim-slide">
									<div id="img3"></div>
									<h3 id="come">
										<a href="#" class="type-15">
										<span>Come with us</span>
										<span> </span>
										<div class="clear-fix"></div>
										</a>
									</h3>
									
									<h3 id="more">you can become every..</h3>
									<h3 id="now3"></h3>
								</li>

								<!-- Arrows -->
								<nav class="anim-arrows">
									<span class="anim-arrows-prev">
										<i class="fa fa-angle-left fa-3x"></i>
									</span>
									<span class="anim-arrows-next">
										<i class="fa fa-angle-right fa-3x"></i>
									</span>
								</nav>
								<!-- Dynamically created dots -->
							</ul>
						</div>
					</div>
			<!-- Bower Depedencies -->
					<div class="row">
						<div class="col-md-3">
							<div class="side-bar">
								<div class="intro">
									<h2>shop of the top</h2>
									We will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special timeWe will help you have a special time
								</div>
								<div class="accordion" id="leftMenu">
									<div class="accordion-group">
				                        <div class="accordion-heading">
				                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#">
				                                  <span class="glyphicon glyphicon-home"></span> Home
				                            </a>
				                        </div>
				                    </div>
									@foreach($menus as $menu)
										<div class="accordion-group">
				                        <div class="accordion-heading">
				                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#{{$menu->Id}}">
				                                  <span class="glyphicon glyphicon-home"></span> {{$menu->Name}}
				                            </a>
				                        </div>
				                        <div id="{{$menu->Id}}" class="accordion-body collapse" style="height: 0px; ">
											<div class="accordion-inner">
				                        <?php getall($menu->Id) ?>
				                        	</div>
										</div>
				                    	</div>
									@endforeach
				                    <div class="accordion-group">
				                        <div class="accordion-heading">
				                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFour">
				                                <i class="fa fa-reorder"></i>accessories
				                            </a>
				                        </div>
				                        <!-- <div id="collapseFour" class="accordion-body collapse" style="height: 0px; ">
				                            <div class="accordion-inner">
				                                <ul>
				                                    <li>This is one</li>
				                                    <li>This is two</li>
				                                    <li>This is Three</li>
				                                </ul>                 
				                            </div>
				                         </div> -->
				                    </div>
				                </div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="content">
								<div class="wrap">
									<h2>Feature Product</h2>
									<div class="scrollbar">
										<div class="handle" style="transform: translateZ(0px) translateX(608px); width: 190px;">
											<div class="mousearea"></div>
										</div>
									</div>
									<div class="frame" id="cycleitems" style="overflow: hidden;">
										<ul id="da-thumbs" class="da-thumbs" class="clearfix" style="transform: translateZ(0px) translateX(-3648px); width: 6840px;">
											@foreach($features as $feature)
												<li class="active">
													<a href="#">
														<img src="{{asset('public/uploads')}}/{{$feature->Images}}" />
														<div><span>{{$feature->NameProduct}}</span>
															<input type="button" class="showmore" value="show me more">
														</div>
													</a>
												</li>
											@endforeach
										</ul>
									</div>
									<h2 style="margin-top:40px;">Newest Product</h2>
									<div class="new-content">
										<div class="row">
										@foreach($all_products as $all_product)
											<div class="col-sm-6 col-md-4">
										        <div class="thumbnail">
										          <img src="{{asset('public/uploads')}}/{{$all_product->Images}}" data-src="holder.js/100%x200" alt="100%x200" style="height: 265px; width: 100%; display: block;">
										          <div class="caption">
										            <h3>{{$all_product->NameProduct}}</h3>
										            <div class="summ">${{$all_product->Regular_Price}}</div>
										            <p><a href="#" class="btn btn-primary" role="button">Detail</a> <a href="#" class="btn btn-default" role="button">Add to Cart</a></p>
										          </div>
										        </div>
										     </div>
										@endforeach
									    </div>
									</div>
									<h2 style="margin-top:40px;">WOMAN</h2>
									<div class="new-content">
										<div class="row">
										@foreach($woman_products as $woman_product)
											<div class="col-sm-6 col-md-4">
										        <div class="thumbnail">
										          <img src="{{asset('public/uploads')}}/{{$woman_product->Images}}" data-src="holder.js/100%x200" alt="100%x200" style="height: 265px; width: 100%; display: block;">
										          <div class="caption">
										            <h3>{{$woman_product->NameProduct}}</h3>
										            <div class="summ">${{$woman_product->Regular_Price}}</div>
										            <p><a href="#" class="btn btn-primary" role="button">Detail</a> <a href="#" class="btn btn-default" role="button">Add to Cart</a></p>
										          </div>
										        </div>
										     </div>
										@endforeach
									    </div>
									</div>
									<h2 style="margin-top:40px;">MEN</h2>
									<div class="new-content">
										<div class="row">
										@foreach($men_products as $men_product)
											<div class="col-sm-6 col-md-4">
										        <div class="thumbnail">
										          <img src="{{asset('public/uploads')}}/{{$men_product->Images}}" data-src="holder.js/100%x200" alt="100%x200" style="height: 265px; width: 100%; display: block;">
										          <div class="caption">
										            <h3>{{$men_product->NameProduct}}</h3>
										            <div class="summ">${{$men_product->Regular_Price}}</div>
										            <p><a href="#" class="btn btn-primary" role="button">Detail</a> <a href="#" class="btn btn-default" role="button">Add to Cart</a></p>
										          </div>
										        </div>
										     </div>
										@endforeach
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
function getall($loaicha){
	$sql = DB::table('fs_category')->where('Id_parent',$loaicha)->get();
?>
			@foreach($sql as $ql)
			<ul>
			<li>{{$ql->Name}}</li>
			<?php getall($ql->Id) ?>
			</ul>
			@endforeach
<?php } ?>
@endsection
<!-- function menu de quy -->

