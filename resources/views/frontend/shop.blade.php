@extends('frontend.app')

@section('content')

<style>

.primary-img {max-width: 50%;}
.secondary-img {max-width: 50%;}
.banner1 {max-width: 70%;}

</style>
        <!-- Header Area End -->   
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area ptb-60 ptb-sm-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active"><a href="#">Produtos</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-shop-page pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  order-2">
                        <div class="sidebar white-bg">
                            <div class="single-sidebar">
                            {!! Form::open(['url' => 'shop','class' => 'form-horizontal']) !!}
                                       <input type="hidden" id="subcategoria" name="subcategoria" value="{{$subcat->id}}"> 
                                      @if(Session::has('filter'))

                                                @if(count(Session::get('filter')[2])>0)
                                                    <div class="single-sidebar">
                                                        <div class="group-titlewish">
                                                            <h2>{{$subcat->titulo}}</h2>
                                                        </div>
                                                       
                                                        <ul>
                                                            @foreach(Session::get('filter')[2] as $item)
                                                                <input type="checkbox" id="familia" name="familia[]" value="{{$item['id']}}" > {{$item['titulo']}}
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            
                                        
                                                @if(count(Session::get('filter')[1])>0)
                                                    <div class="single-sidebar">
                                                        <div class="group-titlewish">
                                                            <h2>Cor</h2>
                                                        </div>
                                                        <ul class="color-option">
                                                            @foreach(Session::get('filter')[1] as $item)
                                                             <li>
                                                                  <input type="checkbox" id="colors" name="colors[]" value="{{$item['id']}}"> <a href="#" style="background-color: {{$item['cor']}} "></a>
                                                             </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            
                                            @if(count(Session::get('filter')[0])>0)
                                                <div class="single-sidebar">
                                                    <div class="group-titlewish">
                                                        <h2>Tamanhos</h2>
                                                    </div>
                                                    <ul class="manufactures-list">
                                                          @foreach(Session::get('filter')[0] as $item)
                                                              <input type="checkbox" id="sizes" name="sizes[]" value="{{$item['id']}}" > {{$item['size']}}
                                                          @endforeach
                                                    </ul>
                                                </div>
                                                
                                            @endif
                                       @endif
                                       {!! Form::submit('Filtrar',['class' => 'btn btn-info pull-right']) !!}
                            {!! Form::close() !!}
                            </div>
                            @if(count(Session::get('wish')) > 0)
                            <div class="single-sidebar">
                                <div class="group-title">
                                    <h2>Wish List</h2>
                                </div>
                                <div class="best-seller-pro-two compare-pro best-seller-pro-two owl-carousel">
                                    <div class="best-seller-multi-product">
                                      @foreach(Session::get('wish') as $item)
                                        <div class="single-product">
                                            <div class="pro-img">
                                                <a href="{{route('produto.show',$item->id)}}">
                                                    <img class="rounded mx-auto d-block primary-img" src="{{$item->path}}" alt="single-product">
                                                </a>
                                            </div>
                                        </div>
                                       @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="single-sidebar single-banner zoom pt-20">
                                <a href="#" class="hidden-sm"><img src="img/pen1.png" class="rounded mx-auto d-block banner1" alt="slider-banner"></a>
                                <a href="#" class="visible-sm"><img src="img/caneta2.png"  class="rounded mx-auto d-block banner1" alt="slider-banner"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 order-lg-2">
                        <div class="grid-list-top border-default universal-padding fix mb-30">
                            <div class="grid-list-view f-left">
                                <ul class="list-inline nav">
                                    <li><a data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li><a  class="active" data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                                    <li><span class="grid-item-list">25 Produtos</span></li>
                                </ul>
                            </div>
                            <div class="main-toolbar-sorter f-right">
                                <div class="toolbar-sorter">
                                    <label>Ordernar Por</label>
                                    <select class="sorter" name="sorter" id="sort">
                                        <option value="asc"> Nome ASC</option>
                                        <option value="desc">Nome DESC</option>
                                    </select>
                                    <span><a href="#"><i class="fa fa-arrow-up"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <div class="main-categorie">
                            <div class="tab-content fix">
                                <div id="grid-view" class="tab-pane ">
                                    <div class="row">
                                        @foreach($produtos as $item)                  
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="single-product">
                                                    <!-- Product Image Start -->
                                                    <div class="pro-img">
                                                        <a href="{{route('produto')}}">
                                                            @if($item->path == null) 
                                                               <img class="primary-img" src="{{ public_path('/img/Produtos/CROP/noimage.png') }}" alt="single-product">
                                                               <img class="secondary-img" src="{{ public_path('/img/Produtos/CROP/noimage.png') }}" alt="single-product">
                                                            @else
                                                               <img class="primary-img" src="{{$item->path}}" alt="single-product">
                                                               <img class="secondary-img" src="{{$item->path}}" alt="single-product">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="pro-content">                                
                                                        <h4><a href="{{route('produto')}}">{{$item->titulo}}</a></h4>
                                                        <div class="pro-actions">
                                                            <div class="actions-secondary">
                                                                <a href="{{route('produto.wish',$item->id)}}" data-toggle="tooltip" title="Adicionar Wishlist"><i class="fa fa-heart"></i></a>
                                                                <a href="{{route('produto.bag',$item->id)}}" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Product Content End -->
                                                </div>
                                            </div>
                                        @endforeach         
                                    </div>                                    
                                </div>
                                <!-- #grid view End -->
                                <div id="list-view" class="tab-pane active">
                                    @foreach($produtos as $item)              
                                        <div class="single-product">
                                            <div class="pro-img">
                                                <a href="{{route('produto', $item->id)}}">
                                                    @if($item->path == null) 
                                                       <img class="primary-img" src="{{ public_path('/img/Produtos/CROP/noimage.png') }}" alt="single-product">
                                                       <img class="secondary-img" src="{{ public_path('/img/Produtos/CROP/noimage.png') }}" alt="single-product">
                                                    @else
                                                       <img class="primary-img" src="{{$item->path}}" alt="single-product">
                                                       <img class="secondary-img" src="{{$item->path}}" alt="single-product">
                                                    @endif    
                                                </a>
                                            </div>
                                            <div class="pro-content">                               
                                                <h4><a href="{{route('produto',$item->id)}}">{{$item->titulo}}</a></h4>
                                                 {{$item->descricao}}
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="{{route('produto.wish',$item->id)}}" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="{{route('produto.bag',$item->id)}}" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    @endforeach                         
                                </div>
                            </div>
                        </div>
                        <div class="pagination-box fix">
                            {!! $produtos->links();!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop