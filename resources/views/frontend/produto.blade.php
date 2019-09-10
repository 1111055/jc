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
                                <a data-fancybox="images" href="#"><img src="{{ $prod->pathbig }}" alt="product-view"></a>
                            </div>
                            @foreach($prod->imagensproduto as $key => $item)
                                <div id="thumb{{$key}}" class="tab-pane">
                                    <a data-fancybox="images" href="{{ $item->link }}"><img src="{{ $item->pathbig }}" alt="{{ $prod->titulo }}"></a>
                                </div>
                            @endforeach
                        </div>

                        <div class="product-thumbnail">
                            <div class="thumb-menu nav">
                                <a class="active" data-toggle="tab" href="#thumb"> <img src="{{ $prod->pathbig }}" alt="{{ $prod->titulo }}"></a>
                                 @foreach($prod->imagensproduto as $key => $item)
                                     <a data-toggle="tab" href="#thumb{{$key}}"> <img src="{{ $item->pathbig }}" alt="{{ $prod->titulo }}"></a>
                                 @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="thubnail-desc fix">
                            <h3 class="product-header">{{ $prod->titulo }}</h3>
                            <h7> Ref: {{ $prod->cod_art }}</h7>
                            <div class="pro-ref mb-15" style="margin-top: 2%;">
                                @if($prod->quantidade > 0)
                                        <p><span class="in-stock">Em Stock</span><span class="sku">{{ $prod->quantidade }}</span></p>
                                @endif
                            </div>
                            <div class="box-quantity">
                                {!! Form::open(['url' => 'addtobag']) !!}
                               <!-- Product Color -->
                                              @if(count($prod->produtosize) > 0)
                                                  <span>Tamanhos</span>
                                                  <div class="product-color">
                                                    <div class="color-choose">
                                                       @foreach($prod->produtosize as $key => $item)
                                                          <div>
                                                            <input data-image="red{{$key}}" type="radio" id="red{{$key}}" value="{{$item->size->id}}" name="size">
                                                            <label for="red{{$key}}"><span>{{$item->size->tamanho}}</span></label>
                                                          </div>
                                                       @endforeach
                                                    </div>
                                                  </div>
                                              @endif
                                              @if(count($prod->produtocor) > 0)
                                                <span>Cor</span>
                                                <div class="exemplo">
                                                    @foreach($prod->produtocor as $key => $item)
                                                        <input type="radio" value="{{$item->cor->id}}" name="cor" id="campo-radio{{$key}}"/>
                                                        <label for="campo-radio{{$key}}"></label>
                                                    @endforeach
                                                </div>
                                              @endif
 
                                              <input class="number" id="numeric" type="number" name="quantidade" min="1" value="1">
                                               <input  type="hidden" name="id" min="1" value="{{ $prod->id}}">

                                              <button class="add-cart" type="submit"href="#">Add Pedido</button>
                             {{ Form::close() }}
                            </div>
                            <div class="product-link">
                                <ul class="list-inline">
                                    @if(in_array($prod->id, $arrwhi))
                                       <li><a class="exist-whish" href="#">Wish List</a></li>
                                    @else
                                        <li><a href="{{route('produto.wish',$prod->id)}}">Wish List</a></li>
                                    @endif
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


        <div class="related-product pb-30">
            <div class="container">
                <div class="group-title">
                    <h2>Produtos Relacionados.</h2>
                </div>
                <div class="best-seller-pro-active  owl-carousel slider-right-content">
                    @foreach($relacionados as $item)
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
            </div>
        </div>  

        <div class="related-product pb-30">
            <div class="container">
                <div class="group-title">
                    <h2>Produtos Mais Vistos.</h2>
                </div>

                <div class="best-seller-pro-active  owl-carousel slider-right-content">
                    @foreach($moreview as $item)
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
            </div>
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