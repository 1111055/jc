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
.exemplo input[type="radio"]#campo-radio1 + label:before {
    background-color: #F44336 !important;
}
.exemplo input[type="radio"]#campo-radio2 + label:before {
    background-color: #0d9bef !important;
}
.exemplo input[type="radio"]#campo-radio3 + label:before {
    background-color: #0def14 !important;
}
.exemplo input[type="radio"]#campo-radio4 + label:before {
    background-color: #ffeb3b !important;
}


 
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
                        <li><a href="{{route('home')}}">Produtos</a></li>
                        <li class="active"><a href="{{route('produto')}}">Detalhe Produto</a></li>
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
                    <!-- Main Thumbnail Image Start -->
                    <div class="col-lg-5">
                        <!-- Thumbnail Large Image start -->
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane active">
                                <a data-fancybox="images" href="#"><img src="img/caneta1.png" alt="product-view"></a>
                            </div>
                            <div id="thumb2" class="tab-pane">
                                <a data-fancybox="images" href="#"><img src="img/caneta2.png" alt="product-view"></a>
                            </div>
                            <div id="thumb3" class="tab-pane">
                                <a data-fancybox="images" href="#"><img src="img/pen1.png" alt="product-view"></a>
                            </div>
                            <div id="thumb4" class="tab-pane">
                                <a data-fancybox="images" href="#"><img src="img/pen1.png" alt="product-view"></a>
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->

                        <!-- Thumbnail Image End -->
                        <div class="product-thumbnail">
                            <div class="thumb-menu nav">
                                    <a class="active" data-toggle="tab" href="#thumb1"> <img src="img/pen1.png" alt="product-thumbnail"></a>
                                    <a data-toggle="tab" href="#thumb2"> <img src="img/pen1.png" alt="product-thumbnail"></a>
                                    <a data-toggle="tab" href="#thumb3"> <img src="img/pen1.png" alt="product-thumbnail"></a>
                                    <a data-toggle="tab" href="#thumb4"> <img src="img/pen1.png" alt="product-thumbnail"></a>
                            </div>
                        </div>
                        <!-- Thumbnail image end -->
                    </div>
                    <!-- Main Thumbnail Image End -->
                    <!-- Thumbnail Description Start -->
                    <div class="col-lg-7">
                        <div class="thubnail-desc fix">
                            <h3 class="product-header">Pen</h3>
                            <div class="rating-summary fix mtb-10">
                                <div class="rating f-left">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="rating-feedback f-left">
                                    <a href="#">(10 Review)</a>
                                    <a href="#">Inserir Review</a>
                                </div>
                            </div>
                            <!--div class="pro-price mb-10">
                                <p><span class="price">$30.00</span><del class="prev-price">-32.00</del></p>
                            </div-->
                            <div class="pro-ref mb-15">
                                <p><span class="in-stock">Em Stock</span><span class="sku">5000</span></p>
                            </div>
                            <div class="box-quantity">
                                <form action="#">
                                          <!-- Product Color -->
                                              <span>Tamanhos</span>
                                              <div class="product-color">
                                                <div class="color-choose">
                                                  <div>
                                                    <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                                                    <label for="red"><span>M</span></label>
                                                  </div>
                                                  <div>
                                                    <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                                                    <label for="blue"><span>L</span></label>
                                                  </div>
                                                  <div>
                                                    <input data-image="black" type="radio" id="black" name="color" value="black">
                                                    <label for="black"><span>XL</span></label>
                                                  </div>
                                                </div>
                                              </div>
                                                <span>Cor</span>
                                                <div class="exemplo">
                                                    <input type="radio" value="0" name="campo-radio" id="campo-radio1"/>
                                                    <label for="campo-radio1"></label>
                                                    <input type="radio" value="0" name="campo-radio" id="campo-radio2" />
                                                    <label for="campo-radio2"></label>
                                                    <input type="radio" value="0" name="campo-radio" id="campo-radio3" />
                                                    <label for="campo-radio3"></label>
                                                    <input type="radio" value="0" name="campo-radio" id="campo-radio4" />
                                                    <label for="campo-radio4"></label>
                                                </div>
 
                                              <input class="number" id="numeric" type="number" min="1" value="1">
                                              <a class="add-cart" href="#">Add Pedido</a>
                                </form>
                            </div>
                            <div class="product-link">
                                <ul class="list-inline">
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Email</a></li>
                                </ul>
                            </div>
                            <p class="ptb-20 text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing 
                                        elit. Aenean commodo ligula eget dolor. Aenean massa 
                                        <strong>strong</strong>. Cum sociis natoque penatibus 
                                        et magnis dis parturient montes, nascetur ridiculus 
                                        mus. Donec quam felis, ultricies nec, pellentesque 
                                        eu, pretium quis, sem. Nulla consequat massa quis 
                                        enim. Donec pede justo, fringilla vel, aliquet nec, 
                                        vulputate eget, arcu. In enim justo, rhoncus ut, 
                                        imperdiet a, venenatis vitae, justo. Nullam dictum 
                                        felis eu pede. </p>
                    </div>
                    <!-- Thumbnail Description End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail End -->
        <!-- Product Thumbnail Description Start -->
        <div class="thumnail-desc pb-60" style="margin-top: 5%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="main-thumb-desc nav">
                            <li><a class="active" data-toggle="tab" href="#dtail">Detalhe</a></li>
                            <!--li><a data-toggle="tab" href="#review">Reviews 1</a></li-->
                        </ul>
                        <!-- Product Thumbnail Tab Content Start -->
                        <div class="tab-content thumb-content border-default">
                            <div id="dtail" class="tab-pane in active">
                                <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing 
                                        elit. Aenean commodo ligula eget dolor. Aenean massa 
                                        <strong>strong</strong>. Cum sociis natoque penatibus 
                                        et magnis dis parturient montes, nascetur ridiculus 
                                        mus. Donec quam felis, ultricies nec, pellentesque 
                                        eu, pretium quis, sem. Nulla consequat massa quis 
                                        enim. Donec pede justo, fringilla vel, aliquet nec, 
                                        vulputate eget, arcu. In enim justo, rhoncus ut, 
                                        imperdiet a, venenatis vitae, justo. Nullam dictum 
                                        felis eu pede <a class="external ext" href="#">link</a> 
                                        mollis pretium. Integer tincidunt. Cras dapibus. 
                                        Vivamus elementum semper nisi. Aenean vulputate 
                                        eleifend tellus. Aenean leo ligula, porttitor eu, 
                                        consequat vitae, eleifend ac, enim. Aliquam lorem ante, 
                                        dapibus in, viverra quis, feugiat a, tellus. Phasellus 
                                        viverra nulla ut metus varius laoreet. Quisque rutrum. 
                                        Aenean imperdiet. Etiam ultricies nisi vel augue. 
                                        Curabitur ullamcorper ultricies nisi.</p> <br>


                                <ul class="tab-list-item">
                                    <li> Lorem ipsum dolor sit amet.</li>
                                    <li> Lorem ipsum dolor sit amet.</li>
                                    <li> Lorem ipsum dolor sit amet.</li>
                                </ul>


                            </div>
                            <!--div id="review" class="tab-pane">
                                <div class="review">
                                    <div class="group-title">
                                        <h2>customer review</h2>
                                    </div>
                                    <h4 class="review-mini-title">Jantrik</h4>
                                    <ul class="review-list">
                                        <li>
                                            <span>Quality</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <label>Jantrik</label>
                                        </li>
                                        <li>
                                            <span>price</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <label>Review by <a href="https://themeforest.net/user/Jantrik">Jantrik</a></label>
                                        </li>
                                        <li>
                                            <span>value</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <label>Posted on 7/20/18</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="review border-default universal-padding mt-30">
                                    <h2 class="review-title mb-30">You're reviewing: <br><span>Go-Get'r Pushup Grips</span></h2>
                                    <p class="review-mini-title">your rating</p>
                                    <ul class="review-list">
                                        <li>
                                            <span>Quality</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li>
                                            <span>price</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li>
                                            <span>value</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <div class="riview-field mt-40">
                                        <form autocomplete="off" action="#">
                                            <div class="form-group">
                                                <label class="req" for="sure-name">Nickname</label>
                                                <input type="text" class="form-control" id="sure-name" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="req" for="subject">Summary</label>
                                                <input type="text" class="form-control" id="subject" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="req" for="comments">Review</label>
                                                <textarea class="form-control" rows="5" id="comments" required="required"></textarea>
                                            </div>
                                            <button type="submit" class="btn-submit">Submit Review</button>
                                        </form>
                                    </div>
                                </div-->
                                <!-- Reviews End -->
                            </div>
                        </div>
                        <!-- Product Thumbnail Tab Content End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail Description End -->
        <!-- Realted Product Start -->
         <div class="related-product pb-30">
            <div class="container">
                <div class="group-title">
                    <h2>Produtos Relacionados</h2>
                </div>
                <!-- Best Product Activation Start -->
                <div class="best-seller-pro-active  owl-carousel slider-right-content">
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-40%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Bone 25</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->

                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href=""><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-25%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-35%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-60%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#"></a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-15%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/pen1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-10%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="E"><img class="img" src="img/pen1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Pen</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-5%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href=""><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                </div>
                <!-- Best Product Activation End -->
            </div>
            <!-- Container End -->
        </div>     
         <div class="related-product pb-30">
            <div class="container">
                <div class="group-title">
                    <h2>Promoções</h2>
                </div>
                <!-- Best Product Activation Start -->
                <div class="best-seller-pro-active  owl-carousel slider-right-content">
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-40%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Bone 25</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->

                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href=""><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-25%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Bone</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-35%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-60%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#"></a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-15%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/pen1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="">Bone</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-10%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="E"><img class="img" src="img/pen1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Pen</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-5%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta1.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/caneta2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="#"><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href=""><img class="img" src="img/mochila2.png" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="#">Mochila</a></h4>
                                <!--p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p-->
                            </div>
                            <span class="sticker-new">-30%</span>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                </div>
                <!-- Best Product Activation End -->
            </div>
            <!-- Container End -->
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