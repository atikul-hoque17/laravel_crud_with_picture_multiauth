@extends('frontView.master')

@section ('title_area')
a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: Soft-theme
@endsection


<style type="text/css">
a.single-item {
    color: #19c880 !important;
    font-weight: bold !important;
    /* background: #19c880 !important; */
    padding: 10px 18px !important;
}
a.single-item:hover {
    
    background: #0a7147  !important;
    color: #fff !important;
}
.men-thumb-item .pro-image-front {
    opacity: 1;
    visibility: visible;
    width: 259px !important;
    height: 280px !important;
}
</style>
@section ('css_js')

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ asset('frontend') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{ asset('frontend') }}/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{ asset('frontend') }}/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="{{ asset('frontend') }}/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{ asset('frontend') }}/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{ asset('frontend') }}/js/jquery.easing.min.js"></script>

@endsection


@section('banner')

<div class="banner-grid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="{{ asset('frontend') }}/images/soft_bg4.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="{{ asset('frontend') }}/images/soft_bg3.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="{{ asset('frontend') }}/images/soft_bg4.jpg" alt="Dummy Image" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
					<ul class="script-group">
						<li><div class="inner-script"><img class="img-responsive" src="{{ asset('frontend') }}/images/soft-fashion1.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="{{ asset('frontend') }}/images/soft-fashion2.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="{{ asset('frontend') }}/images/soft-fashion3.jpg" alt="Dummy Image" /></div></li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="{{ asset('frontend') }}/images/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="{{ asset('frontend') }}/images/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="{{ asset('frontend') }}/images/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="{{ asset('frontend') }}/images/btn_next.png" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="{{ asset('frontend') }}/js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>

@endsection

@section("products")

<!-- <div class="soft_new_arrivals">
	<div class="container">
		<h3><span>new </span>arrivals</h3>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
		<div class="new_grids">
			<div class="col-md-4 new-gd-left">
				<img src="{{ asset('frontend') }}/images/soft-men22.jpg" alt="soft-men22" />
				<div class="wed-brand simpleCart_shelfItem">
					<h4>Wedding Collections</h4>
					<h5>Flat 50% Discount</h5>
					<p><i>$250</i> <span class="item_price">$500</span><a class="item_add soft-hvr-outline-out button2" href="#">add to cart </a></p>
				</div>
			</div>
			<div class="col-md-4 new-gd-middle">
				<div class="new-levis">
					<div class="mid-img">
						<img src="{{ asset('frontend') }}/images/levis1.png" alt="levis1" />
					</div>
					<div class="mid-text">
						<h4>up to 40% <span>off</span></h4>
						<a class="soft-hvr-outline-out button2" href="product.html">Shop now </a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="new-levis">
					<div class="mid-text">
						<h4>up to 50% <span>off</span></h4>
						<a class="soft-hvr-outline-out button2" href="product.html">Shop now </a>
					</div>
					<div class="mid-img">
						<img src="{{ asset('frontend') }}/images/soft-shop.jpg" alt="soft-shop" />
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 new-gd-left">
				<img src="{{ asset('frontend') }}/images/soft-men21.jpg" alt="soft-men21" />
				<div class="wed-brandtwo simpleCart_shelfItem">
					<h4>Spring / Summer</h4>
					<p>Shop Men</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div> -->
<!-- //content -->

<!-- content-bottom -->

<!-- <div class="content-bottom">
	<div class="col-md-7 content-lgrid">
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="{{ asset('frontend') }}/images/p1.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
									<h4>Mobiles</h4>
									<span class="separator"></span>
									<p><span class="item_price">$500</span></p>
									<span class="separator"></span>
									<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
						</div>
					</div>
			</div>
		</div>
		<div class="col-sm-6 content-img-right">
			<h3>Special Offers and 50%<span>Discount On</span> Mobiles</h3>
		</div>
		
		<div class="col-sm-6 content-img-right">
			<h3>Buy 1 get 1  free on <span> Branded</span> Watches</h3>
		</div>
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="{{ asset('frontend') }}/images/a10.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
							<h4>Watches</h4>
							<span class="separator"></span>
							<p><span class="item_price">$250</span></p>
							<span class="separator"></span>
							<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
						</div>
					</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-5 content-rgrid text-center">
		<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="{{ asset('frontend') }}/images/a9.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
									<h4>Shoes</h4>
									<span class="separator"></span>
									<p><span class="item_price">$150</span></p>
									<span class="separator"></span>
									<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
						</div>
					</div>
			</div>
	</div>
	<div class="clearfix"></div>
</div> -->
<!-- //content-bottom -->
<!-- product-nav -->

<div class="product-easy">
	<div class="container">
		
		<script src="{{ asset('frontend') }}/js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>New Collction</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Top Sale</span></li> 
					
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Discount</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
					



					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
					
						<!-- // special pro start from here -->
					@foreach( $newproduct as $nproduct) 	
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{ asset($nproduct->pic) }}" alt="" class="pro-image-front">
									<img src="{{ asset('frontend') }}/images/logo.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ url('/product/view/product/'. $nproduct->id) }}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="{{ url('/product/view/product/'. $nproduct->id) }}">{{ $nproduct->productName }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">৳{{ $nproduct->price }}</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
					@endforeach

						<!-- // special pro end here -->
					
						
						<div class="clearfix"></div>		
						{{ $newproduct->onEachSide(3)->links() }}				
					</div>

					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						
					<!-- 	///// letest product start from here -->
					 @foreach( $topsale as $tproduct) 	
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{ asset($tproduct->pic) }}" alt="" class="pro-image-front">
									<img src="{{ asset('frontend') }}/images/logo.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ url('/product/view/product/'. $nproduct->id) }}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="{{ url('/product/view/product/'. $nproduct->id) }}">{{ $tproduct->productName }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">৳{{ $tproduct->price }}</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
					@endforeach

						<!-- 	///// letest product end from here -->

				
						<div class="clearfix"></div>



					</div>


					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
						
						<!-- // collection start from here -->

						@foreach( $discount as $dproduct) 	
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{ asset($dproduct->pic) }}" alt="" class="pro-image-front">
									<img src="{{ asset('frontend') }}/images/logo.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ url('/product/view/product/'. $dproduct->id) }}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="{{ url('/product/view/product/'. $nproduct->id) }}">{{ $dproduct->productName }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">৳{{ $dproduct->price }}</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						@endforeach

						<!-- // collection end from here -->

								
						<div class="clearfix"></div>		
					</div>	
				</div>	
			</div>
		</div>
	</div>
</div>

@endsection

