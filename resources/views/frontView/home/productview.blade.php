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
<style type="text/css">
  /* Using the ITCSS (http://itcss.io/) architecture for CSS */


/* 1. Settings - Preprocessors variables, fonts, imports, etc. */

@import url(https://fonts.googleapis.com/css?family=Poppins);
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/* 2. Tools - mixins */


/* 3. Generic - very generic CSS rules */

* {
  box-sizing: border-box;
  font-family: Montserrat;
  font-size: 14px;
}

::selection{background-color: white;}

i {
  font-size: 20px;
}


/* 4. Elements - HTML Elements of the page h1-h6, etc. */

body {
  margin: 0;
  padding: 0;
  background-color: #222;
  color: #666;
}

a {
  color: #235ba8;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

input {}

input:focus {}

input[type="submit"],
input[type="button"] {}


/* 5. Objects - wrappers, cards, etc. */

.random-background {
  background-color: #36a88e;
  /*top colour*/
  background-image: -webkit-linear-gradient(top, #36a88e, #f35b47);
  background-image: -moz-linear-gradient(top, #36a88e, #f35b47);
  background-image: -o-linear-gradient(top, #36a88e, #f35b47);
  background-image: linear-gradient(to bottom, #36a88e, #f35b47);
  height: 200vh;
  width: 100vw;
}

.itemlist{ 
  max-width:1024px;  
  margin:auto; 
  padding:20px;
  display:flex;
  flex-wrap: wrap;
}

.itemlist-item-wrapper{width: calc(90% / 3); display:inline-block; font-size: 20px !important; margin:1% 0.5% 0.5% 0.5%; background-color:white; padding:10px;
box-sizing: content-box;}

@media(max-width: 800px){
  .itemlist{ width:auto; margin:auto; padding:0;}
  .itemlist-item-wrapper{width:48%; margin:auto; margin-bottom:0.5%; padding:30px;}
}

@media(max-width: 600px){
  .itemlist{ width:auto; margin:auto; padding:0;}
  .itemlist-item-wrapper{width:auto; margin:auto; margin-bottom:2%;}
}


.lightbox-blanket {
  background-color: rgba(30, 30, 30, 0.9);
  display: block;
  height: 100vh;
  position: fixed;
  overflow-y: scroll;
  top: 0;
  width: 100vw;
  z-index: 20;
}

.pop-up-container {
  height: 100%;
  width: 62%;
  display: table;
  margin: auto;
  position: static;
}

@media (max-width:400px) {
  .pop-up-container {
    width: 96%;
    margin: 2%;
  }
}

.pop-up-container-vertical {
  height: 100%;
  vertical-align: middle;
  display: table-cell;
}

.pop-up-wrapper {
  -webkit-box-shadow:0px 0px 10px 1px rgba(0, 0, 0, 0.45);
  -moz-box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.45);
  box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.45);
  display: block;
  margin: 20px auto;
  width: auto;
  position: relative;
}

.pop-up-wrapper {
  background-color: white;
  display: block;
  padding: 50px;
}

.go-back {
  position: absolute;
  left: 10px;
  top: 10px;
  color:#222;
  width: 0;
  height: 0;
  border-top: 60px solid #CAE00D;
  border-right: 60px solid transparent;
}

.go-back i {
  font-size:20px;
  position: relative;
  top: -52px;
  left: 10px;
}

.product-details {
  max-width: 600px;
}

.product-left {
  display: inline-block;
  padding-right: 4%;
  vertical-align: top;
  width: 46%;
}

.product-right {
  display: inline-block;
  vertical-align: top;
  width: 49%;
}

.product-bottom{border-top:1px solid #ccc; position:relative; padding-top:20px;}

@media (max-width:650px){
  .product-left, .product-right, .product-bottom{
    width:100%;}
  .product-left{padding-right:0;}
  .product-info{display:inline-block; width:60%; vertical-align:top;}
   .product-image{display:inline-block; width:39%; vertical-align:top;}
}

@media (max-width:512px){
  .product-info, .product-image{width:100%;}
}

.product-manufacturer {
  color:#222;
  font-size: 35px;
  font-weight: bold;
  line-height: 1;
  margin: -2px;
}

.product-title {
  font-size: 28px;
  color: #888;
}

.product-price {
  color:#222;
  font-size: 24px;
  letter-spacing: 1px;
}

.product-price-cents {
  text-decoration: underline;
  vertical-align: top;
  padding-left:3px;
}

.product-image {
  padding: 10px 10px 0 10px;
}

.product-image img {
  width: 100%;
    height: 100%;
    object-fit: contain;
    height: 295px;
}

.product-description {line-height:1.5;}

.product-available {
  margin-top: 25px;
}

.product-rating{
  margin-top:25px;
}

i.fa-star{color:#aaa; display:inline-block;}
i.fa-star.rating{color: rgb(232, 217, 31);}
.product-rating-details{display:inline-block; padding-left: 10px;}
@media(max-width:515px){
  .product-rating-details{padding-left:0;}
}
.product-extended {
  color: #235ba8;
  padding-left: 5px;
}
.product-quantity{margin-top:25px;
  margin-bottom:25px;}

.product-checkout{position:absolute; left:0;font-size: 12px; text-transform: uppercase;}
.product-checkout-actions{position:absolute; right:0;}
.product-checkout-total, .product-checkout-total-amount{font-size: 20px; color: #C17A41;}
.product-checkout-total * {display:inline-block;}
.product-checkout-actions{}

/* 6. Components - buttons, menus, images, etc. */
.product-quantity-label{text-transform:uppercase;}
.product-quantity *{display:inline-block;}

#product-quantity-input{background-color: #cae00d;border: none; width:auto; text-align: center;}
.product-quantity-subtract, .product-quantity-add{margin-left: 20px; padding-left:5px; padding-right: 5px;}
.product-quantity-subtract{margin-right:20px;}


.toast{
  position: fixed;
  top: -50px;
  left: calc(50vw - 50px);
  z-index:25;
  padding:5px 10px;
  border-radius: 15px;
}

.toast-success{
  background-color: green;
  color:white;
  font-size: 9pt;
}

.toast-transition{
  top: calc(50px);
  transition:top 1s;
}


/* 7. Trumps - text helpers, often !important */

.hidden {
  display: none;
}
.product-quantity label.product-quantity-label {
    width: 100px;
}

.item-info-product {
    text-align: left !important;
    /* margin: 20px 0 0; */
}
a.single-item {
    color: #fff !important;
    font-weight: bold !important;
    background: #6aa82c  !important; 
    padding: 10px 18px !important;
}
</style>

@section("products")


<div class="pop-up-container">
      <div class="pop-up-container-vertical">
        <div class="pop-up-wrapper">
          <div class="go-back" onclick="GoBack();"><i class="fa fa-arrow-left"></i>
          </div>
          <div class="product-details">
            <div class="product-left">
              <div class="product-info">
                <div class="product-manufacturer">{{$productsbyId->productName}}
                </div>
               
               
              </div>
              <div class="product-image">
                <img src="{{ asset($productsbyId->pic)}}">
              </div>
            </div>
            <div class="product-right">
              <div class="product-description">
               {{$productsbyId->Description}}
              </div>
              

             <div class="product-quantity">
                <label for="product-quantity-input" class="product-quantity-label">Price</label>
                <div class="product-quantity-subtract">
                </div>
                <div>
                  <input type="text" disabled="" id="product-quantity-input" placeholder="0" value="{{$productsbyId->price}}">
                </div>
               
              </div>
              <div class="product-quantity">
                <label for="product-quantity-input" class="product-quantity-label">Quantity</label>
                <div class="product-quantity-subtract">
                </div>
                <div>
                  <input type="number"  id="product-quantity-input" placeholder="0" value="">
                </div>
               
              </div>
               <div class="product-quantity">
                <label for="product-quantity-input" class="product-quantity-label">Status</label>
                <div class="product-quantity-subtract">
                </div>
                <div>
                  <input type="text" disabled="" id="product-quantity-input" placeholder="0" value="{{ ($productsbyId->publicationStatus == 1)? 'Available' : 'Unavailableo'  }}">
                </div>
               
              </div>

              <div class="item-info-product ">
					<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>								
	          </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>



@endsection

