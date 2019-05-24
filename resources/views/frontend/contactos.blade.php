@extends('frontend.app')

@section('content')
 <!-- Header Area End -->  
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area ptb-60 ptb-sm-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active"><a href="{{route('contactos')}}">Contactos</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Google Map Start -->
        <div class="container">
            <div id="map"></div>
        </div>
        <!-- Google Map End -->
        <!-- Contact Email Area Start -->
        <div class="contact-email-area ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Contacte Nos</h3>
                        <p class="text-capitalize mb-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <form id="contact-form" class="contact-form" action="mail.php" method="post">
                            <div class="address-wrapper">
                                <div class="row">    
                                    <div class="col-md-12">
                                        <div class="address-fname">
                                            <input type="text" name="name" placeholder="Nome">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="address-email">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="address-web">
                                            <input type="text" name="website" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="address-subject">
                                            <input type="text" name="subject" placeholder="Assunto">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="address-textarea">
                                            <textarea name="message" placeholder="Mensagem"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="form-message ml-15"></p>
                            <div class="col-xs-12 footer-content mail-content">
                                <div class="send-email">
                                    <input type="submit" value="Enviar" class="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Email Area End -->
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