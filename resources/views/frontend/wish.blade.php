@extends('frontend.app')

@section('content')

        <!-- Header Area End --> 
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area pt-60 pb-55 pt-sm-30 pb-sm-25">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active"><a href="{{route('wish')}}">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Wish List Start -->
        <div class="cart-main-area wish-list pb-60">
            <div class="container">
                <!-- Section Title Start -->
                <h2 class="text-capitalize sub-heading">Wishlist</h2>
                <!-- Section Title Start End -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Form Start -->
                        <form action="#">
                            <!-- Table Content Start -->
                            @if(count(Session::get('wish')) > 0)
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-remove">Remover</th>
                                            <th class="product-thumbnail">Imagem</th>
                                            <th class="product-thumbnail">Artigo</th>
                                            <th class="product-name">Titulo</th>
                                            <th class="product-subtotal">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach(Session::get('wish') as $item)
                                        <tr>
                                            <td class="product-remove"> <a href="{{route('produto.removewish',$item->id)}}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{$item->path}}" alt="cart-image" style="width: 20% !important;" /></a>
                                            </td>
                                            <td class="product-name"><a href="{{route('produto.show',$item->id)}}">{{$item->cod_art}}</a>
                                            <td class="product-name"><a href="{{route('produto.show',$item->id)}}">{{$item->titulo}}</a></td>
                                            <td class="product-add-to-cart"><a href="{{route('produto.bag',$item->id)}}"><i class="fa fa-shopping-basket"></i></a></td>
                                        </tr>
                                       @endforeach 
                                    </tbody>
                                </table>
                            </div>
                            @endif
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
        </div>
        <!-- Wish List End -->
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
        </div>
        <!-- Brand Logo End -->
@stop