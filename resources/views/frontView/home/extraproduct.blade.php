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


@section("products")

<div class="product-easy">
	<div class="container">
		
		<script src="http://localhost/blog/public/frontend/js/easyResponsiveTabs.js" type="text/javascript"></script>
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
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>{{ $titlename }}</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
					<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Latest Designs</h2>

					<div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
					



					  @foreach( $products as $product) 	

						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{ asset($product->pic) }}" alt="" class="pro-image-front">
									<img src="{{ asset('frontend') }}/images/logo.png"" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ url('/product/view/product/'. $product->id) }}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="{{ url('/product/view/product/'. $product->id) }}">{{ $product->productName }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">৳{{ $product->price }}</span>
										<del>1000.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>

						@endforeach

						
						
					
						
						<div class="clearfix"></div>						
					</div>


						<div class="clearfix"></div>		
					</div>	
				</div>	
			</div>
		</div>
	</div>
</div>

@endsection

