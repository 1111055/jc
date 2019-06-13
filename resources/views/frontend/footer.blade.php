        <footer class="off-white-bg">
            <!-- Footer Top Start -->
            <div class="footer-top pt-50 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mr-auto ml-auto">
                            <div class="newsletter text-center">
                                <div class="main-news-desc">
                                     <div class="news-desc">
                                         <h3>Subscreva a Nossa Newsletter</h3>
                                         <p>Insira o seu email e recebe fantasticas ofertas.</p>
                                     </div>
                                </div>
                                <div class="newsletter-box">
                                    <form action="#">
                                        <input class="subscribe" placeholder="Email" name="email" id="subscribe" type="text">
                                        <button type="submit" class="submit">Subscrever</button>
                                    </form>
                                </div>
                             </div>                            
                        </div>
                    </div>                    
                    <div class="row">
                        <!-- Single Footer Start -->
                        <div class="col-lg-5  col-md-7 col-sm-6">
                            <div class="single-footer">
                                <h3>Contactos</h3>
                                <div class="footer-content">
                                    <div class="loc-address">
                                        <span><i class="fa fa-map-marker"></i>{{$setting->rua}} , {{$setting->cidade}} </span>
                                        <span><i class="fa fa-envelope-o"></i>Email : {{$setting->email1}}</span>
                                        <span><i class="fa fa-phone"></i>Telemovel:    {{$setting->contacto2}}</span>
                                    </div>
                                    <!--div class="payment-mth"><a href="#"><img class="img" src="img/footer/1.png" alt="payment-image"></a></div-->
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-4  col-md-5 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">Informações</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        @foreach($menufooter as $item)
                                             <li><a href="{{$item->path}}">{{ $item->menu}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-3  col-md-4 col-md-4 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">Prazos e Entregas</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                         @foreach($prazos as $item)
                                            <li><i class="fa fa-truck"></i> {{$item->titulo}}  - {{$item->dias}} dias</li>
                                         @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <!--div class="col-lg-2 col-md-4 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">customer service</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="account.html">My account</a></li>
                                        <li><a href="#">New</a></li>
                                        <li><a href="#">Gift Cards</a></li>
                                        <li><a href="#">Return Policy</a></li>
                                        <li><a href="#">Your Orders</a></li>
                                        <li><a href="#">Subway</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <!--div class="col-lg-2 col-md-4 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">Let Us Help You</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">Your Account</a></li>
                                        <li><a href="#">Your Orders</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Amazon Prime</a></li>
                                        <li><a href="#">Replacements</a></li>
                                        <li><a href="#">Manage </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Top End -->
            <!-- Footer Bottom Start -->
            <div class="footer-bottom off-white-bg2">
                <div class="container">
                    <div class="footer-bottom-content">
                        <p class="copy-right-text">Copyright © <a  href="#">Ibero Brinde</a> All Rights Reserved.</p>
                        <div class="footer-social-content">
                            <ul class="social-content-list">

                              @foreach($socials as $item)
                                <li><a href="{{ $item->link}}"><i class="{{$item->class}}"></i></a></li>
                              @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Bottom End -->
        </footer>
        <!-- Footer End -->