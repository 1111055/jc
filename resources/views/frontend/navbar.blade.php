
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">                     
                        <div class="col-lg-8 col-md-10 d-center">
                            <div class="header-top-left">
                                <img src="img/icon/call.png" alt="">Contacto : {{$setting->contacto1}}
                            </div>                        
                        </div>                                    
                        <div class="col-lg-4 col-md-12 ml-auto mr-auto">
                            <div class="search-box-view">
                                <form action="#">
                                    <input type="text" class="email" placeholder="Pesquisa de Produto" name="product">
                                    <button type="submit" class="submit"></button>
                                </form>
                            </div>                                           
                        </div>
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End -->
            <!-- Header Bottom Start -->
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-sm-5 col-5">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{asset('logotipo/CROP/logotipo.png')}}" alt="logo-image"></a>
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                            <div class="middle-menu pull-right">
                                <nav>
                                    <ul class="middle-menu-list">


                                @foreach($menu as $test) 
                                    @if(Route::getRoutes()->hasNamedRoute(strtolower($test['path']))) 
                                         @if(count($test['submenutmp']) < 1 && ($loop->iteration != 2) )
                                            <li> <a href="{{route(strtolower($test['path']))}}">{{$test['menu']}}</i></a>
                                         @else
                                            <li> <a href="{{route(strtolower($test['path']))}}">{{$test['menu']}} <i class="fa fa-angle-down"></i></a>
                                            <ul class="ht-dropdown dropdown-style-two" >
                                             @if($loop->iteration != 2)   
                                               @include('frontend.menucico', ['menutmp' => $test['submenutmp']]) 
                                             @else
                                                  @foreach($categoriasmenu as $sub)
                                                       
                                                          <li> <a href="#">{{$sub['menu']}} </a>
                                                              @isset($sub['produtos'])
                                                                @if(count($sub['produtos']) > 0)
                                                                     <ul class="ht-dropdown dropdown-style-two sub-menu">
                                                                       @foreach($sub['produtos'] as $subtmp)
                                                                             <li> <a href="{{route('shop.list',$subtmp['id'])}}">{{$subtmp['menu']}} </a></li>
                                                                       @endforeach
                                                                     </ul>
                                                                 @endif
                                                              @endisset
                                                           </li>
                                                     
                                                  @endforeach
                                             @endif
                                            </ul>
                                         @endif 
                                    @else
                                         @if(count($test['submenutmp']) < 1 ) 
                                            <li> <a href="#">{{$test['menu']}}</i></a>
                                         @else
                                            <li> <a href="#">{{$test['menu']}} <i class="fa fa-angle-down"></i></a> 
                                                <ul class="ht-dropdown dropdown-style-two" >
                                                    @include('frontend.menucico', ['menutmp' => $test['submenutmp']]) 
                                                </ul>
                                         @endif  
                                    @endif 
                                @endforeach

                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Search Box End -->
                        <!-- Cartt Box Start -->
                        <div class="col-lg-3 col-sm-7 col-7">
                            <div class="cart-box text-right">
                                <ul>

                                    <li><a href="{{route('wish')}}"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-basket"></i>@if(Session::has('bagone'))<span class="cart-counter">{{count(Session::get('bagone'))}}</span></a>
                                        <ul class="ht-dropdown main-cart-box">
                                            <li>
                                                @foreach(Session::get('bagone') as $item)
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="{{route('produto.show',$item->id)}}"><img class="img" src="{{$item->path}}" alt="cart-image"></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="{{route('produto')}}">{{$item->titulo}}</a></h6>
                                                        <span>{{$item->cod_art}}</span>
                                                    </div>
                                                    <a class="del-icone" href="{{route('produto.removebag',$item->id)}}"><i class="fa fa-window-close-o"></i></a>
                                                </div>
                                                @endforeach()


                                                <div class="cart-footer fix">
                                                    <div class="cart-actions">
                                                        <a class="checkout" href="{{route('checkout')}}">Pedir Cotação</a>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cartt Box End -->
                        <div class="col-sm-12 d-lg-none">
                            <div class="mobile-menu">
                                <nav>
                                    <ul>
                                        <li><a href="/">home</a>
                                            
                                        </li>
                                        <li><a href="#">shop</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="#">Produtos</a>
                                                    <ul>
                                                        <li><a href="#">Textil</a>
                                                            <!-- Start Three Step -->
                                                            <ul>
                                                                <li><a href="#">Product Category Name</a></li>
                                                                <li><a href="#">Product Category Name</a></li>
                                                                <li><a href="#">Product Category Name</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Product Category Name</a></li>
                                                        <li><a href="#">Product Category Name</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Detalhe</a></li>
                                                <li><a href="#">Cesto</a></li>
                                                <li><a href="#">Checkout</a></li>
                                                <li><a href="#">Wishlist</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
      

                                        <li><a href="#">Sobre Nos</a></li>
                                        <li><a href="#">Contactos</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu  End -->                        
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Bottom End -->
        </header>