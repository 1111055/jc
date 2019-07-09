@extends('frontend.app')

@section('content')

<style>
/* Product Color */
.product-color {
  margin-bottom: 3%;
}
 
.color-choose div {
  display: inline-block;
}
 
.color-choose input[type=radio] {
  display: none;
  text-align: center;
}
.color-choose input[type=radio] + label span {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin: -1px 4px 0 0;
  /*vertical-align: middle;*/
  cursor: pointer;
  border-radius: 50%;
   text-align: center;
}
 
.color-choose input[type=radio] + label span {
  border: 2px solid #FFFFFF;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
   text-align: center;
}
 
 
.color-choose input[type=radio]:checked + label span {
  background-repeat: no-repeat;
  background-position: center;
  background: #A0A0A0;
    color: #FFF;
    content: "\2713";
    text-align: center;
    background-color: #b1abab !important;
}

.exemplo {
  margin-bottom: 6%;
}
.exemplo input[type=radio]{
    display:none; /* Esconde os inputs */
     background-color: #d1d3d1 !important;
}
 
.exemplo label {
    cursor: pointer;
}
.exemplo input[type="radio"] + label:before {
    border: 2px solid #5D5C5C;
    content: "\00a0";
    display: inline-block;
    font: 24px/1em sans-serif;
    height: 32px;
    margin: 0 .25em 0 0;
    padding:0;
    vertical-align: top;
    width: 32px;
    border-radius:4px;
}
@foreach($prod->produtocor as $key => $item)
.exemplo input[type="radio"]#campo-radio{{$key}} + label:before {
    background-color: {{$item->cor->cor}} !important;
}
@endforeach

 
.exemplo input[type="radio"]:checked + label:before {
    background: #A0A0A0;
    color: #FFF;
    content: "\2713";
    text-align: center;
    background-color: #F44336 !important;
}
 
.exemplo input[type="radio"]:checked + label:after {
    font-weight: bold;
    background-color: #d1d3d1 !important;
}
</style>

        <!-- Header Area End --> 
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area ptb-60 ptb-sm-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('produto.show',$prod->id)}}">Produtos</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Product Thumbnail Start -->
        <div class="main-product-thumbnail pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="tab-content">
                            <div id="thumb" class="tab-pane active">
                                <a data-fancybox="images" href="#"><img src="{{ $prod->path }}" alt="product-view"></a>
                            </div>
                            @foreach($prod->imagensproduto as $key => $item)
                                <div id="thumb{{$key}}" class="tab-pane">
                                    <a data-fancybox="images" href="{{ $item->link }}"><img src="{{ $item->path }}" alt="{{ $prod->titulo }}"></a>
                                </div>
                            @endforeach
                        </div>

                        <div class="product-thumbnail">
                            <div class="thumb-menu nav">
                                <a class="active" data-toggle="tab" href="#thumb"> <img src="{{ $prod->path }}" alt="{{ $prod->titulo }}"></a>
                                 @foreach($prod->imagensproduto as $key => $item)
                                     <a data-toggle="tab" href="#thumb{{$key}}"> <img src="{{ $item->path }}" alt="{{ $prod->titulo }}"></a>
                                 @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="thubnail-desc fix">
                            <h3 class="product-header">{{ $prod->titulo }}</h3>
                            <div class="pro-ref mb-15" style="margin-top: 2%;">
                                @if($prod->quantidade > 0)
                                        <p><span class="in-stock">Em Stock</span><span class="sku">{{ $prod->quantidade }}</span></p>
                                @endif
                            </div>
                            <div class="box-quantity">
                                <form action="#">
                                          <!-- Product Color -->
                                              <span>Tamanhos</span>
                                              <div class="product-color">
                                                <div class="color-choose">
                                                   @foreach($prod->produtosize as $key => $item)
                                                      <div>
                                                        <input data-image="red{{$key}}" type="radio" id="red{{$key}}" name="size">
                                                        <label for="red{{$key}}"><span>{{$item->size->tamanho}}</span></label>
                                                      </div>
                                                   @endforeach
                                                </div>
                                              </div>
                                                <span>Cor</span>
                                                <div class="exemplo">
                                                    @foreach($prod->produtocor as $key => $item)
                                                        <input type="radio" value="0" name="campo-radio" id="campo-radio{{$key}}"/>
                                                        <label for="campo-radio{{$key}}"></label>
                                                    @endforeach
                                                </div>
 
                                              <input class="number" id="numeric" type="number" min="1" value="1">
                                              <a class="add-cart" href="#">Add Pedido</a>
                                </form>
                            </div>
                            <div class="product-link">
                                <ul class="list-inline">
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Email</a></li>
                                </ul>
                            </div>
                            <p class="ptb-20 text-justify"> {{ $prod->subtitulo }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="thumnail-desc pb-60" style="margin-top: 5%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="main-thumb-desc nav">
                            <li><a class="active" data-toggle="tab" href="#dtail">Detalhe</a></li>
                        </ul>
                        <div class="tab-content thumb-content border-default">
                            <div id="dtail" class="tab-pane in active">
                                   {{ $prod->descricao }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Thumbnail Description End -->
        <!-- Realted Product Start -->
         <div class="related-product pb-30">
            <div class="container">
                <div class="group-title">
                    <h2>Produtos Relacionados</h2>
                </div>
                <!-- Best Product Activation Start -->
                <div class="best-seller-pro-active  owl-carousel slider-right-content">
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-40%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <a href=""><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-25%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <a href="#"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-60%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <a href="#"><img class="img" src="img/pen1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <a href="#"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <a href="#"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href=""><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
         <div class="related-product pb-30">
            <div class="container">
                <div class="group-title">
                    <h2>Promoções</h2>
                </div>
                <!-- Best Product Activation Start -->
                <div class="best-seller-pro-active  owl-carousel slider-right-content">
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-40%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <a href=""><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-25%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <a href="#"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-60%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <a href="#"><img class="img" src="img/pen1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <a href="#"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
                                <a href="#"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href=""><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
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
        
        <!-- Upsell Product End -->
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