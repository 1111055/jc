@extends('frontend.app')

@section('content')

<style>
.dot {
  height: 25px;
  width: 25px;
  border-radius: 50%;
  display: inline-block;
}
</style>

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
                <form   id="orcamentosend">
                <input name="_token" id="_token" type="hidden" value="{{csrf_token()}}">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Form Start -->
                        
                            @if(Session::has('bagone'))
                                <div class="table-content table-responsive mb-50">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">#</th>
                                                <th class="product-name">Produto</th>
                                                <th class="col-xs-4"> Cores </th>
                                                <th>Tamanho</th>
                                                <th class="product-quantity">Quantidade</th>
                                                <th class="product-remove">Remover</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart as $item)
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="{{route('produto.show',$item['produto']->id)}}"><img src="{{$item['produto']->path}}" alt="cart-image" style="max-width: 30%;" /></a>
                                                    </td>

                                                    <td class="product-name"><a href="{{route('produto.show',$item['produto']->id)}}">{{$item['produto']->titulo}}</a></td>
                                                    
                                                    <td class="col-xs-4"><select name="cor[]" id="selcororc">
                                                            @foreach($item['colors'] as $itemcor)
                                                              <option value="{{$itemcor['id']}}" cor="{{$itemcor['cor']}}" style="background-color: {{$itemcor['cor']}}"></option> 
                                                            @endforeach()  
                                                        </select>
                                                    </td>
                                                    <td><select name="size[]">
                                                           @foreach($item['sizes'] as $itemsize)
                                                             <option value="{{$itemcor['id']}}">{{strtoupper($itemsize['size'])}}</option> 
                                                           @endforeach() 
                                                        </select>
                                                    </td>
                                                    <input type="hidden" name="prod[]" value="{{$item['produto']->id}}" />
                                                    <td class="product-quantity"><input type="number" name="quantidade[]" value="1" /></td>
                                                    <td class="product-remove"> <a href="{{route('produto.removebag',$item['produto']->id)}}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                                </tr>
                                            @endforeach()
                                        </tbody>
                                    </table>
                                </div>
                            @endif

                    </div>
                    <div class="col-lg-4 col-md-6">
                      
                           
                            <div class="checkbox-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Nome <span class="required">*</span></label>
                                            <input type="text" name="nome" placeholder="" />
                                            <div class="alert alert-danger" role="alert" id="erronome" style="display: none;"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="text" name="email" placeholder="" />
                                            <div class="alert alert-danger" role="alert" id="erroemail" style="display: none;"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Empresa </label>
                                            <input type="text" name="empresa" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Tlm/ Tlf  </label>
                                            <input type="text" name="telemovel" placeholder="Contacto Telemovel ou Telefone" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Observações</label>
                                            <textarea id="obs" name="obs" cols="30" rows="10" placeholder="Notas Especiais"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Upload Ficheiro</label>
                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                        </div>
                                    </div>

                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="termos" name="termos">
                                      <label class="form-check-label" for="defaultCheck1">
                                        Confirmo que li e aceito os <a target="_blank" href="{{route('terms')}}"><strong>termos e condições</strong></a>, impostos pela empresa Ibero Brindes.
                                      </label>
                                   </div>

                                  <div class="alert alert-danger" role="alert" id="errotermos" style="display: none;"></div>

                                   
                                </div>
                                <p class="form-message ml-15">* Campo Obrigatório.</p>

                                <div class="order-button-payment">
                                        <input type="submit" id="orcametosubmit" value="Pedir Orçamento" />
                                        <div class="fa-3x" style="display: none;" id="loaderorca">
                                            <i class="fa fa-spinner fa-pulse" style="margin-left: 50%;"></i>
                                        </div>
                                        <div class="alert alert-success" role="alert" id="enviosucesso" style="display: none;"></div>
                                </div>
                            </div>
                         
                       </div>
                    </form>
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