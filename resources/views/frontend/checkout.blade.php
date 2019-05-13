@extends('frontend.app')

@section('content')

        <div class="breadcrumb-area pt-60 pb-55 pt-sm-30 pb-sm-20">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active"><a href="{{route('checkout')}}">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Cart Main Area Start -->
        <div class="cart-main-area pb-80 pb-sm-50">
            <div class="container">
               <h2 class="text-capitalize sub-heading">Checkout</h2>
                <div class="row">
                    <div class="col-md-8">
                        <!-- Form Start -->
                        <form action="#">
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-50">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="img/pen1.png" alt="cart-image" style="max-width: 30%;" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">Fitas Top</a></td>
                                            <td class="product-quantity"><input type="number" value="1" /></td>
                                            <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="img/caneta1.png" alt="cart-image" style="max-width: 30%;" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">Caneta Top</a></td>
                                            <td class="product-quantity"><input type="number" value="1" /></td>
                                            <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Content Start -->
                            <div class="row">
                               <!-- Cart Button Start -->
                                <div class="col-lg-8 col-md-7">
                                    <div class="buttons-cart">
                                        <a href="#">Voltar ao Produtos</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Row End -->
                        </form>
                        <!-- Form End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                            <div class="checkbox-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Nome <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Empresa <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Tlm/ Tlf  </label>
                                            <input type="text" placeholder="Contacto Telemovel ou Telefone" />
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Observações</label>
                                            <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notas Especiais"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                        <input type="submit" value="Pedir Orçamento" />
                                </div>
                            </div>
                    </div>

                </div>
                 <!-- Row End -->
            </div>
        </div>
        <!-- Cart Main Area End -->
        <!-- Brand Logo Start -->
        <!--div class="brand-area pb-60">
            <div class="container">
                <!-- Brand Banner Start -->
                <!--div class="brand-banner owl-carousel">
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