@extends('frontend.app')

@section('content')

<style type="text/css">
    

</style>>
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
                        <h3>{{ $contact->titulo}}</h3>
                        <div class="descbody" style="margin-top: 2%;">
                           {!! $contact->descricao !!}
                        </div>        
                        <form id="contact-form" class="contact-form">
                            <input name="_token" id="_token" type="hidden" value="{{csrf_token()}}">
                            <div class="address-wrapper">
                                <div class="row">    
                                    <div class="col-md-12">
                                        <div class="address-fname">
                                            <input type="text" name="nome" placeholder="Nome *">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="col-md-4">
                                         <div class="alert alert-danger" role="alert" id="erronome" style="display: none;"></div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="address-email">
                                            <input type="text" name="email" placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="address-web">
                                            <input type="text" name="telefone" placeholder="Telefone / Telemovel">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="col-md-4">
                                          <div class="alert alert-danger" role="alert" id="erroemail" style="display: none;"></div>
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="address-subject">
                                            <input type="text" name="subject" placeholder="Assunto *">
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                       <div class="col-md-4">
                                         <div class="alert alert-danger" role="alert" id="erroassunto" style="display: none;"></div>
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="address-textarea">
                                            <textarea name="message" placeholder="Mensagem"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="termos" name="termos">
                                  <label class="form-check-label" for="defaultCheck1">
                                    Confirmo que li e aceito os <a target="_blank" href="{{route('terms')}}"><strong>termos e condições</strong></a>, impostos pela empresa Ibero Brindes.
                                  </label>
                            </div>
                            <div class="col-md-12">
                               <div class="col-md-4">
                                 <div class="alert alert-danger" role="alert" id="errotermos" style="display: none;"></div>
                               </div>
                            </div>
                            <p class="form-message ml-15">* Campo Obrigatório.</p>

                            <div class="col-xs-12 footer-content mail-content">
                                <div class="send-email">
                                    <input type="submit" value="Enviar" id="sendcontact" class="submit">
                                    <div class="fa-3x" style="display: none;" id="loaderorca">
                                        <i class="fa fa-spinner fa-pulse" style="margin-left: 50%;"></i>
                                    </div>
                                    <div class="alert alert-success" role="alert" id="enviosucesso" style="display: none;"></div>
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
