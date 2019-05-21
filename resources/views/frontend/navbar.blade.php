        <!-- Header Area Start -->
        <header>
            <!-- Header Top Start -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Header Top left Start -->                        
                        <div class="col-lg-8 col-md-10 d-center">
                            <div class="header-top-left">
                                <img src="img/icon/call.png" alt="">Contacto : 999 999 999
                            </div>                        
                        </div>
                        <!-- Header Top left End -->
                        <!-- Search Box Start -->                                        
                        <div class="col-lg-4 col-md-12 ml-auto mr-auto">
                            <div class="search-box-view">
                                <form action="#">
                                    <input type="text" class="email" placeholder="Pesquisa de Produto" name="product">
                                    <button type="submit" class="submit"></button>
                                </form>
                            </div>                                           
                        </div>
                        <!-- Search Box End --> 
                        <!-- Header Top Right Start -->                                       
                        <!--div class="col-lg-4 col-md-12">
                            <div class="header-top-right">
                                <ul class="header-list-menu f-right">
                                    <!-- Language Start -->
                                    <!--li><a href="#">Language: English <i class="fa fa-angle-down"></i></a>
                                        <ul class="ht-dropdown">
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Bengali</a></li>
                                            <li><a href="#">Russian</a></li>
                                        </ul>
                                    </li>
                                    <!-- Language End -->                                
                                    <!-- Currency Start -->
                                    <!--li><a href="#">Currency:  USD <i class="fa fa-angle-down"></i></a>
                                        <ul class="ht-dropdown">
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">GBP</a></li>
                                            <li><a href="#">EUR</a></li>
                                        </ul>
                                    </li>
                                    <!-- Currency End -->
                                <!--/ul>
                                <!-- Header-list-menu End -->
                            <!--/div>
                        </div>
                        <!-- Header Top Right End -->
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
                                <a href="{{route('home')}}"><img src="img/logo.png" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Primary Vertical-Menu End -->
                        <!-- Search Box Start -->
                        <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                            <div class="middle-menu pull-right">
                                <nav>
                                    <ul class="middle-menu-list">
                                        <li {{ (Request::is('home') ? 'class=active' : '') }}><a href="{{route('home')}}">home</a>
                                        </li>
                                         <li><a href="#">Produtos<i class="fa fa-angle-down"></i></a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul class="ht-dropdown dropdown-style-two" >
                                                <li><a href="{{route('shop')}}">Textil</a>
                                                    <!-- Start Two Step -->

                                                        <ul class="ht-dropdown dropdown-style-two sub-menu">
                                                            <li><a href="{{route('shop')}}">T-Shirts</a>
                                                            </li>
                                                            <li><a href="{{route('shop')}}">Bonés</a></li>
                                                            <li><img src="img/mochila1.png"  height="180" width="320" class="img-responsive" alt="menu-img"></li>
                                                        </ul>
                                                    
                                                </li>
                                                <li><a href="{{route('shop')}}">Tecnologia e USB</a>
                                                    <!-- Start Two Step -->
                                                        <ul class="ht-dropdown dropdown-style-two sub-menu">
                                                            <li><a href="{{route('shop')}}">Pens </a>
                                                            </li>
                                                            <li><a href="{{route('shop')}}">Pens</a></li>
                                                            <li><a href="{{route('shop')}}">Pens</a></li>
                                                            <li><img src="img/mochila1.png" height="180" width="320"  class="img-responsive" alt="menu-img"></li>
                                                        </ul>
                                                </li>
                                                <li><a href="{{route('shop')}}">Sacos e Mochilas</a>
                                                    <!-- Start Two Step -->
                                                        <ul class="ht-dropdown dropdown-style-two sub-menu">
                                                            <li><a href="{{route('shop')}}">Mochila </a>
                                                            </li>
                                                            <li><a href="{{route('shop')}}">Sacos</a></li>
                                                            <li><a href="{{route('shop')}}">Mochilas</a></li>
                                                            <li><img src="img/mochila1.png"  height="180" width="320"  class="img-responsive" alt="menu-img"></li>
                                                        </ul>
                                                </li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>   
                                        <li {{ (Request::is('home') ? 'class=active' : '') }}><a href="{{route('about')}}">Sobre nós</a></li>                                        
    
                                        <li {{ (Request::is('contactos') ? 'class=active' : '') }}><a href="{{route('contactos')}}">Contactos</a></li>                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Search Box End -->
                        <!-- Cartt Box Start -->
                        <div class="col-lg-3 col-sm-7 col-7">
                            <div class="cart-box text-right">
                                <ul>
                                    <!--li><a href="compare.html"><i class="fa fa-cog"></i></a>
                                        <ul class="ht-dropdown">
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="account.html">Account</a></li>                                            
                                        </ul>
                                    </li-->                                    
                                    <li><a href="{{route('wish')}}"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-basket"></i><span class="cart-counter">2</span></a>
                                        <ul class="ht-dropdown main-cart-box">
                                            <li>

                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="{{route('produto')}}"><img src="img/pen1.png" alt="cart-image"></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="{{route('produto')}}">Toalha</a></h6>
                                                        <span>100</span>
                                                    </div>
                                                    <a class="del-icone" href="{{route('produto')}}"><i class="fa fa-window-close-o"></i></a>
                                                </div>

                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="{{route('produto')}}"><img src="img/caneta1.png" alt="cart-image"></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="{{route('produto')}}">Fitas Top</a></h6>
                                                        <span>200</span>
                                                    </div>
                                                    <a class="del-icone" href=""><i class="fa fa-window-close-o"></i></a>
                                                </div>

                                                <div class="cart-footer fix">
                                                    <div class="cart-actions">
                                                        <a class="checkout" href="{{route('checkout')}}">Pedir Cotação</a>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
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