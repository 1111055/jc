@extends('frontend.app')

@section('content')
 <!-- Header Area End -->  
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area ptb-60 ptb-sm-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active"><a href="{{route('about')}}">Sobre Nós</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- About Main Area Start -->
        <div class="about-main-area">
			<div class="container">
				<div class="row">
					<!--div class="col-lg-7 col-md-12">
						<div class="about-img">
							<img class="img" src="img/banner/about.jpg" alt="about-us">
						</div>
					</div-->
					<div class="col-lg-12 col-md-12 text-center">
						<div class="about-content">
							<h3>Sobre Nós</h3>
							<p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim congue convallis. Nam at fermentum est, ac elementum lectus. Aliquam ut risus in turpis pulvinar vehicula vitae ultrices ante. Proin et tortor molestie, feugiat quam vitae, tincidunt neque. Suspendisse feugiat est mollis tortor suscipit facilisis. Duis lacinia ante sit amet enim finibus, eget pulvinar leo dapibus. Vestibulum convallis risus at efficitur gravida. Nulla feugiat at turpis sit amet ultricies. Vestibulum felis odio, tristique sed rhoncus non, molestie quis enim. Nulla a mattis magna, eu tempus purus. Sed lacinia nunc leo, vitae fermentum nulla faucibus non.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
       <!-- About Main Area End -->
        <!-- Our Mission Start -->
        <div class="about-bottom pt-50 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="ht-single-about pb-sm-40">
                            <h3>Os Nossos Valores e Missão</h3>
                           
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim congue convallis. Nam at fermentum est, ac elementum lectus. Aliquam ut risus in turpis pulvinar vehicula vitae ultrices ante. Proin et tortor molestie, feugiat quam vitae, tincidunt neque. Suspendisse feugiat est mollis tortor suscipit facilisis. Duis lacinia ante sit amet enim finibus, eget pulvinar leo dapibus. Vestibulum convallis risus at efficitur gravida. Nulla feugiat at turpis sit amet ultricies. Vestibulum felis odio, tristique sed rhoncus non, molestie quis enim. Nulla a mattis magna, eu tempus purus. Sed lacinia nunc leo, vitae fermentum nulla faucibus non.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ht-single-about">
                            <h3>Objectivos</h3>
                            <div class="ht-about-work">
                                <span>1</span>
                                <div class="ht-work-text">
                                    <h5><a href="#">LOREM IPSUM DOLOR SIT AMET</a></h5>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi</p>
                                </div>
                            </div>
                            <div class="ht-about-work">
                                <span>2</span>
                                <div class="ht-work-text">
                                    <h5><a href="#">DONEC FERMENTUM EROS</a></h5>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi</p>
                                </div>
                            </div>
                            <div class="ht-about-work">
                                <span>3</span>
                                <div class="ht-work-text">
                                    <h5 class="text-justify"><a href="#">LOREM IPSUM DOLOR SIT AMET</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Mission End -->
        <!-- Brand Logo Start -->
        <!--div class="brand-area pb-60">
            <div class="container">
                <div class="brand-banner owl-carousel">
                    <div class="single-brand">
                        <a href="#"><img class="img" src="img/brand/1.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/2.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/3.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/4.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/5.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img class="img" src="img/brand/1.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/2.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/3.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/4.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/5.png" alt="brand-image"></a>
                    </div>
                </div>              
            </div>
        </div-->
        @stop