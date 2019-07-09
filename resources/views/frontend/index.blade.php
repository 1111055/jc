@extends('frontend.app')

@section('content')

        <div class="slider-area pb-60">
            <div class="slider-wrapper theme-default  nivo2">
                <div id="slider" class="nivoSlider">
                  @isset($bannerline[0])
                     @foreach($bannerline[0] as $key => $item)
                           <a href="{{$item->link}}"><img src="{{$item->path}}"  alt="" title="#slider-1-caption{{$key}}" /></a>
                     @endforeach
                 @endisset
                </div>
            @isset($bannerline[0])
                @foreach($bannerline[0] as $key => $item)
                    <div id="slider-1-caption{{$key}}" class="nivo-html-caption nivo-caption">
                        <div class="text-content-wrapper">
                            <div class="container text-right">
                                <div class="text-content">
                                    <h4 class="title2 wow bounceInLeft mb-16" data-wow-duration="2s" data-wow-delay="0s">{{$item->titulo}}</h4>
                                    <h1 class="title1 wow bounceInRight mb-16" data-wow-duration="2s" data-wow-delay="1s">{!! $item->descricao !!} </h1>
                                    <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="2s" data-wow-delay="2s">
                                        <a class="button slider-btn" href="{{$item->link}}">Ver Mais</a>                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                 @endforeach  
            @endisset                
            </div>
        </div> 
        
         <div class="best-seller-product pb-50 pb-sm-40">
            <div class="container">
                <div class="group-title">
                    <h2>Descoto 1000 Quantidades!</h2>
                </div>
                <!-- Best Product Activation Start -->
                <div class="best-seller-pro-active  owl-carousel slider-right-content">
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{route('produto.show',1)}}"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-40%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{route('produto.show',1)}}"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <h4><a href="#">Bone 25</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->

                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{route('produto.show',1)}}"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-25%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{route('produto.show',1)}}"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-35%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{route('produto.show',1)}}"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <h4><a href="">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-60%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{route('produto.show',1)}}"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <h4><a href="#"></a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-15%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{route('produto.show',1)}}"><img class="img" src="img/pen1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <h4><a href="">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-10%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="E"><img class="img" src="img/pen1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <h4><a href="#">Pen</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-5%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{route('produto.show',1)}}"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">

                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{route('produto.show',1)}}"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{route('produto.show',1)}}"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">

                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                </div>
                <!-- Best Product Activation End -->
            </div>
            <!-- Container End -->
        </div>                             
        <!-- Banner End -->
        <!-- Best Products Start -->
        <div class="best-seller-product pb-30">
            <div class="container">
                <div class="group-title">
                    <h2>Material Escritório</h2>
                </div>
                <!-- Best Product Activation Start -->
                <div class="hand-tool-active owl-carousel">
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{route('produto.show',1)}}">
                                <img class="primary-img" src="img/pen1.png" alt="single-product">
                                <img class="secondary-img" src="img/pen1.png" alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">                               
                            <h4><a href="#">Pen XPTO</a></h4>
                            <p><span class="price"> </span><del class="prev-price"> </del></p-->
                            <div class="pro-actions">
                                <div class="actions-secondary">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Carrinho"><i class="fa fa-shopping-basket"></i></a>
                                    <!--a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a-->
                                </div>
                            </div>
                        </div>
                    </div>                                        
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{route('produto.show',1)}}">
                                <img class="primary-img" src="img/caneta1.png" alt="single-product">
                                <img class="secondary-img" src="img/caneta1.png" alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">                           
                            <h4><a href="#">Caneta XPTO</a></h4>
                            <p><span class="price"> </span><del class="prev-price"> </del></p-->
                            <div class="pro-actions">
                                <div class="actions-secondary">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Carrinho"><i class="fa fa-shopping-basket"></i></a>
                                    <!--a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a-->
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">-30%</span>
                    </div>                                        
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{route('produto.show',1)}}">
                                <img class="primary-img" src="img/caneta2.png" alt="single-product">
                                <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">                             
                            <h4><a href="#">Caneta XPTO</a></h4>
                            <p><span class="price"> </span><del class="prev-price"> </del></p-->
                            <div class="pro-actions">
                                <div class="actions-secondary">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Carrinho"><i class="fa fa-shopping-basket"></i></a>
                                    <!--a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a-->
                                </div>
                            </div>
                        </div>
                    </div>                                        
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{route('produto.show',1)}}">
                                <img class="primary-img" src="img/caneta1.png" alt="single-product">
                                <img class="secondary-img" src="img/caneta1.png" alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">                               
                            <h4><a href="{{route('produto.show',1)}}">Caneta XPTO</a></h4>
                            <p><span class="price"> </span><del class="prev-price"> </del></p-->
                            <div class="pro-actions">
                                <div class="actions-secondary">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Carrinho"><i class="fa fa-shopping-basket"></i></a>
                                    <!--a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a-->
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">-20%</span>
                    </div>                                        
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{route('produto.show',1)}}">
                                <img class="primary-img" src="img/mochila2.png" alt="single-product">
                                <img class="secondary-img" src="img/mochila2.png" alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">                            
                            <h4><a href="{{route('produto.show',1)}}">Mochila XPTO</a></h4>
                            <p><span class="price"> </span><del class="prev-price"> </del></p-->
                            <div class="pro-actions">
                                <div class="actions-secondary">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Carrinho"><i class="fa fa-shopping-basket"></i></a>
                                    <!--a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a-->
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">-10%</span>
                    </div>                                     
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{route('produto.show',1)}}">
                                <img class="primary-img" src="https://fakeimg.pl/270x380/" alt="single-product">
                                <img class="secondary-img" src="https://fakeimg.pl/270x380/" alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">                            
                            <h4><a href="{{route('produto.show',1)}}">Bloco XPTO</a></h4>
                            <p><span class="price"> </span><del class="prev-price"> </del></p-->
                            <div class="pro-actions">
                                <div class="actions-secondary">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Carrinho"><i class="fa fa-shopping-basket"></i></a>
                                    <!--a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a-->
                                </div>
                            </div>
                        </div>
                    </div>                                        
                    <!-- Single Product End -->
                </div>
                <!-- Best Product Activation End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Best Product End -->  
        <!-- Banner Start -->
        <div class="upper-banner banner pb-60">
            <div class="container">
               <div class="row">
                   @isset($bannerline[1])
                       @foreach($bannerline[1] as $value)
                       <div class="col-sm-6">
                            <div class="single-banner zoom">
                                <a href="{{$value->link}}"><img src="{{$value->path}}" alt="slider-banner"></a>
                            </div>
                        </div>
                        @endforeach
                    @endisset
               </div>
               <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>                                
        <!-- Banner End -->
        <!-- New Products Start -->
        <div class="new-products pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-2">
                        <div class="side-product-list">
                            <div class="group-title">
                                <h2>Mais Vendidos</h2>
                            </div>
                            <!-- Deal Pro Activation Start -->
                            <div class="slider-right-content side-product-list-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-pro">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="{{route('produto.show',1)}}"><img class="img" src="img/pen1.png" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4><a href="{{route('produto.show',1)}}">Caneta</a></h4>
                                            <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="{{route('produto.show',1)}}"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4><a href="{{route('produto.show',1)}}">Bloco</a></h4>
                                            <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="{{route('produto.show',1)}}"><img class="img" src="img/pen1.png" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4><a href="{{route('produto.show',1)}}">Boné Rapaz Azul</a></h4>
                                            <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="{{route('produto.show',1)}}"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4><a href="{{route('produto.show',1)}}">T-Shirt Rosa Menina</a></h4>
                                            <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="{{route('produto.show',1)}}"><img class="img" src="img/pen1.png" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4><a href="{{route('produto.show',1)}}">Pen 5Gb</a></h4>
                                            <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>

                                <div class="double-pro">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="{{route('produto.show',1)}}"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4><a href="{{route('produto.show',1)}}">Caneta v2</a></h4>
                                            <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="{{route('produto.show',1)}}"><img class="img" src="img/pen1.png" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4><a href="{{route('produto.show',1)}}">Bloco v2</a></h4>
                                            <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="{{route('produto.show',1)}}"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4><a href="{{route('produto.show',1)}}">Boné Menina Rosa</a></h4>
                                            <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="{{route('produto.show',1)}}"><img class="img" src="img/pen1.png" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4><a href="{{route('produto.show',1)}}">T-Shirt Azul Menina</a></h4>
                                            <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="{{route('produto.show',1)}}"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4><a href="{{route('produto.show',1)}}">Pen 10Gb</a></h4>
                                            <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>                               
                            </div>
                            <!-- Deal Pro Activation End -->
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8  order-lg-2">
                        <!-- New Pro Content End -->
                        <div class="new-pro-content">
                            <div class="pro-tab-title border-line">
                                <!-- Featured Product List Item Start -->
                                <ul class=" nav  product-list product-tab-list mb-30">
                                    <li><a  class="active" data-toggle="tab" href="#new-arrival">Novos</a></li>
                                    <!--li><a data-toggle="tab" href="#toprated">Featured</a></li-->
                                    <li><a data-toggle="tab" href="#new-arrival">Melhores Classificados</a></li>
                                </ul>
                                <!-- Featured Product List Item End -->
                            </div>
                            <div class="tab-content product-tab-content jump">
                                <div id="new-arrival" class="tab-pane active">
                                    <!-- New Products Activation Start -->
                                    <div class="new-pro-active owl-carousel">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('produto.show',1)}}">
                                                    <img class="primary-img" src="img/mochila2.png" alt="single-product">
                                                    <img class="secondary-img" src="img/mochila2.png" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">                             
                                                <h4><a href="{{route('produto.show',1)}}">Pen 80GB</a></h4>
                                                <p><span class="price"></span><del class="prev-price"></del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                        <!--a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('produto.show',1)}}">
                                                    <img class="primary-img" src="img/caneta2.png" alt="single-product">
                                                    <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                              
                                                <h4><a href="{{route('produto.show',1)}}">Pen 60GB</a></h4>
                                                <p><span class="price"></span><del class="prev-price"></del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                        <!--a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">-30%</span>
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('produto.show',1)}}">
                                                    <img class="primary-img" src="img/mochila2.png" alt="single-product">
                                                    <img class="secondary-img" src="img/mochila2.png" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">                              
                                                <h4><a href="{{route('produto.show',1)}}">Pen 40GB</a></h4>
                                                <p><span class="price"></span><del class="prev-price"></del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                        <!--a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('produto.show',1)}}">
                                                    <img class="primary-img" src="img/caneta2.png" alt="single-product">
                                                    <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                              
                                                <h4><a href="{{route('produto.show',1)}}">Pen 60GB</a></h4>
                                                <p><span class="price"></span><del class="prev-price"></del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                        <!--a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">-30%</span>
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('produto.show',1)}}">
                                                    <img class="primary-img" src="img/mochila2.png" alt="single-product">
                                                    <img class="secondary-img" src="img/mochila2.png" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">                             
                                                    <h4><a href="{{route('produto.show',1)}}">Pen 60GB</a></h4>
                                                    <p><span class="price"></span><del class="prev-price"></del></p>
                                                    <div class="pro-actions">
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                            <!--a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a-->
                                                        </div>
                                                    </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('produto.show',1)}}">
                                                    <img class="primary-img" src="img/caneta2.png" alt="single-product">
                                                    <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">                                
                                                <h4><a href="{{route('produto.show',1)}}">Pen 60GB</a></h4>
                                                <p><span class="price"></span><del class="prev-price"></del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                        <!--a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">-30%</span>
                                        </div>                                        
                                        <!-- Single Product End -->
                                    </div>
                                    <!-- New Products Activation End -->
                                </div>
                                <!-- New Products End -->
                                <div id="toprated" class="tab-pane">
                                    <!-- New Products Activation Start -->
                                    <div class="new-pro-active owl-carousel">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('produto.show',1)}}">
                                                    <img class="primary-img" src="img/mochila2.png" alt="single-product">
                                                    <img class="secondary-img" src="img/mochila2.png" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">                            
                                                <h4><a href="{{route('produto.show',1)}}">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="#" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('produto.show',1)}}">
                                                    <img class="primary-img" src="img/products/3.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">                             
                                                <h4><a href="{{route('produto.show',1)}}">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="#" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">-30%</span>
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('produto.show',1)}}">
                                                    <img class="primary-img" src="img/mochila2.png" alt="single-product">
                                                    <img class="secondary-img" src="img/mochila2.png" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">                               
                                                <h4><a href="{{route('produto.show',1)}}">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="#" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('produto.show',1)}}">
                                                    <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">                               
                                                <h4><a href="{{route('produto.show',1)}}">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="#" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/products/2.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/3.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                   
                                                <h4><a href="#">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="#" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/products/3.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/4.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">                           
                                                <h4><a href="#">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="#" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                    </div>
                                    <!-- New Products Activation End -->
                                </div>
                            </div>
                            <!-- Tab-Content End -->
                            <div class="single-banner zoom mt-30 ">
                            <a href="#"><img src="{{$pagina->pathimg}}" alt="slider-banner"></a>
                        </div>
                        </div>
                        <!-- New Pro Content End -->                        
                    </div>
                </div>

            </div>
        </div>
        <div class="company-policy pb-60 pb-sm-25">
            <div class="container">
                <div class="row">
                    @isset($bannerline[2])
                            @foreach($bannerline[2] as $value)
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-policy">
                                            <div class="icone-img">
                                                <img src="{{ $value->path}}" alt="">
                                            </div>
                                            <div class="policy-desc">
                                                <h3>{{ $value->titulo}}</h3>
                                                <p>{!! $value->descricao !!}</p>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                    @endisset
                </div>
            </div>
        </div>
        <!-- Company Policy End -->   
        <!-- Best Products Start -->
        <div class="best-seller-product pb-50 pb-sm-40">
            <div class="container">
                <div class="group-title">
                    <h2>Produtos mais vistos!</h2>
                </div>
                <div class="best-seller-pro-active  owl-carousel slider-right-content">
                    @foreach($moreview->take(4) as $item)
                    <div class="double-pro">
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{route('produto.show',$item->id)}}"><img class="img" src="{{$item->path}}" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <h4><a href="{{route('produto.show',$item->id)}}">{{$item->titulo}}</a></h4>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
                @if($moreview->count() > 4)
                 <div class="best-seller-pro-active  owl-carousel slider-right-content">
                  @foreach($moreview as $key => $item)
                    @if($key > 3)
                        <div class="double-pro">
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="{{route('produto.show',$item->id)}}"><img class="img" src="{{$item->path}}" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <h4><a href="{{route('produto.show',$item->id)}}">{{$item->titulo}}</a></h4>
                                </div>
                            </div>
                        </div>
                     @endif
                    @endforeach
                   @endif
                </div>
            </div>
        </div>


@stop