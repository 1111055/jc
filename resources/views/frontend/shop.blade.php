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
                        <li class="active"><a href="{{route('shop')}}">Produtos</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Shop Page Start -->
        <div class="main-shop-page pb-60">
            <div class="container">
                <!-- Row End -->
                <div class="row">
                    <!-- Sidebar Shopping Option Start -->
                    <div class="col-lg-3  order-2">
                        <div class="sidebar white-bg">
                            <div class="single-sidebar">
                                <div class="group-title">
                                    <h2>Categorias</h2>
                                </div>
                                <ul>
                                    <li><a href="#">Criança</a></li>
                                    <li><a href="#">Homem</a></li>
                                    <li><a href="#">Mulher</a></li>
                                    <li><a href="#">Casa</a></li>
                                    <li><a href="#">Restauração</a></li>
                                </ul>
                            </div>
                            <div class="single-sidebar">
                                <div class="group-title">
                                    <h2>Cor</h2>
                                </div>
                                <ul class="color-option">
                                    <li>
                                        <a class="blue" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="green" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="black" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="rose" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="red" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="purple" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="rose" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="yellow" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="orange" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                            <!--div class="single-sidebar">
                                <div class="group-title">
                                    <h2>Preço</h2>
                                </div>
                                <form action="#">
                                    <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header" ></div>
                                    </div>
                                        <input id="amount" class="amount" readonly="" type="text">
                                </form>
                            </div>
                            <div class="single-sidebar">
                                <div class="group-title">
                                    <h2>manufacturer</h2>
                                </div>
                                <ul class="manufactures-list">
                                    <li><a href="#">Brand one (14)</a></li>
                                    <li><a href="#">Brand two (13)</a></li>
                                    <li><a href="#">Brand three (13)</a></li>
                                    <li><a href="#">Brand four (14)</a></li>
                                    <li><a href="#">Brand five (13)</a></li>
                                </ul>
                            </div>
                            <div class="single-sidebar">
                                <div class="group-title">
                                    <h2>Compare Products</h2>
                                </div>
                                <div class="best-seller-pro-two compare-pro best-seller-pro-two owl-carousel">
                                    <div class="best-seller-multi-product">
                                        <div class="single-product">
                                            <div class="pro-img">
                                                <a href="product.html">
                                                   <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p><span class="price">$38.00</span><del class="prev-price">$40.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-seller-multi-product">
                                        <div class="single-product">
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/2.jpg" alt="single-product">
                                                </a>
                                            <div class="pro-content">
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p><span class="price">$32.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-seller-multi-product">
                                        <div class="single-product">
                                            <div class="pro-img">
                                                <a href="product.html">
                                                   <img class="primary-img" src="img/products/3.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p><span class="price">$35.00</span><del class="prev-price">39.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                            <div class="single-sidebar">
                                <div class="group-title">
                                    <h2>Wish List</h2>
                                </div>
                                <div class="best-seller-pro-two compare-pro best-seller-pro-two owl-carousel">
                                    <div class="best-seller-multi-product">
                                        <div class="single-product">
                                            <div class="pro-img">
                                                <a href="{{route('produto')}}">
                                                    <img class="rounded mx-auto d-block primary-img" src="img/caneta1.png" alt="single-product">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h4><a href="{{route('produto')}}">Pen</a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-seller-multi-product">
                                        <div class="single-product">
                                            <div class="pro-img">
                                                <a href="{{route('produto')}}">
                                                    <img class="rounded mx-auto d-block primary-img" src="img/pen1.png" alt="single-product">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h4><a href="{{route('produto')}}">Pen</a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-seller-multi-product">
                                        <div class="single-product">
                                            <div class="pro-img">
                                                <a href="{{route('produto')}}">
                                                   <img class=" rounded mx-auto d-block primary-img" src="img/caneta2.png" alt="single-product">
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h4><a href="{{route('produto')}}l">Caneta </a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar single-banner zoom pt-20">
                                <a href="{{route('shop')}}" class="hidden-sm"><img src="img/pen1.png" class="rounded mx-auto d-block banner1" alt="slider-banner"></a>
                                <a href="{{route('shop')}}" class="visible-sm"><img src="img/caneta2.png"  class="rounded mx-auto d-block banner1" alt="slider-banner"></a>
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
                                    <select class="sorter" name="sorter">
                                        <option value="Product Name">Nome</option>
                                    </select>
                                    <span><a href="#"><i class="fa fa-arrow-up"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <div class="main-categorie">
                            <div class="tab-content fix">
                                <div id="grid-view" class="tab-pane ">
                                    <div class="row">
                                        <!-- Single Product Start -->                    
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                                    </a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>                                
                                                    <h4><a href="{{route('produto')}}">Pen</a></h4>
                                                    <div class="pro-actions">
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Adicionar Wishlist"><i class="fa fa-heart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->                    
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                                    </a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>                                
                                                    <h4><a href="{{route('produto')}}">Caneta</a></h4>
                                                    <div class="pro-actions">
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Adicionar Wishlist"><i class="fa fa-heart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">-20%</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->                    
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                                    </a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>                                
                                                    <h4><a href="{{route('produto')}}">Bone</a></h4>
                                                    <div class="pro-actions">
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Adicionar Wishlist"><i class="fa fa-heart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->                    
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                                    </a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>                                
                                                    <h4><a href="{{route('produto')}}">T-Shirt</a></h4>
                                                    <div class="pro-actions">
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Adicionar Wishlist"><i class="fa fa-heart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">-10%</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->  
                                        <!-- Single Product Start -->                    
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                                    </a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>                                
                                                    <h4><a href="{{route('produto')}}">Pen </a></h4>
                                                    <div class="pro-actions">
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Adicionar Wishlist"><i class="fa fa-heart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->                    
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                                    </a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>                                
                                                    <h4><a href="{{route('produto')}}">T-Shirt</a></h4>
                                                    <div class="pro-actions">
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Adicionar Wishlist"><i class="fa fa-heart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->                    
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                                    </a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>                                
                                                    <h4><a href="{{route('produto')}}">Calças</a></h4>
                                                    <div class="pro-actions">
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Adicionar Wishlist"><i class="fa fa-heart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">-30%</span>
                                            </div>
                                        </div>          
                                    </div>                                    
                                </div>
                                <!-- #grid view End -->
                                <div id="list-view" class="tab-pane active">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>                                
                                            <h4><a href="{{route('produto')}}">Calças</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati velit, similique voluptas doloribus assumenda quis libero animi cumque dignissimos quisquam, quaerat ea laboriosam incidunt ullam.</p>
                                            <div class="pro-actions">
                                                <div class="actions-secondary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product Start -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>                                
                                           <h4><a href="{{route('produto')}}">T-Shirt</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati velit, similique voluptas doloribus assumenda quis libero animi cumque dignissimos quisquam, quaerat ea laboriosam incidunt ullam.</p>
                                            <div class="pro-actions">
                                                <div class="actions-secondary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">-30%</span>
                                    </div>
                                    <!-- Single Product Start -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>                                
                                           <h4><a href="{{route('produto')}}">Pen</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati velit, similique voluptas doloribus assumenda quis libero animi cumque dignissimos quisquam, quaerat ea laboriosam incidunt ullam.</p>
                                            <div class="pro-actions">
                                                <div class="actions-secondary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product Start -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>                                
                                           <h4><a href="{{route('produto')}}">Caneta</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati velit, similique voluptas doloribus assumenda quis libero animi cumque dignissimos quisquam, quaerat ea laboriosam incidunt ullam.</p>
                                            <div class="pro-actions">
                                                <div class="actions-secondary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">-30%</span>
                                    </div>
                                    <!-- Single Product Start -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>                                
                                            <h4><a href="{{route('produto')}}">Vestido</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati velit, similique voluptas doloribus assumenda quis libero animi cumque dignissimos quisquam, quaerat ea laboriosam incidunt ullam.</p>
                                            <div class="pro-actions">
                                                <div class="actions-secondary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product Start -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{route('produto')}}">
                                                        <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                        <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>                                
                                            <h4><a href="{{route('produto')}}">Boné</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati velit, similique voluptas doloribus assumenda quis libero animi cumque dignissimos quisquam, quaerat ea laboriosam incidunt ullam.</p>
                                            <div class="pro-actions">
                                                <div class="actions-secondary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">-30%</span>
                                    </div>
                                    <!-- Single Product Start -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{route('produto')}}">
                                                <img class="primary-img" src="img/pen1.png" alt="single-product">
                                                <img class="secondary-img" src="img/caneta2.png" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>                                
                                            <h4><a href="{{route('produto')}}">Caneta</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati velit, similique voluptas doloribus assumenda quis libero animi cumque dignissimos quisquam, quaerat ea laboriosam incidunt ullam.</p>
                                            <div class="pro-actions">
                                                <div class="actions-secondary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>                                  
                                </div>
                                <!-- #list view End -->
                            </div>
                            <!-- Grid & List Main Area End -->
                        </div>
                        <!--Breadcrumb and Page Show Start -->
                        <div class="pagination-box fix">
                            <ul class="blog-pagination ">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                            <div class="toolbar-sorter-footer">
                                <label>Mostrar</label>
                                <select class="sorter" name="sorter">
                                    <option value="Position" selected="selected">12</option>
                                    <option value="Product Name">15</option>
                                    <option value="Price">30</option>
                                </select>
                                <span>por página</span>
                            </div>
                        </div>
                        <!--Breadcrumb and Page Show End -->
                    </div>
                    <!-- product Categorie List End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Shop Page End -->
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