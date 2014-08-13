@extends('layout.template')
@section('content')
<div class="container" style="background: white;">
	<h4 style="margin-top:40px;">Product Detail</h2>
	<div class="product_info">
		<div class="product row">
			<div class="img_product col-md-4">
			<div class="img_feature">
				<img src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" width="350px" height="450px" alt="">
			</div>
			<div class="thumb_slide">
				<p style="text-align: center;">
				<img src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" width="50px" height="50px" alt="">
				<img src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" width="50px" height="50px" alt="">
				<img src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" width="50px" height="50px" alt="">
				<img src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" width="50px" height="50px" alt="">
				<img src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" width="50px" height="50px" alt="">
				<img src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" width="50px" height="50px" alt="">
				</p>
			</div>
			</div><!-- end img_product -->
			<div class="info col-md-5" style="background: gray;">

				<div class="title_product">
					<h2>GIAY CHO NAM</h2>
				</div>

				<div class="detail">
					<div class="price">
						<span>Gia:</span>
						<div>100$</div>
					</div>
					<div class="addtocard">
						So Luong:
					</div>
					<div class="rating">Danh Gia</div>
				</div><!-- end detail -->
			</div><!-- end info -->

			<div class="slide col-md-3">
				<img src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" width="250px" height="500px" alt="">
			</div>
		</div><!-- end product row -->
	</div><!-- End_product info -->

	<div class="comments">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist" id="myTab">
		  <li class="active"><a href="#Info" role="tab" data-toggle="tab">Home</a></li>
		  <li><a href="#comment" role="tab" data-toggle="tab">Profile</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		  <div class="tab-pane active" id="Info">
		  <p style="text-align: center;">
			<img style="text-align: center;" class="img-rounded" src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" width="300px" height="500px" alt=""> <br>
			<img class="img-rounded" src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" width="300px" height="500px" alt=""> <br>
			<img class="img-rounded" src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" width="300px" height="500px" alt=""> <br>
			<img class="img-rounded" src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" width="300px" height="500px" alt=""> <br>
			</p>
		  </div>
		  <div class="tab-pane" id="comment">...</div>
		</div>
	</div>

	<script>
		$('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})
	</script>

	<div class="related_product">
		<h2 style="margin-top:40px;">Related Products</h2>
		<div class="new-content">
			<div class="row">
				@for($i = 0; $i<6 ; $i++)
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="{{asset('public/uploads/0809038giay_nam_don_gian_4__1.280.420.jpg')}}" data-src="holder.js/100%x200" alt="100%x200" style="height: 265px; width: 100%; display: block;">
							<div class="caption">
								<h3>Product</h3>
								<div class="summ">10</div>
								<p><a href="#" class="btn btn-primary" role="button">Detail</a> <a href="#" class="btn btn-default" role="button">Add to Cart</a></p>
							</div>
						</div>
					</div>
				@endfor
			</div>
		</div>
	</div><!-- end related_product -->
</div>
@endsection