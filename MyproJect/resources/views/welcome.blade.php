
<!DOCTYPE html>
<html>
<head>
	<title>HOME - THẾ GIỚI THƯƠNG MẠI ĐIỆN TỬ - T&P Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="plugins/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fruid">

		<div id="header">
			<div class="header-top">
				<div class="container">
					<ul class="list-inline">
						<!-- <li><span class="glyphicon glyphicon-cloud"></span> 15°C</li> -->
						<li>
							<a href="mailto:ngoctai.dev@gmail.com"><span class="glyphicon glyphicon-envelope"></span> ngoctai.dev@gmail.com</a>
						</li>
						<li><span class="glyphicon glyphicon-phone-alt"></span> (+84) 915 981 110</li>
					</ul>
				</div>
			</div>

			<div class="header-center">
				<div id="banner">
					<div class="container">
						<div class="row">
							<div class="col-sm-3 left text-center">
								<a href="#">
									<img src="plugins/img/logo.png" class="logo">
								</a>
							</div>
							<div class="col-sm-5 center">

							</div>
							<div class="col-sm-4 right">
								<img src="plugins/img/banner-right.png">
							</div>
						</div>
					</div>
				</div>
				<div id="menu-hr">
					<div class="container-fruid">
						<nav class="navbar navbar-default">
						  <div class="container">
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span> 
						      </button>
						      	<div class="dropdown">
						      		<a href class="navbar-brand dropdown-toggle text-uppercase text-primary" data-toggle="dropdown">
						      			<!-- <i class="fa fa-bars fa-lg"></i> -->
						      			Category <span class="caret"></span>
						      		</a>
						      		<ul class="dropdown-menu">
						            <li><a href="product.html#headphone"><i class="fa fa-headphones fa-lg"></i> Headphone</a></li>
						            <li><a href="product.html#mobile"><i class="fa fa-mobile fa-2x"></i> Mobile</a></li>
						            <li><a href="product.html#laptop"><i class="fa fa-laptop fa-lg"></i> Laptop</a></li>
						          </ul>
						      	</div>
						    </div>
						    <div class="collapse navbar-collapse" id="myNavbar">
						      <ul class="nav navbar-nav text-uppercase">
						        <li class="active"><a href="#">Home</a></li>
						        <li><a href="product.html">Product</a></li>
						        <li><a href data-toggle="modal" data-target="#modalContact">Contact</a></li> 
						        <li><a href data-toggle="modal" data-target="#modalPromotion">Code</a></li>
						        <li>
						        	<form method="post" class="navbar-form">
												<div class="input-group search-box">
													<input type="text" class="form-control" placeholder="Search here...">
													<span class="input-group-addon btn btn-primary"> <i class="glyphicon glyphicon-search"></i> </span>
												</div>
											</form>
						        </li>
						      </ul>
						      <ul class="nav navbar-nav navbar-right">
						        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						      </ul>
						    </div>
						  </div>
						</nav>
					</div>
				</div>
			</div>
		</div> <!-- header -->

		<div id="content">

			<!-- Modal Contact -->
			<div id="modalContact" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Contact Message</h4>
			      </div>
			      <div class="modal-body">
			        <p><i class="fa fa-phone-square fa-lg"></i> (+84) 915 981 110 (Administrator)</p><br>
			        <p><i class="fa fa-phone-square fa-lg"></i> (+84) 915 981 110 (Accountant)</p><br>
			        <p><i class="fa fa-phone-square fa-lg"></i> (+84) 915 981 110 (Customer care)</p><br>
			        <p><i class="fa fa-phone-square fa-lg"></i> (+84) 915 981 110 (Facilitators)</p>
			      </div>
			      <div class="modal-footer">
			      	<a class="btn btn-default" href="index.html">Home</a>
			        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
			      </div>
			    </div>

			  </div>
			</div>

			<!-- Modal Promotion -->
			<div id="modalPromotion" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Promotion Message</h4>
			      </div>
			      <div class="modal-body">
			        <p>November Code</p>
			        <div class="row">
			        	<div class="col-sm-5"><i class="fa fa-code"></i> 30% off all products over $20 </div>
			        	<div class="col-sm-7"><input type="code" class="form-control" value="ZDEA11GIF"></div>
			        </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>

			  </div>
			</div>


			<!-- Modal Mobile Product 1 -->
			<div id="mobile-product-1" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-body">
			      	<button type="button" class="close" data-dismiss="modal">&times;</button>
			        <div class="row">
			        	<div class="col-md-6 col-sm-6">
			        		<div class="product-img">
			        			<div id="slideProduct" class="carousel slide" data-ride="carousel" data-interval="false">
									    
									    <div class="carousel-inner">
									      <div class="item active">
									        <img src="plugins/img/mobile-6.png">
									      </div>

									      <div class="item">
									        <img src="plugins/img/mobile-5.png">
									      </div>
									    
									      <div class="item">
									        <img src="plugins/img/mobile-4.png">
									      </div>
									    </div>

									    <a class="btn left" href="#slideProduct" data-slide="prev">
									      <span class="glyphicon glyphicon-chevron-left"></span>
									    </a>
									    <a class="btn right" href="#slideProduct" data-slide="next">
									      <span class="glyphicon glyphicon-chevron-right"></span>
									    </a>
									  </div>
			        		</div>
			        	</div>
			        	<div class="col-md-6 col-sm-6">
			        		<div class="caption">
			        			<div class="name">
			        				<h2>iPhone 6S 32GB</h2>
			        			</div>
			        			<div class="rating">
			        				<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i> 
											(20)
			        			</div>
			        			<div class="price">
			        				<i class="fa fa-usd"></i> <strong>512.00</strong>
			        			</div>
			        			<p>
			        				Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
			        			</p>
			        			<div class="control">
			        				<div class="control-quantity">
			        					<button class="btn btn-lg btn-default" onclick="minusProductQuantity()"><i class="fa fa-minus"></i></button>
			        					<input type="text" id="quantity" value="1" class="quantity">
			        					<button class="btn btn-lg btn-default" onclick="plusProductQuantity()"><i class="fa fa-plus"></i></button>
			        				</div>
			        				<button class="btn btn-lg btn-primary" onclick="alert('Add to cart successful!')">
			        					<i class="fa fa-cart-plus fa-lg"></i> Add to cart
			        				</button>
			        			</div>
			        		</div>
			        	</div>
			        </div>
			      </div>
			    </div>

			  </div>
			</div>

			<div class="calltoaction">
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			    
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <div class="carousel-inner">
			      <div class="item active">
			        <img src="plugins/img/slide-1.png">
			        <div class="carousel-caption d-none d-md-block">
						    <a href="product.html" class="btn btn-lg btn-shop text-uppercase">Shop Now</a>
						    <h3>Big Vauncher</h3>
						    <p>Click to Shop Now to go to SHOPPING NOW...</p>
						  </div>
			      </div>

			      <div class="item">
			        <img src="plugins/img/slide-2.png">
			        <div class="carousel-caption d-none d-md-block">
						    <a href="product.html" class="btn btn-lg btn-shop text-uppercase">Shop Now</a>
						    <h3>Big Vauncher</h3>
						    <p>Click to Shop Now to go to SHOPPING NOW...</p>
						  </div>
			      </div>
			    
			      <div class="item">
			        <img src="plugins/img/slide-3.png">
			        <div class="carousel-caption d-none d-md-block">
						    <a href="product.html" class="btn btn-lg btn-shop text-uppercase">Shop Now</a>
						    <h3>Big Vauncher</h3>
						    <p>Click to Shop Now to go to SHOPPING NOW...</p>
						  </div>
			      </div>
			    </div>

			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>
			</div> <!-- calltoaction -->

			<div class="categories">
				<div class="row">
					<div class="container">
						<p class="title">
							<i class="fa fa-caret-left fa-lg" style="color: #666666;"></i> 
							<strong> Categories</strong> 
							<i class="fa fa-caret-right fa-lg" style="color: #666666;"></i>
						</p>
						<div class="col-md-6">
							<div class="img-md">
								<a href="product.html"><img src="plugins/img/content-img-md-1.png" height="100%" width="100%"></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="img-1">
										<p class="text-uppercase small">
											<strong>Mobile</strong>
										</p>
										<ul class="list-small list-unstyled">
											<li><a href="#">Apple Mobile</a></li>
											<li><a href="#">Samsung Mobile</a></li>
											<li><a href="#">Sony Smartphone</a></li>
											<li><a href="#">Xiaomi Technology</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="img-2">
										<p class="text-uppercase small">
											<strong>Headphone</strong>
										</p>
										<ul class="list-small list-unstyled">
											<li><a href="#">Sony Walkman</a></li>
											<li><a href="#">HTC Dobly</a></li>
											<li><a href="#">Beats</a></li>
											<li><a href="#">Harman Kadon</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="blank"></div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="img-3">
										<p class="text-uppercase small">
											<strong>Laptop</strong>
										</p>
										<ul class="list-small list-unstyled">
											<li><a href="#">Macbook</a></li>
											<li><a href="#">MSI Gaming</a></li>
											<li><a href="#">Sony Vaio</a></li>
											<li><a href="#">Del XPS 2017</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="img-4">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- categories -->

			<div class="featured-product">
				<div class="row">
					<div class="container">
						<p class="title">
							<i class="fa fa-caret-left fa-lg" style="color: #666666;"></i> 
							<strong> Featured Product</strong> 
							<i class="fa fa-caret-right fa-lg" style="color: #666666;"></i>
						</p>
						<div class="col-md-4 col-md-offset-4 col-sm-5 col-sm-offset-3 col-xs-10 col-xs-offset-2">
							<ul role="tablist" class="nav nav-tabs text-uppercase small">
								<li class="active">
									<a href="#tab-mobile-content" data-toggle="tab" aria-expanded="true">Mobile</a>
								</li>
								<li>
									<a href="#tab-headphone-content" data-toggle="tab" aria-expanded="true">Headphone</a>
								</li>
								<li>
									<a href="#tab-laptop-content" data-toggle="tab" aria-expanded="true">Laptop</a>
								</li>
							</ul>
						</div>
						<div class="clearfix">
							<!-- <div class="control">
								<button type="button" class="btn btn-primary"> <i class="fa fa-caret-left"></i> </button>
								<button type="button" class="btn btn-primary"> <i class="fa fa-caret-right"></i> </button>
							</div> -->
						</div>
					</div>
				</div>

				<div class="tab-content">
					<div class="tab-pane active" id="tab-mobile-content">
						<div class="row">
							<div class="container">
							@if(!empty($posts))
							@foreach($posts as $key => $post)
								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="product">
										<div class="product-image">
											<img src="{{$post->thumbnail}}" width="100%">
										</div>
										<div class="product-control text-center">
											<button class="btn" onclick="alert('Add to cart successful')">
												<i class="fa fa-cart-plus fa-lg"></i> Add to cart
											</button>
											<button class="btn" data-toggle="modal" data-target="#mobile-product-1">
												<i class="fa fa-eye fa-lg"></i>
											</button>
										</div>
										<div class="caption">
											<div class="name">
												<a href="#" class=""><strong>{{$post->name}}</strong></a>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i> 
												(20)
											</div>
											<div class="price">
												{{-- <i class="fa fa-usd"></i> <strong>512.00</strong> --}}
											</div>
										</div>
									</div>
								</div>
							@endforeach
							@endif
								{{-- <div class="col-md-3 col-sm-6 col-xs-6">
									<div class="product">
										<div class="product-image">
											<img src="plugins/img/mobile-5.png" width="100%">
										</div>
										<div class="product-control text-center">
											<button class="btn" onclick="alert('Add successful')">
												<i class="fa fa-cart-plus fa-lg"></i> Add to cart
											</button>
											<button class="btn" data-toggle="modal" data-target="#mobile-product-1">
												<i class="fa fa-eye fa-lg"></i>
											</button>
										</div>
										<div class="caption">
											<div class="name">
												<a href="#" class=""><strong>Redmi Note Prime</strong></a>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i> 
												(5)
											</div>
											<div class="price">
												<i class="fa fa-usd"></i> <strong>189.00</strong>
											</div>
										</div>
									</div>
								</div> --}}

								<div class="clearfix"></div>

								{{-- <div class="col-md-3 col-sm-6 col-xs-6">
									<div class="product">
										<div class="product-image">
											<img src="plugins/img/mobile-4.png" width="100%">
										</div>
										<div class="product-control text-center">
											<button class="btn" onclick="alert('Add successful')">
												<i class="fa fa-cart-plus fa-lg"></i> Add to cart
											</button>
											<button class="btn" data-toggle="modal" data-target="#mobile-product-1">
												<i class="fa fa-eye fa-lg"></i>
											</button>
										</div>
										<div class="caption">
											<div class="name">
												<a href="#" class=""><strong>Sky A860 32GB</strong></a>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
												<i class="fa fa-star-o"></i> 
												(15)
											</div>
											<div class="price">
												<i class="fa fa-usd"></i> <strong>152.00</strong>
											</div>
										</div>
									</div>
								</div> --}}

								{{-- <div class="col-md-3 col-sm-6 col-xs-6">
									<div class="product">
										<div class="product-image">
											<img src="plugins/img/mobile-3.png" width="100%">
										</div>
										<div class="product-control text-center">
											<button class="btn" onclick="alert('Add successful')">
												<i class="fa fa-cart-plus fa-lg"></i> Add to cart
											</button>
											<button class="btn" data-toggle="modal" data-target="#mobile-product-1">
												<i class="fa fa-eye fa-lg"></i>
											</button>
										</div>
										<div class="caption">
											<div class="name">
												<a href="#" class=""><strong>Xiaomi Redmi 4X</strong></a>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i> 
												(20)
											</div>
											<div class="price">
												<i class="fa fa-usd"></i> <strong>236.00</strong>
											</div>
										</div>
									</div>
								</div> --}}
							</div>
						</div>
					</div>
{{-- 
					<div class="tab-pane fade" id="tab-headphone-content">
						<div class="row">
							<div class="container">
								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="product">
										<div class="product-image">
											<img src="plugins/img/headphone-1.png" width="100%">
										</div>
										<div class="product-control text-center">
											<button class="btn" onclick="alert('Add successful')">
												<i class="fa fa-cart-plus fa-lg"></i> Add to cart
											</button>
											<button class="btn" data-toggle="modal" data-target="#mobile-product-1">
												<i class="fa fa-eye fa-lg"></i>
											</button>
										</div>
										<div class="caption">
											<div class="name">
												<a href="#" class=""><strong>Beats EP Headphone</strong></a>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i> 
												(3)
											</div>
											<div class="price">
												<i class="fa fa-usd"></i> <strong>63.00</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="product">
										<div class="product-image">
											<img src="plugins/img/headphone-2.png" width="100%">
										</div>
										<div class="product-control text-center">
											<button class="btn" onclick="alert('Add successful')">
												<i class="fa fa-cart-plus fa-lg"></i> Add to cart
											</button>
											<button class="btn" data-toggle="modal" data-target="#mobile-product-1">
												<i class="fa fa-eye fa-lg"></i>
											</button>
										</div>
										<div class="caption">
											<div class="name">
												<a href="#" class=""><strong>BQSM 618 Headphone</strong></a>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i> 
												(5)
											</div>
											<div class="price">
												<i class="fa fa-usd"></i> <strong>55.00</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="product">
										<div class="product-image">
											<img src="plugins/img/headphone-3.png" width="100%">
										</div>
										<div class="product-control text-center">
											<button class="btn" onclick="alert('Add successful')">
												<i class="fa fa-cart-plus fa-lg"></i> Add to cart
											</button>
											<button class="btn" data-toggle="modal" data-target="#mobile-product-1">
												<i class="fa fa-eye fa-lg"></i>
											</button>
										</div>
										<div class="caption">
											<div class="name">
												<a href="#" class=""><strong>Beats Pro Headphone</strong></a>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i> 
												(10)
											</div>
											<div class="price">
												<i class="fa fa-usd"></i> <strong>86.00</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="product">
										<div class="product-image">
											<img src="plugins/img/headphone-6.png" width="100%">
										</div>
										<div class="product-control text-center">
											<button class="btn" onclick="alert('Add successful')">
												<i class="fa fa-cart-plus fa-lg"></i> Add to cart
											</button>
											<button class="btn" data-toggle="modal" data-target="#mobile-product-1">
												<i class="fa fa-eye fa-lg"></i>
											</button>
										</div>
										<div class="caption">
											<div class="name">
												<a href="#" class=""><strong>Technical Headphone</strong></a>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i> 
												(20)
											</div>
											<div class="price">
												<i class="fa fa-usd"></i> <strong>112.00</strong>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> --}}

					{{-- <div class="tab-pane fade" id="tab-laptop-content">
						<div class="row">
							<div class="container">
								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="product">
										<div class="product-image">
											<img src="plugins/img/laptop-1.png" width="100%">
										</div>
										<div class="product-control text-center">
											<button class="btn" onclick="alert('Add successful')">
												<i class="fa fa-cart-plus fa-lg"></i> Add to cart
											</button>
											<button class="btn" data-toggle="modal" data-target="#mobile-product-1">
												<i class="fa fa-eye fa-lg"></i>
											</button>
										</div>
										<div class="caption">
											<div class="name">
												<a href="#" class=""><strong>Dell Inspiron</strong></a>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i> 
												(22)
											</div>
											<div class="price">
												<i class="fa fa-usd"></i> <strong>520.00</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="product">
										<div class="product-image">
											<img src="plugins/img/laptop-2.png" width="100%">
										</div>
										<div class="product-control text-center">
											<button class="btn" onclick="alert('Add successful')">
												<i class="fa fa-cart-plus fa-lg"></i> Add to cart
											</button>
											<button class="btn" data-toggle="modal" data-target="#mobile-product-1">
												<i class="fa fa-eye fa-lg"></i>
											</button>
										</div>
										<div class="caption">
											<div class="name">
												<a href="#" class=""><strong>Dell Gaming 7567A</strong></a>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i> 
												(20)
											</div>
											<div class="price">
												<i class="fa fa-usd"></i> <strong>776.00</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="clearfix"></div>

								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="product">
										<div class="product-image">
											<img src="plugins/img/laptop-3.png" width="100%">
										</div>
										<div class="product-control text-center">
											<button class="btn" onclick="alert('Add successful')">
												<i class="fa fa-cart-plus fa-lg"></i> Add to cart
											</button>
											<button class="btn" data-toggle="modal" data-target="#mobile-product-1">
												<i class="fa fa-eye fa-lg"></i>
											</button>
										</div>
										<div class="caption">
											<div class="name">
												<a href="#" class=""><strong>HP 5541 i7 8GB</strong></a>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
												<i class="fa fa-star-o"></i> 
												(31)
											</div>
											<div class="price">
												<i class="fa fa-usd"></i> <strong>612.00</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="product">
										<div class="product-image">
											<img src="plugins/img/laptop-4.png" width="100%">
										</div>
										<div class="product-control text-center">
											<button class="btn" onclick="alert('Add successful')">
												<i class="fa fa-cart-plus fa-lg"></i> Add to cart
											</button>
											<button class="btn" data-toggle="modal" data-target="#mobile-product-1">
												<i class="fa fa-eye fa-lg"></i>
											</button>
										</div>
										<div class="caption">
											<div class="name">
												<a href="#" class=""><strong>ASUS 5570 i5 8GB</strong></a>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i> 
												(7)
											</div>
											<div class="price">
												<i class="fa fa-usd"></i> <strong>586.00</strong>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> --}}
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<a href="product.html" class="btn btn-primary text-uppercase">
							<i class="fa fa-angle-double-right"></i> View all 
							<i class="fa fa-angle-double-right"></i>
						</a>
					</div>
				</div>

			</div> <!-- featured-product -->

			<div class="deal-and-best-price">
				<div class="row">
					<div class="container">
						<div class="col-md-6 col-xs-12">
							<div class="deal-of-the-day">
								<p class="title">
									<i class="fa fa-caret-left fa-lg" style="color: #666666;"></i> 
									<strong> Deal of the day</strong> 
									<i class="fa fa-caret-right fa-lg" style="color: #666666;"></i>
								</p>
								<div class="deal-product">
									<div class="row">
										<div class="col-md-6 col-xs-6">
											<img src="plugins/img/mobile-6.png" width="100%">
										</div>
										<div class="col-md-6 col-xs-6">
											<div class="name">
												<p>iPhone 6S 64GB</p>
											</div>
											<div class="rating">
												<p>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-o"></i> 
													(16)
												</p>
											</div>
											<div class="description">
												<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ...</p>
											</div>
											<div class="control">
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-xs-12">
							<div class="best-price">
								<p class="title">
									<i class="fa fa-caret-left fa-lg" style="color: #666666;"></i> 
									<strong> Best price of this month</strong> 
									<i class="fa fa-caret-right fa-lg" style="color: #666666;"></i>
								</p>
								<div class="best-price-product">
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-6">
											<div class="product">
												<div class="product-image">
													<img src="plugins/img/mobile-6.png" width="100%">
												</div>
												<div class="caption">
													<div class="name">
														<a href="#" class=""><strong>iPhone 6S 32GB</strong></a>
													</div>
													<div class="price">
														<i class="fa fa-usd"></i> <strong>512.00</strong>
													</div>
												</div>
												<div class="control">
													
												</div>
											</div>
										</div>

										<div class="col-md-6 col-sm-12 col-xs-6">
											<div class="product">
												<div class="product-image">
													<img src="plugins/img/mobile-5.png" width="100%">
												</div>
												<div class="caption">
													<div class="name">
														<a href="#" class=""><strong>Redmi Note Prime</strong></a>
													</div>
													<div class="price">
														<i class="fa fa-usd"></i> <strong>189.00</strong>
													</div>
												</div>
												<div class="control">
													
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

		</div> <!-- content -->

		<div class="clearfix"></div>

		<div class="container">
			<div class="partner text-center">
				<div class="row">
					<div class="col-md-2 col-sm-4 col-xs-6">
						<img src="plugins/img/partner-1.png">
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<img src="plugins/img/partner-3.png">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<img src="plugins/img/partner-2.png">
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<img src="iplugins/mg/partner-4.png">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<img src="plugins/img/partner-5.png">
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<img src="plugins/img/partner-6.png">
					</div>
				</div>
			</div>		
		</div>

		<div id="footer">
			<div class="container">
				<div class="footer-top small">
					<div class="row">
						<div class="col-xs-6 col-sm-3 about-us">
							<p class="text-uppercase"><strong>About Us</strong></p>
							<img src="img/logo-footer.png">
							<p><span class="glyphicon glyphicon-map-marker" style="color: #00ffff;"></span> Store Address</p>
							<p>8 W. Fawn Dr. Moorhead</p>
							<p>(+84) 915 981 110</p>
							<p><span class="glyphicon glyphicon-envelope"></span> ngoctai.dev@gmail.com</p>
						</div>
						<div class="col-xs-6 col-sm-2 category">
							<p class="text-uppercase"><strong>Category</strong></p>
							<p><a href="#">Mobile</a></p>
							<p><a href="#">Headphone</a></p>
							<p><a href="#">Laptop</a></p>
							<p><a href="#">Desktop</a></p>
							<p><a href="#">Gift Vouchers</a></p>
						</div>
						<div class="clearfix"></div>
						<div class="col-xs-6 col-sm-2 infomation">
							<p class="text-uppercase"><strong>Infomation</strong></p>
							<p><a href="#">About Us</a></p>
							<p><a href="#">Gift Vouchers</a></p>
							<p><a href="#">Site Map</a></p>
							<p><a href="#">Accessories</a></p>
							<p><a href="#">Gift Vouchers</a></p>
						</div>
						<div class="col-xs-6 col-sm-2 my-account">
							<p class="text-uppercase"><strong>My account</strong></p>
							<p><a href="#">Mobile</a></p>
							<p><a href="#">Headphone</a></p>
							<p><a href="#">Laptop</a></p>
							<p><a href="#">Desktop</a></p>
							<p><a href="#">Headphone</a></p>
						</div>
						<div class="col-xs-10 col-sm-3 subscribe">
							<p class="text-uppercase"><strong>SUBSCRIBE TO OUR NEWSLETTER</strong></p>
							<p>Please enter email address to create or update your profile and manage your subscriptions</p>
							<p>
								<form>
									<div class="input-group">
										<input type="text" class="form-control" name="email" placeholder="ngoctai.dev@gmail.com">
										<span class="input-group-addon btn btn-success"> <i class="glyphicon glyphicon-arrow-right"></i> </span>
									</div>
								</form>
							</p>
							<div class="social text-center">
								<ul class="list-inline">
									<li class="facebook">
										<a href="#"><span class="fa fa-facebook fa-lg"></span></a>
									</li>
									<li class="twitter">
										<a href="#"><span class="fa fa-twitter fa-lg"></span></a>
									</li>
									<li class="youtube">
										<a href="#"><span class="fa fa-youtube fa-lg"></span></a>
									</li>
									<li class="pinterest">
										<a href="#"><span class="fa fa-pinterest fa-lg"></span></a>
									</li>
									<li class="google-plus">
										<a href="#"><span class="fa fa-google-plus fa-lg"></span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-center small">
					<div class="row">
						<div class="col-md-6">
							<p class="text-uppercase">Down load the app</p>
							<p>Get access to all exclusive offers, discounts and deals by downloading Cena App !</p>
						</div>
						<div class="col-md-6">
							<a href="#"><img width="181" height="45" src="plugins/img/app-1.png"></a>
							<a href="#"><img width="181" height="45" src="plugins/img/app-2.png"></a>
							<a href="#"><img width="181" height="45" src="plugins/img/app-3.png"></a>
						</div>
					</div>
				</div>

			</div>
			<div class="footer-bottom small">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<p>© 2018 CenaStore. Designed by DANGTHANHTAI. All Rights Reserved.</p>
						</div>
						<div class="col-md-4 payment">
							<a href="#"><img width="121" height="15" src="plugins/img/payments-1.png"></a>
							<a href="#"><img width="121" height="15" src="plugins/img/payments-2.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- footer -->

	</div>

</body>
</html>

<script type="text/javascript">
	window.onscroll = function() {
		scrollMenu()
	};

	var header = document.getElementById("menu-hr");
	var sticky = header.offsetTop + 26;

	function scrollMenu() {
	 if (window.pageYOffset > sticky) {
	   header.classList.add("sticky");
	 } else {
	   header.classList.remove("sticky");
	 }
	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="plugins/js/action.js"></script>