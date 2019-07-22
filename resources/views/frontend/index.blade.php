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
                @foreach($collection as $key => $value) 
                     @if ($loop->first)

                        <div class="group-title">
                             @foreach($value as $item)
                                  @if($item->banner_id > 0 && $loop->first && !empty($item->banner->titulo))
                                     <h2>{{$item->banner->titulo}}</h2>
                                  @endif
                              @endforeach
                        </div>

                        <div class="best-seller-pro-active  owl-carousel slider-right-content">
                                @foreach($value->take(4) as $item)
                                     @if($item->produto_id > 0)
                                            <div class="double-pro">
                                                <div class="single-product">
                                                    <div class="pro-img">
                                                        <a href="{{route('produto.show',$item->produto->id)}}"><img class="img" src="{{$item->produto->path}}" alt="product-image"></a>
                                                    </div>
                                                    <div class="pro-content">
                                                        <h4><a href="{{route('produto.show',$item->produto->id)}}">{{$item->produto->titulo}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                    @endif
                              @endforeach
                        </div>
                            @if($value->count() > 4)
                                 @if($item->produto_id > 0)
                                     <div class="best-seller-pro-active  owl-carousel slider-right-content">
                                      @foreach($value as $key => $item)
                                        @if($key > 3)
                                            <div class="double-pro">
                                                <div class="single-product">
                                                    <div class="pro-img">
                                                        <a href="{{route('produto.show',$item->produto->id)}}"><img class="img" src="{{$item->produto->path}}" alt="product-image"></a>
                                                    </div>
                                                    <div class="pro-content">
                                                        <h4><a href="{{route('produto.show',$item->produto->id)}}">{{$item->produto->titulo}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                          @endif
                                        @endforeach
                                     </div>
                                @endif
                           @endif
                    @endif    
              @endforeach
            </div>
        </div>                             
            @foreach($collection as $key => $value) 
                 @if($loop->iteration == 2)
                        <div class="best-seller-product pb-30">
                            <div class="container">
                                <div class="group-title">
                                    @foreach($value as $item)
                                      @if($item->banner_id > 0 && $loop->first && !empty($item->banner->titulo))
                                         <h2>{{$item->banner->titulo}}</h2>
                                      @endif
                                    @endforeach
                                </div>

                                <div class="hand-tool-active owl-carousel">

                                    @foreach($value as $item)
                                      @if($item->produto_id > 0)
                                        <div class="single-product">
                                            <div class="pro-img">
                                                <a href="{{route('produto.show',$item->produto->id)}}">
                                                    <img class="primary-img" src="{{$item->produto->path}}" alt="single-product">
                                                    <img class="secondary-img" src="{{$item->produto->path}}" alt="single-product">
                                                </a>
                                            </div>
                                            <div class="pro-content">                               
                                                <h4><a href="#">{{$item->produto->titulo}}</a></h4>
                                                <p><span class="price"> </span><del class="prev-price"> </del></p-->
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="{{route('produto.wish',$item->produto->id)}}" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="{{route('produto.bag',$item->produto->id)}}" data-toggle="tooltip" title="Carrinho"><i class="fa fa-shopping-basket"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                 @endif    
            @endforeach
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
            </div>
        </div>                                
        <div class="new-products pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-2">
                        <div class="side-product-list">
                            <div class="group-title">
                                <h2>Mais Pedidos</h2>
                            </div>
                            <div class="slider-right-content side-product-list-active owl-carousel">
                                <div class="double-pro">
                                    @foreach($requisitado as $item)
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="{{route('produto.show',$item->id)}}"><img class="img" src="{{$item->path}}" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4><a href="{{route('produto.show',$item->id)}}">{{$item->titulo}}</a></h4>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>                  
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8  order-lg-2">
                        <!-- New Pro Content End -->
                        <div class="new-pro-content">
                            <div class="pro-tab-title border-line">
                                <ul class=" nav  product-list product-tab-list mb-30">
                                    <li><a  class="active" data-toggle="tab" href="#new-arrival">Novos</a></li>
                                    @foreach($collection as $key => $value) 
                                      @if($loop->iteration == 3)
                                         @foreach($value as $item)
                                           @if($item->banner_id > 0 && $loop->first && !empty($item->banner->titulo))
                                             <li><a data-toggle="tab" href="#toprated">{{$item->banner->titulo}}</a></li>
                                           @endif    
                                         @endforeach
                                      @endif    
                                  @endforeach
                                </ul>
                            </div>
                            <div class="tab-content product-tab-content jump">
                                <div id="new-arrival" class="tab-pane active">
                                    <div class="new-pro-active owl-carousel">
                                        @foreach($ultimasentradas as $item)
                                            <div class="single-product">
                                                <div class="pro-img">
                                                    <a href="{{route('produto.show',$item->id)}}">
                                                        <img class="primary-img" src="{{$item->path}}" alt="single-product">
                                                        <img class="secondary-img" src="{{$item->path}}" alt="single-product">
                                                    </a>
                                                </div>
                                                <div class="pro-content">                             
                                                    <h4><a href="{{route('produto.show',$item->id)}}">{{$item->titulo}}</a></h4>
                                                    <p><span class="price">{{$item->cod_art}}</span><del class="prev-price"></del></p>
                                                    <div class="pro-actions">
                                                      <div class="actions-secondary">
                                                        <a href="{{route('produto.wish',$item->id)}}" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="{{route('produto.bag',$item->id)}}" data-toggle="tooltip" title="Carrinho"><i class="fa fa-shopping-basket"></i></a>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        @endforeach                                     
                                    </div>
                                </div>
                                  @foreach($collection as $key => $value) 
                                      @if($loop->iteration == 3)
                                            <div id="toprated" class="tab-pane">
                                                <div class="new-pro-active owl-carousel">
                                                    @foreach($value as $item)
                                                      @if($item->produto_id > 0)    
                                                        <div class="single-product">
                                                            <div class="pro-img">
                                                                <a href="{{route('produto.show',$item->produto->id)}}">
                                                                    <img class="primary-img" src="{{$item->produto->path}}" alt="single-product">
                                                                    <img class="secondary-img" src="{{$item->produto->path}}" alt="single-product">
                                                                </a>
                                                            </div>
                                                            <div class="pro-content">                             
                                                                <h4><a href="{{route('produto.show',$item->produto->id)}}">{{$item->produto->titulo}}</a></h4>
                                                                <p><span class="price">{{$item->produto->cod_art}}</span><del class="prev-price"></del></p>
                                                                <div class="pro-actions">
                                                                  <div class="actions-secondary">
                                                                    <a href="{{route('produto.wish',$item->produto->id)}}" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                    <a href="{{route('produto.bag',$item->produto->id)}}" data-toggle="tooltip" title="Carrinho"><i class="fa fa-shopping-basket"></i></a>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                       @endif    
                                                    @endforeach
                                                </div>
                                            </div>
                                      @endif    
                                  @endforeach
                            </div>
                            <div class="single-banner zoom mt-30 ">
                            <a href="#"><img src="{{$pagina->pathimg}}" alt="slider-banner"></a>
                        </div>
                        </div>                     
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