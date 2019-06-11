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
							<h3>{{$pageabout->titulo}}</h3>
							 {!! $pageabout->descricao !!}
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
                            <h3>{!! $pageabout->titulo1 !!}</h3>
                           
                              {!! $pageabout->descricao1 !!}
                            
                        </div>
                    </div>
                    @if(count($desc)>0)

                        <div class="col-lg-6 col-md-6">
                            <div class="ht-single-about">
                                <h3>Objectivos</h3>
                                @foreach ($desc as $key => $item)   
                                        <div class="ht-about-work">
                                            <span>{{ $key + 1 }}</span>
                                            <div class="ht-work-text">
                                                <h5><a href="#"> {{ $item->titulo }}</a></h5>
                                                <p class="text-justify">{{ $item->descricao }}</p>
                                            </div>
                                        </div>
                                @endforeach
    
                            </div>
                        </div>
                    @endif
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