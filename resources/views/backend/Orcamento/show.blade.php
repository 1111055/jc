@extends('backend.app')

@section('content')


         @if(session('sucess'))
         <!--Alerta de sucess-->
            <div class="alert alert-success" id="showsucess" style="border-radius: 0; float: right; margin-top: 2%; position: fixed; right: 0; top: 0; width: 600px; z-index: 9999;">
              {{session('sucess')}}
          </div>
          @endif
           @if ($errors->any())
                <div style="border-radius: 0; float: right; margin-top: 2%; position: fixed; right: 0; top: 0; width: 600px; z-index: 9999;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                    Pedidos Orçamentos
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('orcamento')}}"><i class="fa fa-paint-brush"></i> Pedidos Orçamentos</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             

                  <div class="container">
                       <div class="panel panel-default">
                          <div class="panel-heading">Filtros</div>
                           <div class="panel-body">
                            <div class="box-header">

                              <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                  <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">

                       <div class="col-xs-12">
                          <div class="panel panel-default">
                            <div class="panel-body">
                             <div class="col-xs-6">
                              <ul class="list-group">
                                <li class="list-group-item">Nome: {{ $orcamento->nome}}</li>
                                <li class="list-group-item">Email: {{ $orcamento->email}}</li>
                                <li class="list-group-item">Empresa: {{ $orcamento->empresa}}</li>
                                <li class="list-group-item">Cotacto: {{ $orcamento->telemovel}}</li>
                                <li class="list-group-item">Data: {{ $orcamento->created_at}}</li>
                                <li class="list-group-item">Observações: {{ $orcamento->obs}}</li>
                              </ul>
                             <div>
                            </div>
                          </div>
                        </div>
                    <div class="panel panel-default">
                      <div class="panel-body">
                       <div class="col-xs-12">
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>#</th>
                              <th>Produto</th>
                              <th>Codigo Artigo</th>
                              <th>Cor</th>
                              <th>Tamanho</th>
                              <th>Quantidade</th>
                            </tr>

                             @foreach($orcamento->getOrcamentolines as $item)
                              <tr>
                                <td><a href="{{route('produto.show',$item->produto->id)}}" target="_black"><img src="{{ $item->produto->path }}" class="img-thumbnail" style="width: 18%; height: 30%;"></a></td>
                                <td>{{ $item->produto->titulo }}</td>
                                <td>{{ $item->produto->cod_art }}</td>
                                <td>{{ $item->cor->titulo}}</td>
                                <td>{{ $item->tamanho->titulo}}</td>
                                <td>{{ $item->quantidade }}</td>
                              </tr>
                              @endforeach

                          </table>
                        </div>
                        </div>
                      </div>
                      </div>
                      </div>
                    </div>
                  </div>

                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop